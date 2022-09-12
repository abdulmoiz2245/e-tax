<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Laravel\Cashier\Cashier;
use App\Models\Payment;
use App\Models\Cronjob_payment;
use App\Models\Plan;



use Exception;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create_customer_payment_method(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $data['card_expiry'] = explode("-", $data['card_expiry']);
        $card_exp_year = $data['card_expiry'][0];
        $card_exp_month = $data['card_expiry'][1];

        try{
            if ($data['verification_code'] ==   $user->info->verification_code) {
                if ($data['first_name'] != null) {
                    $user->first_name = $data['first_name'];
                }
    
                if ($data['last_name'] != null) {
                    $user->last_name = $data['last_name'];
                }
    
                if ($data['phone_number'] != null) {
                    $user->info->phone = $data['phone_number'];
                }
    
                if ($data['company_name'] != null) {
                    $user->info->company = $data['company_name'];
                }
    
                if ($data['street_address_1'] != null) {
                    $user->info->street_address_1 = $data['street_address_1'];
                }
    
                if ($data['street_address_2'] != null) {
                    $user->info->street_address_2 = $data['street_address_2'];
                }
    
                if ($data['city'] != null) {
                    $user->info->city = $data['city'];
                }
    
                if ($data['country'] != null) {
                    $user->info->country = $data['country'];
                }
    
                if ($data['state'] != null) {
                    $user->info->state = $data['state'];
                }
    
                if ($data['zip'] != null) {
                    $user->info->zip = $data['zip'];
                }
    
                $user->info->billing_verified = 1;
                $user->info->is_billing_added = 1;
    
                $user->save();
                $user->info->save();
    
                $payment_method =  Cashier::stripe()->paymentMethods->create([
                    'type' => 'card',
                    'card' => [
                        'number' => $data['cardholder_number'],
                        'exp_month' => $card_exp_month,
                        'exp_year' => $card_exp_year,
                        'cvc' => $data['cvc'],
                    ],
                ]);
    
                $stripeCustomer = $user->createOrGetStripeCustomer([
                    'address' => [
                        'city' => $data['city'],
                        'country' => $data['country'],
                        'state' => $data['state'],
                        'line1' => $data['street_address_1'],
                        'line2' => $data['street_address_2'],
                        'postal_code' => $data['zip'],
                    ],
                    'email' =>  $user->email,
                    'phone' => $user->info->phone,
                ]);
    
                $user->addPaymentMethod($payment_method);
    
                return response()->json([
                    'status' => true,
                    'message' => 'success',
                    'data' => 'Payment Method Added Successfully',

                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Error',
                    'data' => 'Verification Code Mismatch',

                ], 500);
            }
        }catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'data' => $e->getMessage(),

            ], 500);
        }

        
    }

    public function update_customer_payment_method(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        if ($data['card_expiry'] != null) {
            $data['card_expiry'] = explode("-", $data['card_expiry']);
            $card_exp_year = $data['card_expiry'][0];
            $card_exp_month = $data['card_expiry'][1];
        }


        if ($data['first_name'] != null) {
            $user->first_name = $data['first_name'];
        }

        if ($data['last_name'] != null) {
            $user->last_name = $data['last_name'];
        }

        if ($data['phone_number'] != null) {
            $user->info->phone = $data['phone_number'];
        }

        if ($data['company_name'] != null) {
            $user->info->company = $data['company_name'];
        }

        if ($data['street_address_1'] != null) {
            $user->info->street_address_1 = $data['street_address_1'];
        }

        if ($data['street_address_2'] != null) {
            $user->info->street_address_2 = $data['street_address_2'];
        }

        if ($data['city'] != null) {
            $user->info->city = $data['city'];
        }

        if ($data['country'] != null) {
            $user->info->country = $data['country'];
        }

        if ($data['state'] != null) {
            $user->info->state = $data['state'];
        }

        if ($data['zip'] != null) {
            $user->info->zip = $data['zip'];
        }

        $user->info->billing_verified = 1;
        $user->info->is_billing_added = 1;


        $user->save();
        $user->info->save();





        $stripeCustomer = $user->updateStripeCustomer([
            'address' => [
                'city' => $data['city'],
                'country' => $data['country'],
                'state' => $data['state'],
                'line1' => $data['street_address_1'],
                'line2' => $data['street_address_2'],
                'postal_code' => $data['zip'],
            ],
            'email' =>  $user->email,
            'phone' => $user->info->phone,
        ]);

        if ($data['cardholder_number'] !=  null && $data['card_expiry'] != null  && $data['cvc']) {
            $payment_method =  Cashier::stripe()->paymentMethods->create([
                'type' => 'card',
                'card' => [
                    'number' => $data['cardholder_number'],
                    'exp_month' => $card_exp_month,
                    'exp_year' => $card_exp_year,
                    'cvc' => $data['cvc'],
                ],
            ]);

            $user->updateDefaultPaymentMethod($payment_method);
        }

        return redirect()->route('billing_invoice');
    }

    public function emial_varification(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        $digits = 5;
        $code = rand(pow(10, $digits - 1), pow(10, $digits) - 1);

        $form_validation = true;

        if (
            $data['email'] == null || $data['first_name'] == null ||
            $data['last_name'] == null ||
            $data['phone_number'] == null ||
            $data['street_address_1'] == null ||
            $data['city'] == null ||
            $data['country'] == null ||
            $data['state'] == null ||
            $data['zip'] == null
        ) {
            $form_validation = false;
            $validation_data = 'Billing Info Missing';
        } else if (
            $data['cardholder_name'] == null ||
            $data['cardholder_number'] == null ||
            $data['card_expiry'] == null ||
            $data['cvc'] == null
        ) {
            $form_validation = false;
            $validation_data = 'Payment Method Missing';
        }

        if ($form_validation) {
            try {
                $details = [
                    'code' => $code
                ];
                \Mail::to($data['email'])->send(new \App\Mail\VarificationMail($details));

                $user->info->billing_verified = '0';
                $user->info->verification_code = $code;
                $user->save();
                $user->info->save();
                return response()->json([
                    'status' => true,
                    'message' => 'Success',
                    'data' => 'Email Sent',
                ], 200);
            } catch (Exception $e) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error',
                    'data' => $e->getMessage(),

                ], 500);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'data' => $validation_data,

            ], 500);
        }
    }

    public function create_payment(Request $request)
    {
        $user = Auth::user();
        $data  = $request->all();
        if ($user->hasPaymentMethod()) {

            try {
                $amount = ((int) $data['amount']) * 100;
                if ((int) $data['amount'] >= 1) {
                    $payment = $user->charge($amount, $user->paymentMethods()[0]->id);

                    if ($payment) {

                        $payment_entry = new Payment();
                        $payment_entry->user_id = $user->id;
                        $payment_entry->payment_id = $payment->id;
                        $payment_entry->plan_id = $data['plan_id'];
                        $payment_entry->amount = $data['amount'];
                        $payment_entry->billed_at = date('Y-m-d');
                        $payment_entry->next_billed_at = date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d'))));
                        $payment_entry->save();

                        $cronjob_payment =  Cronjob_payment::findPaymentOrCreate($user->id);
                        $cronjob_payment->user_id = $user->id;
                        $cronjob_payment->payment_id = $payment->id;
                        $cronjob_payment->email = $user->email;
                        $cronjob_payment->plan_id = $data['plan_id'];
                        $cronjob_payment->stripe_id = $user->stripe_id;
                        $cronjob_payment->amount = $data['amount'];
                        $cronjob_payment->billed_at = date('Y-m-d');
                        $cronjob_payment->next_billed_at = date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d'))));
                        $cronjob_payment->save();

                        $user->active_plan = $data['plan_id'];
                        $user->save();
                        return response()->json([
                            'status' => true,
                            'message' => 'Success',
                            'data' =>  $payment

                        ], 200);
                    } else {
                        return response()->json([
                            'status' => false,
                            'message' => 'Error',
                            'data' =>  'Payment Unsuccesfull'

                        ], 500);
                    }
                }else{
                    $user->active_plan = $data['plan_id'];
                    $user->save();

                    $payment_entry = new Payment();
                        $payment_entry->user_id = $user->id;
                        $payment_entry->plan_id = $data['plan_id'];
                        $payment_entry->amount = $data['amount'];
                        $payment_entry->billed_at = date('Y-m-d');
                        $payment_entry->next_billed_at = date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d'))));
                        $payment_entry->save();

                    return response()->json([
                        'status' => true,
                        'message' => 'Success',
                        'data' =>  'Payment Successful'

                    ], 200);
                }
            } catch (Exception $e) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error',
                    'data' => $e->getMessage(),

                ], 500);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'data' =>  'Please add Payment method first'

            ], 500);
        }
    }
}
