<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Volunteer;

class eventController extends Controller
{
    //
    /**
     * Store a newly created event in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
        ]);

        // Create and save the event
        Event::create([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'location' => $request->input('location'),
            'status' => 'Not Published', // Default status
        ]);

        // Redirect or return a response
        return redirect()->route('event');
    }

    public function showEvent()
    {
        $events = Event::all();

        return view("page.event", compact("events")); // Pass as "events"
    }

    public function volunteer(Request $request)
    {
        // Validate the form data
        $request->validate([
            'event_name' => 'required|string|max:255',
            'volunteer_name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);

        // Save the volunteer data to the database
        Volunteer::create([
            'event_name' => $request->input('event_name'),
            'volunteer_name' => $request->input('volunteer_name'),
            'role' => $request->input('role'),
        ]);

        return redirect()->route('event');
    }

}
