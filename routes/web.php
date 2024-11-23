<?php

use App\Http\Controllers\LoanApplicationsController;
use App\Http\Controllers\ProfileController;
use App\Models\LoanApplication;
use Illuminate\Support\Facades\Route;
use App\Models\Loan;

Route::get('/', \App\Http\Controllers\WelcomeController::class);

Route::get('/', [\App\Http\Controllers\LoanController::class, 'index'])->name('loan.welcome');
Route::get('loan/{id}', [\App\Http\Controllers\LoanController::class, 'show'])->name('loan.show');

Route::get('/loan/{loan}/apply', [LoanApplicationsController::class, 'create'])->name('loanApplications.create');
Route::post('/loan/{loan}/apply', [LoanApplicationsController::class, 'store'])->name('loanApplications.store');

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