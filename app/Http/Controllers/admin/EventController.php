<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;


class EventController extends Controller
{
    public function index()
    {
        $record = event::all();
        return view('admin.pages.events.index', compact('record'));
    }

    public function create(Request $request, $record = null)
    {
        if ($record == "") {
            $record = new event;
        } else {
            $record = event::find($record);
        }

   if ($request->isMethod('post')) {
    $record->title = $request['title'];
    $record->content = $request['content'];
    $record->main_image = $request['main_image'];
    // Handle the main image upload
    if ($request->hasFile('main_image')) {
        $mainimageName = time() . '_' . uniqid() . '.' . $request->file('main_image')->getClientOriginalExtension();
        $mainimagePath = public_path('uploads/main-images/cars');
        $request->file('main_image')->move($mainimagePath, $mainimageName);
        $record->main_image = $mainimageName;
    }
    $record->save(); // Save the record, including the image filename

    return redirect()->route('admin.event');
} else {
    return view('admin.pages.events.create-event', compact('record'));
}
}

public function destroy($id)
{
$record = event::find($id);
// Check if the car exists
if ($record) {
    // Delete the car from the database
    $record->delete();

    // Optionally, you can add a success message to display to the user
    return redirect()->route('admin.event')->with('success', 'Detail deleted successfully!');
} else {
    // Optionally, you can add an error message to display to the user
    return redirect()->route('admin.event')->with('error', 'Detail not found!');
}

}

}

