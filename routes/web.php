<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExpenseController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Models\Expense;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/home', function () {
        $user = User::find(Auth::user()->id);
        if($user){
          return view('base', ['user'=>$user]);
        }
        else{
          return redirect('login');
        }

    });
  });



Route::get('/add_expense', function () {
  return Inertia::render('add_expense');
})->middleware(['auth', 'verified'])->name('add_expense');

Route::post('/submit-form', [ExpenseController::class, 'addExpense']);


require __DIR__.'/auth.php';
