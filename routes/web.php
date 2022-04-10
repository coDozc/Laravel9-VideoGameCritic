<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Htpp\Controllers\AdminPanel\HomeController as AdminHomeController;
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




Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/message', function () {
    return 'Hello World';
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

Route::post('save', [HomeController::class, 'save'])->name('save');


// *************************** ADMIN PANEL ROUTES ************************* \\
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');

require __DIR__.'/auth.php';

