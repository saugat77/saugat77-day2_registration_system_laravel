<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\User;

use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct(){
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);

    }
    public function pay(Request $request){

        try{
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' =>env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
 
            
            ))->send();
          
            if($response->isRedirect()){
                $data = new User;
                $data->userid = $request->userid;
                $data->password = bcrypt($request->password);
                $data->fname = $request->fname;
                $data->lname = $request->lname;
                $data->dob = $request->dob;
                $data->address = $request->faddress;
                $data->apt = $request->fapt;
                $data->city = $request->fcity;
                $data->state = $request->fstate;
                $data->country = $request->fcountry;
                $data->zip = $request->fzip;
                $data->phone = $request->phone;
                $data->email = $request->email;
                $data->spouse_first_name = $request->spouse_first_name;
                $data->spouse_last_name = $request->spouse_last_name;
                $data->child_first_name = $request->child_first_name;
                $data->child_last_name = $request->child_last_name;
                $data->child_age = $request->child_age;
                $data->child_address = $request->child_address;
                $data->child_city = $request->child_city;
                $data->child_state = $request->child_state;
                $data->child_country = $request->child_country;
                $data->child_zip = $request->child_zip;
                $data->payment_status = "Payment_Pending"; 
                $data->save();
                $response->redirect();
            }
            else{
                return $response->getMessage();

            }
        }
        catch(\Throwable $th){
            return $th->getMessage();
        }
       
    }
        public function success(Request $request){
        if($request->input('paymentId') && $request->input('PayerID')){
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'=>$request->input('PayerID'),
                'transactionReference' =>$request->input('paymentId')
            )  );
            $response = $transaction->send();       
            if($response->isSuccessful()){
                $arr = $response->getData();
                $payment = new Payment();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email =$arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY ');
                $payment->payment_status = $arr['state'];
                $payment->save();
                $user = User::find($request->id);
            //     $user->update([
            //     'payment_status' => 'Payment_Done'
            // ]);
                return redirect()->back()->with('message','Added new member');
               
                
            }
            else{
                return $response->getMessage();
            }
           
            
        }
        else{
            return "payment declined" ;
        }
        
    }
    public function error(){
      
                return redirect()->back()->with('message','Payment Canceled  by user');
        }

        
}
