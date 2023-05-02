<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['verify.shopify'])->group(function () {
    Route::get('/',[WelcomeController::class, 'index'])->name('home');
});
//redirect authenticate login route 
Route::get('/login', function () { 
    if(auth()->user()) {     
        return redirect()->route('home');
    }
    return view('login');
})->name('login');

