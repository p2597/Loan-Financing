<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('loans', function (Blueprint $table) {
        $table->id();
        $table->string('loan_name')->unique();
        $table->text('description');
        $table->decimal('interest_rate', 5, 2);
        $table->decimal('interest', 15, 2);
        $table->integer('terms');
        $table->timestamps();
    });

    // Insert default data
    DB::table('loans')->insert([
        [
            'loan_name' => 'Personal Loan',
            'description' => 'A flexible loan to cover personal expenses.',
            'interest_rate' => 5.50,
            'interest' => 10000.00,
            'terms' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'loan_name' => 'Car Loan',
            'description' => 'Finance your dream car with low-interest rates.',
            'interest_rate' => 4.20,
            'interest' => 40000.00,
            'terms' => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'loan_name' => 'Home Loan',
            'description' => 'Affordable mortgage for your dream home.',
            'interest_rate' => 3.80,
            'interest' => 50000.00,
            'terms' => 120,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}


};

