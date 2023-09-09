<?php

namespace App\Http\Controllers;
use App\Models\Visitor;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function query(Request $request)
    {
        // $data = $request->all();
        Visitor::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
          'message' => $request->message
        ]);
        return redirect()->back()->with('message', 'Your message has been send');
    }
}
