<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;
use App\Mail\ContactUsUserMail;
use App\Mail\HRcareerMail;
use App\Mail\UserCareerMail;
use App\Mail\PackageThanksMail;
use App\Mail\PublishingThanksMail;
use App\Models\Order;
use  GuzzleHttp\Client;
use File;
use Validator;
use DB;

class PaymentController extends Controller{
public function paymentDetailSavePub(Request $request){
        $data['state'] = DB::table('states')->where('country_id',105)->get();
        return view('payment.payment_detail',$data);
    }//End of function

    public function createPayment(Request $request){
        $APIURL = "https://api.cashfree.com/pg/orders";
        $order_id = 'order_' . rand(1111111111, 9999999999);
        $cust_id = 'cust_' . rand(1111111111, 9999999999);
        $curl = curl_init();
        $postData = json_encode([
            'order_id' => $order_id,
            'order_amount' => $request->amount,  
            'order_currency' => 'INR',
            'customer_details' => [
                'customer_id' => $cust_id,
                'customer_name' => $request->cust_name,
                'customer_email' => $request->email,
                'customer_phone' => $request->mobile,
            ],
            'order_meta' => [
                'return_url' => url('payment-callback') . '?order_id=' . $order_id,
                'notify_url' => url('payment-notify'), 
               'payment_methods' => 'cc,dc,upi,nb,emi'
            ]
        ]);
    
        curl_setopt_array($curl, [
            CURLOPT_URL => $APIURL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'X-Client-Secret: 224701d6a17cdeb599b49c40bf54d0fda2b5d3d4',
                'X-Client-Id: 733936538bd77bb9b19ec42f039337',
                'Content-Type: application/json',
                'Accept: application/json',
                'x-api-version: 2022-01-01'
            ],
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData,
        ]);
    
        $response = curl_exec($curl);
    
        if ($error = curl_error($curl)) {
            curl_close($curl);
            return response()->json(['error' => 'cURL error: ' . $error]);
        }
        curl_close($curl);
        $response_data = json_decode($response, true);
    
        if (json_last_error() === JSON_ERROR_NONE) {
            if (isset($response_data['payment_link'])) {
                DB::table('payment')->insert([
                    'transaction_id' => $response_data['order_id'],  
                    'order_id' => $order_id,
                    'OrderAmount' => $response_data['order_amount'],
                    'PaymentMode' => 'cc', // Adjust this if payment method varies
                    'Message' => '', 
                    'TransactionTime' => now(), 
                    'userName' => $request->cust_name,
                    'userEmail' => $request->email,
                    'userPhone' => $request->mobile,
                    'state_name' => $request->state,
                    'gst_data' => $request->gstnumber,
                    'TransactionStatus' => 'PENDING' 
                ]);
    
                return redirect($response_data['payment_link']);
            } else {
                return redirect()->back()->with('error', 'Payment link not found in the response.');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid JSON response from API.');
        }
        }
    // public function createPayment(Request $request){
    //   ///  dd($request);
    //  // print_r($_POST); die;
    //     // $APIURL = "https://sandbox.cashfree.com/pg/orders";
    //     $APIURL = "https://api.cashfree.com/pg/orders";
    //     $order_id = 'order_' . rand(1111111111, 9999999999);
    //     $curl = curl_init();
    //     $postData = json_encode([
    //         'order_id' => $order_id,
    //         'order_amount' => $request->amount,  
    //         'order_currency' => 'INR',
    //         'customer_details' => [
    //             'customer_id' => 'cust_' . rand(1111111111, 9999999999),
    //             'customer_name' => $request->cust_name,
    //             'customer_email' => $request->email,
    //             'customer_phone' => $request->mobile
    //         ],
    //         'order_meta' => [
    //             'return_url' => url('payment-callback') . '?order_id=' . $order_id,
    //             'notify_url' => url('payment-notify'), 
    //             'payment_methods' => 'cc,dc,upi'
    //         ]
    //     ]);
    //     curl_setopt_array($curl, [
    //         CURLOPT_URL => $APIURL,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_HTTPHEADER => [
    //             'X-Client-Secret: 224701d6a17cdeb599b49c40bf54d0fda2b5d3d4',
    //             'X-Client-Id: 733936538bd77bb9b19ec42f039337',
    //             'Content-Type: application/json',
    //             'Accept: application/json',
    //             'x-api-version: 2022-01-01'
    //         ],
    //         CURLOPT_POST => true,
    //         CURLOPT_POSTFIELDS => $postData,
    //     ]);
    
