<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use App\Models\LoanApplication;

class LoanApplicationsController extends Controller
{
    // Show the application form for a specific loan
    public function create(Loan $loan)
    {
        return view('loanApplications.create', compact('loan'));
    }

    // Store the loan application
 // Inside the store method of your LoanApplicationController
public function store(Request $request, Loan $loan)
{
    // Validate input
    $validated = $request->validate([
        'salary' => 'required|numeric|min:0',
        'terms' => 'required|string',
    ]);

    // Create a new loan application
    LoanApplication::create([
        'loan_id' => $loan->id, // Reference to the loan
        'salary' => $validated['salary'],
        'terms' => $validated['terms'],
        'user_id' => auth()->id(), 
    ]);
    return redirect()->route('loanApplications.index')->with('success', 'Application submitted successfully!');
    }

    /**
     * Display a listing of loan applications for the authenticated user.
     */
    public function index()
    {
        $loanApplications = LoanApplication::where('user_id', auth()->id())
            ->with('loan') // Eager load the related loan
            ->get();

        return view('loanApplications.index', compact('loanApplications'));
    }
}