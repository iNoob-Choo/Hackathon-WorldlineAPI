<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Http\Resources\BillResource;

class BillController extends Controller
{
    // Create a new bill payment
    public function billPayment(Request $billData){
    	$bill = new Bill();
        
        $bill->fill($billData->all());

        if($bill->save()){
        	return new BillResource($bill);
        }
    }
}
