<?php

namespace Database\Factories;


use App\Models\Loan;
use App\Models\LoanApplication;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanApplicationFactory extends Factory
{
    protected $model = LoanApplication::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), 
            'loan_id' => Loan::inRandomOrder()->first()->id,  
            'salary' => $this->faker->numberBetween(15000, 80000), 
            'terms' => $this->faker->randomElement([12, 24, 36]),
        ];
    }
}

