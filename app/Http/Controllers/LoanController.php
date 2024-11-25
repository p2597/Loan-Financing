<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function show(int $id)
{
    $loan = Loan::where("id", $id)->first();

    if ($loan === null) {
        abort(404);
    }

    return view('loan.show')->with('loan', $loan);
}

public function index()
{
    $loans = Loan::all(); // Fetch all loans
    return view('welcome', ['loans' => $loans]);
}


}