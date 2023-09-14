<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Attendee;


class AttendeeController extends Controller
{
  public function login(){
    return view('pages.Login');
  }

  public function register(){
    return view('pages.Register');
  }
  public function postregister(RegisterRequest $request){

    Attendee::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);
    // Mail::send( ['email' => $request->email], function($message) use($request){
    //     $message->to($request->email);
    // });
     return redirect()->route('attendee.login');
}
public function postlogin(LoginRequest $request){

    $credentials=$request->only(['email', 'password']);
    // dd($credentials);
    $check=Auth::guard('attendee')->attempt($credentials);
    if($check){
        return redirect()->route('index');
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
        return redirect()->route('admin.login');
    }


}

}
