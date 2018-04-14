<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Http\Resources\TransactionResource;

class TransactionController extends Controller
{
    public function getAllTransactions(){
    	$transactions = Transaction::paginate(30);

    	return TransactionResource::collection($transactions);
    }

    public function addTransaction(Request $TransactionData){
    	$transaction = new Transaction();

    	$transaction->fill($TransactionData->all());

    	if($transaction->save())
    		return new TransactionResource($transaction);

    }

    public function getTransaction($account_id){
        $transaction = Transaction::findOrFail($account_id);

        $transaction->fill($TransactionData->all());

        if($transaction->save())
        	return new TransactionResource($transaction);
    }
}
