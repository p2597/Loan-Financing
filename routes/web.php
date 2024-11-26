<?php

use App\Http\Controllers\LoanApplicationsController;
use App\Http\Controllers\ProfileController;
use App\Models\LoanApplication;
use Illuminate\Support\Facades\Route;
use App\Models\Loan;



Route::get('/', [\App\Http\Controllers\LoanController::class, 'index'])->name('loan.welcome');
Route::get('loan/{id}', [\App\Http\Controllers\LoanController::class, 'show'])->name('loan.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/loan/{loan}/apply', [LoanApplicationsController::class, 'create'])->name('loanApplications.create');
    Route::post('/loan/{loan}/apply', [LoanApplicationsController::class, 'store'])->name('loanApplications.store');
});

Route::delete('/loanApplications/{loanApplication}', [LoanApplicationsController::class, 'destroy'])->name('loanApplications.destroy');


// Edit a loan application
Route::get('/loanApplications/{loanApplication}/edit', [LoanApplicationsController::class, 'edit'])->name('loanApplications.edit');
Route::patch('/loanApplications/{loanApplication}', [LoanApplicationsController::class, 'update'])->name('loanApplications.update');



//for listing the loan applications
Route::get('/loanApplications', [LoanApplicationsController::class, 'index'])->name('loanApplications.index');

Route::get('/dashboard', function () {
    // Fetch all loans from the database
    $loans = Loan::all();

    // Pass the loans data to the view
    return view('dashboard', compact('loans'));
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';