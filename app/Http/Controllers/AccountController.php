<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Http\Resources\AccountResource;

class AccountController extends Controller
{

    // Obtain one Account
    public function getAccountSummary($account_id){
        $account = Account::findOrFail($account_id);

        return new AccountResource($account);
    }

    // Obtain all accounts
    public function getAllAccounts(){
        $accounts = Account::paginate(30);

        return AccountResource::collection($accounts);
    }
}
