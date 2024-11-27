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
       
        User::factory(10)->create();

        LoanApplication::factory(20)->create();
    }
}

