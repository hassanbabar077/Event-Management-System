<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $record = Service::all();
        return view('admin.pages.service.services', compact('record'));
    }

    public function create(Request $request, $record = null)
    {
        if ($record == "") {
            $record = new Service;
        } else {
            $record = Service::find($record);
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

    return redirect()->route('admin.services');
} else {
    return view('admin.pages.service.creat-services', compact('record'));
}
}

public function destroy($id)
{
$record = Service::find($id);
// Check if the car exists
if ($record) {
    // Delete the car from the database
    $record->delete();

    // Optionally, you can add a success message to display to the user
    return redirect()->route('admin.services')->with('success', 'Detail deleted successfully!');
} else {
    // Optionally, you can add an error message to display to the user
    return redirect()->route('admin.services')->with('error', 'Detail not found!');
}

}

}
