<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    protected $fillable = ['loan_id', 'salary', 'terms', 'user_id'];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class); // Associating with the User model
    }
}