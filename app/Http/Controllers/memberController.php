<?php

namespace App\Http\Controllers;
use App\Models\Member;

use Illuminate\Http\Request;

class memberController extends Controller
{
    //
    public function member(Request $request){
        $validatedData = $request->validate([
            "name"=> "required|max:255",
            "email"=> "required|email|max:255",
            "phone"=> "required|max:10",
        ]);

        member::create([
            "name"=> $validatedData["name"],
            "email"=> $validatedData["email"],
            "phone"=> $validatedData["phone"],
        ]);

        return redirect("member");
    }

    public function showMembers(){
        $members=member::all();


        return view('page.member', compact('members'));
    }

    public function show(){
        $members=member::all();


        return view('page.welcome', compact('members'));
    }

    public function destroy($id)
    {
        $members = member::findOrFail($id);
        $members ->delete();

        return redirect()->back();
    }
}

