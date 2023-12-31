<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Organizer;

class OrganizerController extends Controller
{
    public function login(){
        return view('pages.organizer-login');
      }

    public function postlogin(LoginRequest $request){

        $credentials=$request->only(['email', 'password']);
        // dd($credentials);
        $check=Auth::guard('organizer')->attempt($credentials);
        if($check){
            return redirect()->route('organizer.index');
        }
        return redirect()->back();
    }
    public function logout(){
        if(Auth::guard('attendee')->check()){
            Auth::guard('attendee')->logout();
            return redirect()->route('index');
        }
        elseif(Auth::guard('web')->check()){
            Auth::guard('web')->logout();
            return redirect()->route('index');
        }
        elseif(Auth::guard('organizer')->check()){
            Auth::guard('organizer')->logout();
            return redirect()->route('index');
        }
    }
}
