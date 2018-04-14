<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payee;
use App\Http\Resources\PayeeResource;

class PayeeController extends Controller
{	
	// Add one payee
    public function addPayee(Request $PayeeData){
		$payee = new Payee();

		$payee->fill($PayeeData->all());

		if($payee->save())
			return new PayeeResource($payee);

    }

    public function updatePayee($payee_id, Request $PayeeData){
    	$payee = Payee::findOrFail($payee_id);

    	$payee->fill($PayeeData->all());

    	if($payee->save())
    		return new PayeeResource($payee);
    }

    public function deletePayee($payee_id){
        $payee = Payee::findOrFail($payee_id);
        if($payee->delete()){
        	return new PayeeResource($payee);
        }
    }
}
