<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Http\Resources\Api\v1\AccountResource;
use App\Http\Resources\Api\v2\AccountResource as AccountResourceTwo;

class AccountController extends Controller
{

    // Obtain one Account
    public function getAccountSummary(int $account_id){
        $account = Account::findOrFail($account_id);

        return new AccountResource($account);
    }

    // Obtain all accounts
    public function getAllAccounts(){
        $accounts = Account::paginate(30);

        return AccountResource::collection($accounts);
    }

    // Obtain all accounts
    public function getAllAccountsv2(){
        $accounts = Account::paginate(30);

        return AccountResourceTwo::collection($accounts);
    }
}
