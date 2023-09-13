<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\Event;

class FrontController extends Controller
{
    public function index(){
        $record = Service::all();
        return view('pages.index',compact('record'));
    }

    public function event(){
        $event = Event::all();
        return view('pages.event' , compact('event'));
    }

    public function organizer(){
        return view('organizer.index');
    }

    public function organizerEvent(){
        return view('organizer.create-event');
    }
}
