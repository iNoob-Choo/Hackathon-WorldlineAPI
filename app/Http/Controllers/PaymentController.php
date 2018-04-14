<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Http\Resources\PaymentResource;

class PaymentController extends Controller
{
    public function cancelPayment($payment_id){
        $payment = Payment::findOrFail($payment_id);

        if($payment->delete()){
        	return new PaymentResource($payment);
        }
    }
}
