<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Visitor;

class FrontController extends Controller
{
    public function index(){
        $record = Service::all();
        return view('pages.index',compact('record'));
    }
}
