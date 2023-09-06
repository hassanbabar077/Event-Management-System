<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $record = event::all();
        return view('pages.index',compact('record'));
    }
    // public function event(){
    //     $record = event::all();
    //     return view('pages.event', compact('record'));
    // }
}
