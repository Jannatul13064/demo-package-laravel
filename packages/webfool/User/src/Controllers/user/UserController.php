<?php

namespace webfool\user\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use webfool\user\Models\UserInfoModel;


class UserController extends Controller
{
    public function userStruct(){

        return view('user::user');
    }
    public function userService(){

        $userInfo = UserInfoModel::all();

        return view('user::userservices',['userInfo'=>$userInfo]);
    }

    public function userPost(Request $request)
    {
        /**
        UserInfoModel::create($request->all(
            [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at,
        ]
        ));
         */
        UserInfoModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ]);

        // Redirect or return a response
        return redirect()->back()->with('message', 'Data submitted successfully!');
    }
}