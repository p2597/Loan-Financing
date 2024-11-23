<?php

namespace App\Http\Controllers;

use App\Models\Loan; // Import the Loan model
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        // Fetch all loans from the database
        $loans = Loan::all();

        // Return the 'welcome' view and pass the loans data
        return view('welcome', compact('loans'));
    }
}
