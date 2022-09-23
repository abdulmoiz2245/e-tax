<?php

namespace App\Http\Controllers\Crypto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

use Auth;
use Mail;
use Laravel\Cashier\Cashier;
use App\Models\Payment;
use App\Models\Cronjob_payment;
use App\Models\Plan;

class PaymentController extends Controller
{
    public function create_payment_with_card_method(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        // dd($data);
        $data['card_expiry'] = explode("-", $data['card_expiry']);
        $card_exp_year = $data['card_expiry'][0];
        $card_exp_month = $data['card_expiry'][1];

        try{
               
    
                $payment_method =  Cashier::stripe()->paymentMethods->create([
                    'type' => 'card',
                    'card' => [
                        'number' => $data['card_numbers'],
                        'exp_month' => $card_exp_month,
                        'exp_year' => $card_exp_year,
                        'cvc' => $data['cvc'],
                    ],
                ]);
    
                $stripeCustomer = $user->createOrGetStripeCustomer([
                    'address' => [
                        'country' => $data['country'],
                    ],
                    'email' =>  $user->email,
                    'phone' => $user->info->phone,
                ]);
    
                $user->addPaymentMethod($payment_method);

                if ($user->hasPaymentMethod()) {

                    try {
                        $amount = ((int) $data['amount']) * 100;
                        if ((int) $data['amount'] >= 1) {
                            $payment = $user->charge($amount, $user->paymentMethods()[0]->id);
        
                            if ($payment) {
        
                                $payment_entry = new Payment();
                                $payment_entry->user_id = $user->id;
                                $payment_entry->payment_id = $payment->id;
                                //$payment_entry->plan_id = $data['plan_id'];
                                $payment_entry->amount = $data['amount'];
                                $payment_entry->billed_at = date('Y-m-d');
                                //$payment_entry->next_billed_at = date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d'))));
                                $payment_entry->crypto_plan_id = $data['crypto_plan_id'];
                                $payment_entry->save();
        
                                // $cronjob_payment =  Cronjob_payment::findPaymentOrCreate($user->id);
                                // $cronjob_payment->user_id = $user->id;
                                // $cronjob_payment->payment_id = $payment->id;
                                // $cronjob_payment->email = $user->email;
                                // $cronjob_payment->plan_id = $data['plan_id'];
                                // $cronjob_payment->stripe_id = $user->stripe_id;
                                // $cronjob_payment->amount = $data['amount'];
                                // $cronjob_payment->billed_at = date('Y-m-d');
                                // $cronjob_payment->next_billed_at = date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d'))));
                                // $cronjob_payment->save();
        
                                $user->active_crypto_plan = $data['crypto_plan_id'];
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
        catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'data' => $e->getMessage(),

            ], 500);
        }  
    }
}
