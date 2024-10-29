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
            "amount"=> "required|numeric|min:1",
            "date"=>"required|date"
        ]);

        Donation::create([
            "name"=> $validatedData["name"],
            "amount"=> $validatedData["amount"],
            "date"=> $validatedData["date"]
        ]);

        return redirect("donation");
    }

    public function showDonation(){
        $donations = Donation::all();

        return view("page.donation", compact("donations"));
    }

    public function destroy($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();

        return redirect()->back();
    }

    public function edit($id) {
        $donation = Donation::findOrFail($id);
        return view('donations.edit', compact('donation'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $donation = Donation::findOrFail($id);
        $donation->update([
            'name' => $request->name,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);

        return redirect()->back();
    }



}
