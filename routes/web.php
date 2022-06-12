<?php

use App\Http\Controllers\AdminPanel\AdminGameController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser', 'home.login')->name('loginuser');;
Route::view('/registeruser', 'home.register')->name('registeruser');;
Route::get('/logoutuser',[HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');;
Route::post('/loginadmincheck',[HomeController::class, 'loginadmincheck'])->name('loginadmincheck');

Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

Route::post('save', [HomeController::class, 'save'])->name('save');

Route::get('/game/{id}', [HomeController::class, 'game'])->name('game');

Route::get('/categorygames/{id}/{slug}', [HomeController::class, 'categorygames'])->name('categorygames');


// *************************** USER AUTH CONTROL ************************* \\
Route::middleware('auth')->group(function() {

// *************************** USER PANEL ROUTES ************************* \\
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}','reviewdestroy')->name('reviewdestroy');
        Route::get('/games', 'games')->name('games');
        Route::get('/gamedestroy/{id}','gamedestroy')->name('gamedestroy');
        Route::get('/gameedit/{id}','gameedit')->name('gameedit');
        Route::put('/gameupdate/{id}','gameupdate')->name('gameupdate');
        Route::get('/gamecreate', 'gamecreate')->name('gamecreate');
        Route::put('/gamestore', 'gamestore')->name('gamestore');


        //**************************** USER PANEL GAME ************************\\

    });
// *************************** ADMIN PANEL ROUTES ************************* \\
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
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


        // *************************** ADMIN FAQ ROUTES ************************* \\
        Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function () {
            Route::get('','index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::put('/store', 'store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::put('/update/{id}','update')->name('update');
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
        // *************************** ADMIN USER ROUTES ************************* \\
        Route::prefix('user')->name('user.')->controller(AdminUserController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/addrole/{id}','addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');
        });

    });
});
require __DIR__.'/auth.php';

