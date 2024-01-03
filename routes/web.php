<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\UserController;
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


Route::get('/', [WebsiteController::class, 'website'])->name('website');

// Single Page
Route::get('/single-page/{id}', [WebsiteController::class, 'singlePage'])->name('single.page');

// User Post
Route::get('/user/create-post', [UserController::class, 'createPost'])->name('create.post')->middleware('auth');
Route::post('/user/post-stoe', [UserController::class, 'store'])->name('post.sotre');
Route::get('/my-post', [UserController::class, 'myPost'])->name('my.post');





Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Post
    Route::controller(PostController::class)->group(function() {
        Route::get('/post-index', 'index')->name('post.index');
        Route::get('/post-create', 'create')->name('post.create');
        Route::post('/post-store', 'store')->name('post.store');
        Route::get('/post-edit/{id}', 'edit')->name('post.edit');
        Route::post('/post-update/{id}', 'update')->name('post.update');
        Route::get('/post-delete/{id}', 'delete')->name('post.delete');
    });
});

require __DIR__.'/auth.php';



