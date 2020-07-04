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
        if ($user = user::where('phone',$request->phone)->exists()) {
            session()->put('user',$user);
            return "ok";
        }else{
            return "not ok";
        }
    }

    public function register(Request $request)
    {
        $user = user::create(['name'=>$request->name,'phone'=>$request->phone,'institute'=>$request->institute]);
        session()->put('user',$user);
        return "ok";
        // return $Request->name." ".$Request->phone."  ".$Request->institute;
    }

    public function profile()
    {
        $user = user::where('id',1)->first();
        return view('profile',['user'=>$user]);
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->back();
    }
}
