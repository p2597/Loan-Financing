<?php

// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use App\Models\Loan;
use App\Models\LoanApplication;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed Users
        User::factory(10)->create();

        // Seed Loan Applications
        LoanApplication::factory(20)->create();
    }
}

