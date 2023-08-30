<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/res', function () {
    return view('mexican-restaurant');
});

Route::get('/lis', function () {
    return view('listings');
});

Route::get('/contact', function () {
    return view('contact-us');
});

Route::get('/how', function () {
    return view('how-it-works');
});

Route::get('/lis-detail', function () {
    return view('listing-detail');
});

Route::get('/register-res', function () {
    return view('register-restaurant');
});

Route::get('/res-dashboard', function () {
    return view('restaurant-dashboard');
});
