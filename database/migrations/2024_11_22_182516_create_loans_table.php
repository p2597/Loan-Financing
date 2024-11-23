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
        $table->text('long_description')->nullable()->after('description');
        $table->decimal('interest_rate', 5, 2);
        $table->decimal('amount', 15, 2);
        $table->integer('terms');
        $table->timestamps();
    });

    // Insert default data
    DB::table('loans')->insert([
        [
            'loan_name' => 'Personal Loan',
            'description' => 'A flexible loan to cover personal expenses.',
            'long_description' => 'Personal Loans are designed for individuals looking to borrow a fixed amount of money for a variety of personal purposes such as medical expenses, home repairs, or consolidating debts. These loans come with competitive interest rates, flexible repayment options, and no collateral required. With a fixed term, you can easily budget your payments and enjoy peace of mind knowing your payments will not change over time. Whether its for a special occasion or unexpected life events, a Personal Loan offers financial relief when you need it the most.
',
            'interest_rate' => 5.50,
            'amount' => 10000.00,
            'terms' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'loan_name' => 'Car Loan',
            'description' => 'Finance your dream car with low-interest rates.',
            'long_description' => 'Car Loans make it easier than ever to drive away in the car of your dreams. Whether youre looking to buy a new or used vehicle, a Car Loan provides the financial flexibility to purchase a vehicle without draining your savings. With lower interest rates than personal loans, these loans are specifically tailored for automotive purchases. Choose from a variety of repayment terms that best suit your budget. Whether its a sleek sports car or a family-friendly SUV, our Car Loan options ensure you get behind the wheel with affordable monthly payments.
',
            'interest_rate' => 4.20,
            'amount' => 40000.00,
            'terms' => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'loan_name' => 'Home Loan',
            'description' => 'Affordable mortgage for your dream home.',
            'long_description' => 'Home Loans (also known as mortgages) offer you the chance to purchase or refinance a property at competitive interest rates. With a range of term lengths and flexible repayment plans, a Home Loan helps turn your dream of owning a home into reality. Whether you’re purchasing your first home or upgrading to a larger space, our Home Loan options ensure you can enjoy affordable payments over the long term. We offer fixed-rate and adjustable-rate mortgages to give you the flexibility to choose the plan that works best for you. Plus, our knowledgeable team will guide you through the application process, helping you secure the best loan terms for your needs.
',
            'interest_rate' => 3.80,
            'amount' => 50000.00,
            'terms' => 120,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}


};

