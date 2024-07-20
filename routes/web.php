<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/home',[AdminController::class,'index']);
    Route::resource('/category', CategoryController::class);
    Route::resource('/post',PostController::class);
});
