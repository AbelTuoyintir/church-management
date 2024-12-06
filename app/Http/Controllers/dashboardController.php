<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Announcement;

class dashboardController extends Controller
{
    //
    public function index()
{   // Fetch data from your models (assuming you have the necessary models set up)
    $totalMembers = Member::count(); // Assuming 'Member' is the model for your members
    $totalDonations = Donation::sum('amount'); // Assuming 'Donation' model and 'amount' is the donation field
    $Members = Member::all();
    $Donations = Donation::all();
    $Events = Event::all();
    $eventsCount = Event::count(); // Assuming 'Event' is the model for your events
    $newMembers = Member::whereMonth('created_at', now()->month)->count(); // New members this month
    $announcements = Announcement::all();

   // Query the number of members added per month
   $members = Member::selectRaw("strftime('%Y', created_at) as year, strftime('%m', created_at) as month, COUNT(*) as count")
   ->groupBy('year', 'month')
   ->orderBy('year', 'asc')
   ->orderBy('month', 'asc')
   ->get();

$labels = [];
$data = [];

foreach ($members as $member) {
// Prepare the labels (months) and data (member counts)
$labels[] = $member->year . '-' . str_pad($member->month, 2, '0', STR_PAD_LEFT);
$data[] = $member->count;
}



    // Query events for the current month
    $events = Event::whereMonth('date', now()->month)
                   ->whereYear('date', now()->year)
                   ->get();

    // Format events for FullCalendar
    $calendarEvents = $events->map(function ($event) {
        return [
            'title' => $event->name,
            'start' => $event->date,  // Assuming `date` is stored as a datetime field
            'end' => $event->end_date,  // If you have an `end_date` column
        ];
    });

    // Pass the data to the view
    return view('page.index', compact('totalMembers', 'totalDonations', 'eventsCount', 'newMembers','labels', 'data', 'calendarEvents','announcements','Members','Events'));
}

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
    return redirect()->route('events.dashboard');
}

}
