<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (user::where('phone',$request->phone)->exists()) {
            return "ok";
        }else{
            return "not ok";
        }
    }

    public function register(Request $request)
    {
        user::create(['name'=>$request->name,'phone'=>$request->phone,'institute'=>$request->institute]);
        return "ok";
        // return $Request->name." ".$Request->phone."  ".$Request->institute;
    }

    public function profile()
    {
        $user = user::where('id',1)->first();
        return view('profile',['user'=>$user]);
    }
}