    //     $response = curl_exec($curl);
    //    // print_r($response); die;
    //     if ($error = curl_error($curl)) {
    //         curl_close($curl);
    //         return response()->json(['error' => 'cURL error: ' . $error]);
    //     }
    //     curl_close($curl);
    //     $response_data = json_decode($response, true);
    //     if (json_last_error() === JSON_ERROR_NONE) {
    //         if (isset($response_data['payment_link'])) {
    //             return redirect($response_data['payment_link']);
    //         } else {
    //             return redirect()->back()->with('error', 'Payment link not found in the response.');
    //         }
    //     } else {
    //         return redirect()->back()->with('error', 'Invalid JSON response from API.');
    //     }
    // }
    public function paymentCallback(Request $request){
        $order_id = $request->input('order_id');
            try {
                $client = new Client();
                $response = $client->request('POST', "https://api.cashfree.com/pg/orders/{$order_id}/payments", [
                    'headers' => [
                        'Accept' => 'application/json',
                        'x-api-version' => '2022-01-01',
                        'x-client-id' => '733936538bd77bb9b19ec42f039337',
                        'x-client-secret' => '224701d6a17cdeb599b49c40bf54d0fda2b5d3d4',
                    ]
                ]);
    
                $body = $response->getBody();
                $contents = json_decode($body->getContents(), true);
    
                if (!empty($contents) && is_array($contents) && isset($contents[0]['payment_status'])) {
                    $payment_status = $contents[0]['payment_status'];
                    $payment_message = ($payment_status === 'SUCCESS') ? 'Payment was successful.' : 'Payment failed.';
                    DB::table('payment')->where('order_id', $order_id)->update([
                        'TransactionStatus' => $payment_status,
                        'Message' => $payment_message, 
                    ]);
                    $payment_details = DB::table('payment')->where('order_id', $order_id)->first();
                    return view('payment/payment-status', [
                        'order_id' => $order_id,
                        'payment_status' => $payment_status,
                        'payment_message' => $payment_message,
                        'order_amount'=>$payment_details->OrderAmount,
                    ]);
                } else {
                    return view('payment/payment-status', [
                        'order_id' => $order_id,
                        'payment_status' => 'UNKNOWN',
                        'payment_message' => 'Payment status could not be determined.',
                        'order_amount'=>'',
                    ]);
                }
            } catch (\Exception $e) {
                return view('payment/payment-status', [
                    'order_id' => $order_id,
                    'payment_status' => 'ERROR',
                    'payment_message' => 'An error occurred: ' . $e->getMessage(),
                    'order_amount'=>'',
                ]);
            }
        }
    // public function paymentCallback(Request $request){
    // $order_id = $request->input('order_id');
    
    // try {
    //     $client = new Client();
    //     $response = $client->request('POST', "https://api.cashfree.com/pg/orders/{$order_id}/payments", [
    //         'headers' => [
    //             'Accept' => 'application/json',
    //             'x-api-version' => '2022-01-01',
    //             'x-client-id' => '733936538bd77bb9b19ec42f039337',
    //             'x-client-secret' => '224701d6a17cdeb599b49c40bf54d0fda2b5d3d4',
    //         ]
    //     ]);

    //     $body = $response->getBody();
        
    //     $contents = json_decode($body->getContents(), true);
       
    //     if (!empty($contents) && is_array($contents) && isset($contents[0]['payment_status'])) {
    //         $payment_status = $contents[0]['payment_status'];
    //         $payment_message = ($payment_status === 'SUCCESS') ? 'Payment was successful.' : 'Payment failed.';

    //         return view('payment/payment-status', [
    //             'order_id' => $order_id,
    //             'payment_status' => $payment_status,
    //             'payment_message' => $payment_message,
    //         ]);
    //     } else {
    //         return view('payment/payment-status', [
    //             'order_id' => $order_id,
    //             'payment_status' => 'UNKNOWN',
    //             'payment_message' => 'Payment status could not be determined.',
    //         ]);
    //     }
    // } catch (\Exception $e) {
    //     return view('payment/payment-status', [
    //         'order_id' => $order_id,
    //         'payment_status' => 'ERROR',
    //         'payment_message' => 'An error occurred: ' . $e->getMessage(),
    //     ]);
    // }
    // }
}