<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ConfigController;


Auth::routes();

/* Needs Login */
Route::group(['middleware'=>['auth']],function(){

    /* Login-Redirect */
    Route::get('/home', [HomeController::class, 'home'])->name('home');

    /* Post */
    Route::controller(PostController::class)
    ->prefix('post')
    ->name('post.')
    ->group(function () {
        Route::get('/show/{post}', [PostController::class, 'show'])->name('show');
        Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/store', [PostController::class, 'store'])->name('store');
        Route::post('/update/{post}', [PostController::class, 'update'])->name('update');
        Route::post('/delete/{post}', [PostController::class, 'delete'])->name('delete');
    });

    /* Config */
    Route::controller(ConfigController::class)
    ->prefix('config')
    ->name('config.')
    ->group(function () {
        Route::post('/floor/store', [ConfigController::class, 'floorStore'])->name('floor.store');
        Route::post('/floor/delete', [ConfigController::class, 'floorDelete'])->name('floor.delete');
        Route::post('/floor/update', [ConfigController::class, 'floorUpdate'])->name('floor.update');
        Route::get('/floor/create', [ConfigController::class, 'floorCreate'])->name('floor.create');
        Route::get('/floor', [ConfigController::class, 'floorIndex'])->name('floor.index');
    });


    /* TOP Page */
    Route::get('/', [PostController::class, 'index'])->name('post.index');

    /* error msg */
    Route::get('/error/{code}',function($code){
        abort($code, 'error message Not Found');
    });
});


