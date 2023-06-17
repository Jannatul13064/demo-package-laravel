<?php

namespace webfool\calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CalculatorController extends Controller
{
    public function add ($a,$b){
        $result =  $a+$b;

        return view('calculator::add',compact('result'));

    }
    public function sub ($a,$b){
        $result = $a-$b;
        return view('calculator::add',compact('result'));

    }
}