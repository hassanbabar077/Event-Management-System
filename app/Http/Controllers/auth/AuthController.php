<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{


    public function postlogin(LoginRequest $request){

        $credentials=$request->only(['email', 'password']);
        // dd($credentials);
        $check=Auth::attempt($credentials);
        if($check){
            return redirect()->route('admin.index');
        }
        return redirect()->back();
    }
    public function logout(){


                Auth::guard('web')->logout();
                return redirect()->route('index');



}}
