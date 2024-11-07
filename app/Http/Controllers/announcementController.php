<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class announcementController extends Controller
{
    /**
     * Store a newly created announcement.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new announcement in the database
        Announcement::create([
            'title' => $validated['title'],
            'message' => $validated['message'],
        ]);

        // Redirect or return a response (you can change this as needed)
        return redirect()->back()->with('success', 'Announcement sent successfully!');
    }
}
