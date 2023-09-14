<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;

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
    public function queries(){
        $record = Visitor::all();
        return view('admin.pages.queries' , compact('record'));
    }
    public function event(){
        return view('admin.pages.events.event');
    }
    public function payments(){
        return view('admin.pages.payments');
    }
}
