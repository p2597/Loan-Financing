<?php
// database/factories/LoanApplicationFactory.php
// database/factories/UserFactory.php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->Name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'),
    
        ];
    }
}
