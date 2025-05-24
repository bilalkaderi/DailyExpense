<?php

namespace App\Http\Controllers;
use App\Models\Expense;
use App\Models\User;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function addExpense(Request $request){
      $request->validate([
        'expenseAmount' => ['required'],
        'expenseCategory' => ['required'],
        'expenseDate' => ['required'],
      ]);

      $expense = Expense::create(['user_id'=> 1,
                          'expense' => $request->expenseAmount,
                          'expense_category' => $request->expenseCategory,
                          'expense_date' => $request->expenseDate,
                      ]);

      return response()->json(['message' => 'Expense added successfully']);

    }
}
