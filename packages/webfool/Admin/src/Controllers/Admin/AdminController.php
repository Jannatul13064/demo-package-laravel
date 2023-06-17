<?php

namespace webfool\admin\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminStruct(){

        return view('admin::admin');
    }
    public function adminServices(){

        return view('adminservice::adminservices');
    }
}
