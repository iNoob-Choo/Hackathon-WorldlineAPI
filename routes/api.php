<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*TEST OAuth2*/
Route::middleware('auth:api')->get('/todos', function (Request $request) {
        return $request->user()->todos;
});

Route::post('/Accounts/Profiles', 'ProfileController@createAccountHolderProfile');

Route::get('/Accounts/Profiles/{profile_id}', 'ProfileController@getAccountHolderProfile');

Route::put('/Accounts/Profiles/{profile_id}', 'ProfileController@updateAccountHolderProfile');

Route::get('/Accounts/{account_id}', 'AccountController@getAccountSummary');

Route::get('/Accounts/Loans', 'LoanController@getLoanAccounts');

Route::get('v1/Accounts', 'AccountController@getAllAccounts');

Route::get('v2/Accounts', 'AccountController@getAllAccountsv2');

Route::post('/Accounts/Bills', 'BillController@billPayment');

Route::delete('/Accounts/Payments/{payment_id}', 'PaymentController@cancelPayment');

Route::post('/Accounts/Payee', 'PayeeController@addPayee');

Route::put('/Accounts/Payee/{payee_id}', 'PayeeController@updatePayee');

Route::delete('/Accounts/Payee/{payee_id}', 'PayeeController@deletePayee');

Route::post('/Accounts/fd', 'FDController@createFixedDeposit');

Route::put('/Accounts/fd/{fd_id}', 'FDController@preCloseFixedDeposit');

Route::get('/Accounts/Transactions', 'TransactionController@getAllTransactions');

Route::post('/Accounts/Transactions', 'TransactionController@addTransaction');

Route::get('/Accounts/Transaction/{account_id}', 'TransactionController@getTransaction');
