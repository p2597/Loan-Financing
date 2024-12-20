<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use App\Models\LoanApplication;

class LoanApplicationsController extends Controller
{
  
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
            ->with('loan') 
            ->get();

        return view('loanApplications.index', compact('loanApplications'));
    }
    public function edit(LoanApplication $loanApplication)
    {
        return view('loanApplications.edit', compact('loanApplication'));
    }
    
    public function destroy(LoanApplication $loanApplication)
    {
        // Delete the loan application
        $loanApplication->delete();
    
        return redirect()->route('loanApplications.index')->with('success', 'Loan application deleted successfully!');
    }
    public function update(Request $request, LoanApplication $loanApplication)
    {
        $validated = $request->validate([
            'salary' => 'required|numeric|min:0',
            'terms' => 'required|string',
        ]);
    
        $loanApplication->update($validated);
    
        return redirect()->route('loanApplications.index')->with('success', 'Loan application updated successfully!');
    }
    
    
}