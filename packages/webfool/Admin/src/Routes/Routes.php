<?php

// use Illuminate\Routing\Route;

use Illuminate\Support\Facades\Route;

Route::get('admin',function(){
    echo "Hello from Admin";
});

Route::get('admin-auth',[webfool\admin\Controllers\admin\AdminController::class,'adminStruct']);
Route::get('admin-services',[webfool\admin\Controllers\admin\AdminController::class,'adminServices']);
