<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventType;

class EventTypeController extends Controller
{
    public function index()
    {
        $record = EventType::all();
        return view('admin.pages.event-type.event-type', compact('record'));

    }

    public function create(Request $request, $record = null)
    {
        if ($record == "") {
            $record = new EventType;
        } else {
            $record = EventType::find($record);
        }

   if ($request->isMethod('post')) {
    $record->name = $request['name'];

    $record->save(); // Save the record, including the image filename

    return redirect()->route('admin.event-type');
} else {
    return view('admin.pages.event-type.create-eventtype', compact('record'));
}
}

public function destroy($id)
{
$record = EventType::find($id);
// Check if the car exists
if ($record) {
    // Delete the car from the database
    $record->delete();

    // Optionally, you can add a success message to display to the user
    return redirect()->route('admin.event-type')->with('success', 'Detail deleted successfully!');
} else {
    // Optionally, you can add an error message to display to the user
    return redirect()->route('admin.event-type')->with('error', 'Detail not found!');
}

}
}
