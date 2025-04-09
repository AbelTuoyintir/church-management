<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finance;

class financeController extends Controller
{
    // Store a new transaction
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'details' => 'nullable|string',
            'amount' => 'required|numeric|min:0.01',
        ]);

        $transaction = Finance::create([
            'type' => $validatedData['type'],
            'details' => $validatedData['details'] ?? '-',
            'amount' => $validatedData['amount'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction recorded successfully!',
            'transaction' => $transaction,
        ]);


    }

    // Fetch all transactions
    public function index()
    {
        return view('user.finance');
    }
}
