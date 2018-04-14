<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\Http\Resources\LoanResource;

class LoanController extends Controller
{
	// Get All Loan
    public function getLoanAccounts(){
		$loans = Loan::paginate(30);

		echo "sheit";

        return LoanResource::collection($loans);
    }
}

?>