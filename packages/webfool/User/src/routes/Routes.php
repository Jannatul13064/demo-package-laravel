<?php

use Illuminate\Support\Facades\Route;
use webfool\user\Controllers\user\UserController;

Route::get('user',function(){
    echo 'Hello from user';
});



Route::get('user-dashboard',[webfool\user\Controllers\user\UserController::class,'userStruct']);
// Route::get('user-services',[webfool\user\Controllers\user\UserController::class,'userService']);
Route::get('user-services', [UserController::class, 'userService'] )->name("userService");
Route::post('user-post',[webfool\user\Controllers\user\UserController::class,'userPost'])->name('user.post');