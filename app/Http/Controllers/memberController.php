<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class memberController extends Controller
{
    public function index()
{
    $members = Member::all();
    // Or any other query that returns a collection
    return view('page.Membership', compact('members'));

}



    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:members',
            'phone' => 'required|string',
            'password'=>'required|string|min:8|confirmed',
            'status' => 'required|in:active,inactive',
        ]);

        Member::create($request->all());
        return redirect()->route('Membership.index');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->route('Membership.index');
    }

    public function edit($id)
{
    $member = Member::find($id); // Find member by id
    return view('page.editMember', compact('member')); // Pass member to the view
}

    public function update(Request $request, $id)
    {

        // Validate the input data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'password'=>'nullable',
            'status' => 'required|in:active,inactive',
            // Add any other validation rules needed
        ]);

        // Find the member and update its properties
        $member = Member::find($id);
        $member->first_name = $request->input('first_name');
        $member->last_name = $request->input('last_name');
        $member->email = $request->input('email');
        $member->phone = $request->input('phone');
        $member->status = $request->input('status');
        $member->save(); // Save the changes

        // Redirect back with a success message
        return redirect()->route('Membership.index');
    }

    public function search(Request $request)
    {
        // Retrieve the search query from the request
        $search = $request->input('search');
    
        // Query members based on the search term
        $members = Member::when($search, function ($query, $search) {
            return $query->where('first_name', 'like', "%$search%")
                         ->orWhere('last_name', 'like', "%$search%")
                         ->orWhere('email', 'like', "%$search%"); // Add more fields if needed
        })->get();
    
        // Return the view with the filtered members
        return view('page.Membership', compact('members', 'search'));
    }
    

}
