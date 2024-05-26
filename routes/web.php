<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use  App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ClassController;


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



Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
// Route::get('/login', [AuthController::class, 'getLogin']);

Route::post('/login', [AuthController::class, 'postLogin']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'apps'], function () {
        // Định nghĩa các route cho nhóm "apps" ở đây
        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
        Route::group(['prefix' => 'hoc-sinh'], function () {
            Route::get('/thong-tin-hoc-sinh', [HomeController::class, 'thongtin'])->name('thongtin');
        });
        Route::group(['prefix' => 'giao-vien'], function () {
            // Route::get('/thong-tin-giao-vien', [HomeController::class, 'home'])->name('home');
    
        });
        Route::get('/user', [UserController::class, 'user'])->name('user');
        Route::get('/user/search', [UserController::class, 'searchuser'])->name('users.search');

        Route::get('/class', [ClassController::class, 'index'])->name('class');
        Route::get('/class/search', [ClassController::class, 'searchclass'])->name('class.search');

        Route::group(['prefix' => 'user'], function () {
            Route::get('/add-user', [UserController::class, 'adduser'])->name('adduser');
            Route::post('add-user', [UserController::class, 'postadduser'])->name('postadduser');

            Route::get('/show-user/id={id}', [UserController::class, 'showuser'])->name('showuser');

            Route::get('/edit-user/id={id}', [UserController::class, 'edituser'])->name('edituser');
            Route::post('edit-user/id={id}', [UserController::class, 'postedituser'])->name('postedituser');

            // Route::delete('/del-user/{id}', [UserController::class, 'deluser'])->name('deluser');
            Route::get('/del-user/id={id}', [UserController::class, 'deluser'])->name('deluser');
            Route::delete('del-user/id={id}', [UserController::class, 'postdeluser'])->name('postdeluser');
        });
    
        Route::group(['prefix' => 'class'], function () {
            Route::get('/add-class', [ClassController::class, 'addclass'])->name('addclass');
            Route::post('/add-class', [ClassController::class, 'postaddclass'])->name('postaddclass');

            Route::get('/del-class/id={id}', [ClassController::class, 'delclass'])->name('delclass');
            Route::post('/del-class/id={id}', [ClassController::class, 'postdelclass'])->name('postdelclass');
        });
    
        // Các route khác trong nhóm "apps"...
    });
});
