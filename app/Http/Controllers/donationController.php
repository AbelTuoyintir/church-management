<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use App\Models\Donation;

class donationController extends Controller
{
    //
    public function donation(Request $request){
        $validatedData = $request->validate([
            "name"=> "required|max: 255|string",
            "email"=> "required|max: 255|string|email",
            "amount"=> "required|numeric|min:1",
            "date"=>"required|date"
        ]);

        Donation::create([
            "name"=> $validatedData["name"],
            "email"=> $validatedData["email"],
            "amount"=> $validatedData["amount"],
            "date"=> $validatedData["date"]
        ]);

        return redirect()->route('donation.showDonation');
    }

    public function showDonation()
    {
        // Fetch all donations
        $donations = Donation::all();

        // Pass the donations data to the view
        return view('page.donation', compact('donations'));
    }

    public function destroy($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();

        return redirect()->back();
    }

    public function edit($id) {
        $donation = Donation::findOrFail($id);
        return view('page.editDonation', compact('donation'));
    }

    public function update(Request $request, $id)
    {

        // Validate the input data
        $validatedData = $request->validate([
            "name"=> "required|max: 255|string",
            "email"=> "required|max: 255|string|email",
            "amount"=> "required|numeric|min:1",
            "date"=>"required|date"
        ]);
        // Find the member and update its properties
        $donation =  donation::find($id);
        $donation ->name = $request->input('name');
         $donation->email = $request->input('email');
         $donation->amount = $request->input('amount');
         $donation->date = $request->input('date');
         $donation->save(); // Save the changes

        // Redirect back with a success message
        return redirect()->route('donation.showDonation');
    }

}
