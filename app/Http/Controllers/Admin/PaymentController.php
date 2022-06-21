<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use Auth;

class PaymentController extends Controller
{
    //Create records for payment methods
    public function payNow() {
        return view('admin/paystack/payment');
    }

    //Verify records for payment methods
    public function verify($reference) {
        $secret_key = 'sk_test_41ddda68f58ab45a82c66e074bb309db9f438b47';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            //Because I'm connecting to a secure server while still in production, I need to add the next two more parameters. But if I am going live,I need to take down the next two parameters added
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            //Don't forget to take them off when going live
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer $secret_key",
            "Cache-Control: no-cache",
            ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        $output = json_decode($response);
        
        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        //     echo $response;
        // }
    
        return $output;
    }

    public function confirmed() {
        return view('admin/paystack/confirmed');
    }
}
