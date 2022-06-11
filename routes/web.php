<?php

use App\Http\Controllers\AdminPanel\AdminGameController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\MessageController;
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
// *************************** HOME PAGE ROUTES ************************* \\
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser', 'home.login');
Route::view('/registeruser', 'home.register');
Route::get('/logoutuser',[HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login');
Route::post('/loginadmincheck',[HomeController::class, 'loginadmincheck'])->name('loginadmincheck');

Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

Route::post('save', [HomeController::class, 'save'])->name('save');

Route::get('/game/{id}', [HomeController::class, 'game'])->name('game');

Route::get('/categorygames/{id}/{slug}', [HomeController::class, 'categorygames'])->name('categorygames');






// *************************** ADMIN PANEL ROUTES ************************* \\
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
// *************************** General Routes ROUTES ************************* \\
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');
// *************************** ADMIN CATEGORY ROUTES ************************* \\
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
    // *************************** ADMIN GAME IMAGE GALLERY ROUTES ************************* \\
    Route::prefix('image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{gid}','index')->name('index');
        Route::post('/store/{gid}', 'store')->name('store');
        Route::get('/destroy/{gid}/{id}','destroy')->name('destroy');
    });

    // *************************** ADMIN MESSAGE ROUTES ************************* \\
    Route::prefix('message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    // *************************** ADMIN COMMENT ROUTES ************************* \\
    Route::prefix('comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

});

require __DIR__.'/auth.php';

