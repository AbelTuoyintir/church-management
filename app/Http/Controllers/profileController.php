<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Member;

use Illuminate\Http\Request;

class profileController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $members = Member::all(); // Example: fetch members from database
        dd($members);
        return view('page.profile', compact('user', 'members'));
    }


    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $validatedData = $request->validate([
        'first_name' => 'string|max:255',
        'last_name' => 'string|max:255',
        'email' => 'email|unique:users,email,' . $id,
        'password' => 'string|min:6',
        'phone' => 'string|max:15',
        'address' => 'string|max:255',
    ]);

    // Update user details
    $user->update($validatedData);

    return redirect()->back()->with('success', 'User information updated successfully!');
}

}
