<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TarifController,
    AuthController
};

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
// Login
Route::get('/', function () {
    return view('auth/login');
})->name('login');

Route::get('/login', function () {
    return view('auth/login');
})->name('login2');

Route::post('/login',[AuthController::class,'login'])->name('loginProses');

// Register
// Route::get('/register', function () {
//     return view('auth/register');
// })->name('regis');
Route::get('/register', function () {
    return view('auth/register');
})->name('register');

Route::get('/dashboard', function () {
    return view('isidashboard');
})->name('dashboard');

// Tarif Routes
Route::get('/tarif',[TarifController::class,'index'])->name('tarif');

// Add Tarif Proceses
Route::get('/addtarif',function () {
    return view('addtarif');
})->name('addtarif');
Route::post('/savetarif',[TarifController::class,'store'])->name('savetarif');

// Edit Tarif Proseses

Route::get('/edittarif/{id}',[TarifController::class,'edit'])->name('edittarif');
Route::post('/updatetarif/{id}',[TarifController::class,'update'])->name('updatetarif');

//Delete Tarif

Route::get('/deletetarif/{id}',[TarifController::class,'destroy'])->name('deletetarif');