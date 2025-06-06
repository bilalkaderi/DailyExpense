<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable=['user_id', 'expense', 'expense_category', 'expense_date'];
    use HasFactory;
}
