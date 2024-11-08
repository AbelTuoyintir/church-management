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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendAnnouncement(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new announcement in the database
        Announcement::create([
            'title' => $validatedData['title'],
            'message' => $validatedData['message'],
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Announcement sent successfully!');
    }
}
