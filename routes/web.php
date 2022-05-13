<?php

use App\Http\Controllers\AdminPanel\AdminGameController;
use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\CategoryController;

/*--------------------------------------------------------------------------
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
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('', [AdminHomeController::class, 'index'])->name('index');
// *************************** ADMIN PANEL ROUTES ************************* \\
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::put('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::put('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    // *************************** ADMIN GAME ROUTES ************************* \\
    Route::prefix('game')->name('game.')->controller(AdminGameController::class)->group(function () {
        Route::get('','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::put('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::put('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
});


});

require __DIR__.'/auth.php';

