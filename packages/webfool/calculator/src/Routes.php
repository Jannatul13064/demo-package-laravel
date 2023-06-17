<?php

use webfool\calculator\CalculatorController;

Route::get('calculator',function(){
    echo 'Hello from calculator';

});

Route::get('add/{a}/{b}',[CalculatorController::class,'add']);
Route::get('sub/{a}/{b}',[CalculatorController::class,'sub']);