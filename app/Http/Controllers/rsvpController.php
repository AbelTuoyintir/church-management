<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;

class rsvpController extends Controller
{
    //
    /**
     * Store a newly created RSVP entry in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'invitation_type' => 'required|string|max:255',
            'content' => 'nullable|string',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'attendee_name' => 'required|string|max:255',
        ]);

        Rsvp::create($request->all());

        return redirect()->route('event');
    }
}
