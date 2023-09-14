<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventType;

class OrganizerEventController extends Controller
{


    public function create(Request $request, $record = null)
    {
        if ($record == "") {
            $record = new Event;
        } else {
            $record = Event::find($record);
        }

   if ($request->isMethod('post')) {
    $record->title = $request['title'];
    $record->eventType_id = $request['eventType_id'];
    $record->status = $request['status'];
    $record->discription = $request['discription'];
    $record->price = $request['price'];
    $record->totaltickets = $request['totaltickets'];
    $record->startDate = $request['startDate'];
    $record->endDate = $request['endDate'];
    $record->time = $request['time'];
    $record->main_image = $request['main_image'];
    // Handle the main image upload
    if ($request->hasFile('main_image')) {
        $mainimageName = time() . '_' . uniqid() . '.' . $request->file('main_image')->getClientOriginalExtension();
        $mainimagePath = public_path('uploads/main-images/cars');
        $request->file('main_image')->move($mainimagePath, $mainimageName);
        $record->main_image = $mainimageName;
    }
    $record->save(); // Save the record, including the image filename

    return redirect()->route('organizer.index');
} else {
    $type = EventType::all();
    return view('organizer.create-event', compact('record', 'type' ));
}
}

public function destroy($id)
{
$record = Event::find($id);
// Check if the car exists
if ($record) {
    // Delete the car from the database
    $record->delete();

    // Optionally, you can add a success message to display to the user
    return redirect()->route('organizer.index')->with('success', 'Detail deleted successfully!');
} else {
    // Optionally, you can add an error message to display to the user
    return redirect()->route('organizer.index')->with('error', 'Detail not found!');
}

}
}
