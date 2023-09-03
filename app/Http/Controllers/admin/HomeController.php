<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.pages.index');
    }

    public function login(){
        return view('admin.pages.login');
    }

    public function service(){
        return view('admin.pages.sevices');
    }
}
