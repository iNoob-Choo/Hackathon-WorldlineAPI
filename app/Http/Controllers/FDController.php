<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FixedDeposit;
use App\Http\Resources\FDResource;

class FDController extends Controller
{
	//Create a Fixed Deposit
    public function createFixedDeposit(Request $FDData){
    	$fd = new FixedDeposit();

    	$fd->fill($FDData->all());

    	if($fd->save())
    		return new FDResource($fd);
    }

    //Update Fixed Deposit
    public function preCloseFixedDeposit($fd_id, Request $FDData){
    	$fd = FixedDeposit::findOrFail($fd_id);

    	$fd->fill($FDData->all());

    	if($fd->save())
    		return new FDResource($fd);
    }

}
