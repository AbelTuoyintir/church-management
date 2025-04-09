<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Member;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Announcement;

use Illuminate\Support\Facades\Auth;


class authController extends Controller
{
    //
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Handle registration form submission
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'string|max:10|unique:users|nullable',
            'address' => 'string|max:255|nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);

        return redirect()->route('login');
    }

    public function login(Request $request)
    {

        // Validate login credentials
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Fetch additional data required for the page.index view
            $totalMembers = Member::count();
            $totalDonations = Donation::sum('amount');
            $eventsCount = Event::count();
            $newMembers = Member::whereMonth('created_at', now()->month)->count();
            $announcements = Announcement::all();
            $Members = Member::all(); // Fetch all members
            $Donations = Donation::all(); // Fetch all donations
            $Events = Event::all(); // Fetch all events

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
                    'title' => $event->name, // Assuming `name` is the event title
                    'start' => $event->date, // Assuming `date` is the start date
                    'end' => $event->end_date, // If you have an `end_date` column
                ];
            });


            // Return the view with all necessary data
            return view('page.index', compact(
                'user',
                'totalMembers',
                'totalDonations',
                'eventsCount',
                'newMembers',
                'Members',
                'announcements',
                'Donations',
                'Events',
                'labels',
                'data',
                'calendarEvents',
            ));
        }


        // Authentication failed, redirect back with error
        return redirect()->back()->withErrors(['loginError' => 'Invalid email or password'])->withInput();
    }

    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the session token to prevent CSRF attacks
        $request->session()->regenerateToken();

        // Redirect to the login page or home
        return redirect('/');
    }

}
