<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Laravel\Cashier\Cashier;
use App\Models\Payment;
use App\Models\Cronjob_payment;
use App\Models\Plan;



Use Exception;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function edit_billling()
    {
        $user = Auth::user();
        $billing_info = $user->infos();
        $data['user'] = $user;
        $data['billing_info'] =$billing_info;
        return view('pages.billing_info.update' , ['data',$data]);


    }

    public function emial_varification(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        $digits = 5;
        $code = rand(pow(10, $digits-1), pow(10, $digits)-1);

        $form_validation = true;

        if($data['email'] == null || $data['first_name'] == null ||
          $data['last_name'] == null ||
          $data['phone_number'] == null ||
          $data['street_address_1'] == null ||
          $data['city'] == null ||
          $data['country'] == null ||
          $data['state'] == null ||
          $data['zip'] == null 
        ){
            $form_validation = false;
            $validation_data = 'Billing Info Missing';
        }else if($data['cardholder_name'] == null ||
        $data['cardholder_number'] == null ||
        $data['card_expiry'] == null ||
        $data['cvc'] == null){
            $form_validation = false;
            $validation_data = 'Payment Method Missing';
        }

        if($form_validation){
            try{
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
                    'data' => 'Email Sent' ,
                ], 200);
            }catch(Exception $e)
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Error',
                    'data' => $e->getMessage() ,
        
                ], 500);
            }
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'data' => $validation_data  ,
    
            ], 500);
        }
        
       
    }

    public function create_payment(Request $request){
        $user = Auth::user();
        $data  = $request->all();
        if($user->hasPaymentMethod()){
            try {
                $amount = ((int) $data['amount']) * 100;

                $payment = $user->charge( $amount , $user->paymentMethods()[0]->id );

                if($payment){

                    $payment_entry = new Payment();
                    $payment_entry->user_id = $user->id;
                    $payment_entry->payment_id = $payment->id;
                    $payment_entry->plan_id = $data['plan_id'];
                    $payment_entry->amount = $data['amount'];
                    $payment_entry->billed_at = date('Y-m-d');
                    $payment_entry->next_billed_at = date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d'))));
                    $payment_entry->save();

                    $cronjob_payment = new Cronjob_payment ();
                    $cronjob_payment->user_id = $user->id;
                    $cronjob_payment->payment_id = $payment->id;
                    $cronjob_payment->stripe_id = $user->stripe_id;
                    $cronjob_payment->amount = $data['amount'];
                    $cronjob_payment->billed_at = date('Y-m-d');
                    $cronjob_payment->next_billed_at = date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d'))));
                    $cronjob_payment->save();

                    return response()->json([
                        'status' => true,
                        'message' => 'Success',
                        'data' =>  $payment
            
                    ], 200);

                }else{
                    return response()->json([
                        'status' => false,
                        'message' => 'Error',
                        'data' =>  'Payment Unsuccesfull'
            
                    ], 500);
                }

                

            } catch (Exception $e) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error',
                    'data' => $e->getMessage() ,
        
                ], 500);
            }
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'data' =>  'Please add Payment method first'
    
            ], 500);
        }
        
    }

}
