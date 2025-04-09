<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',       // Transaction type (Tithe, Donation, Society Dues)
        'details',    // Additional details (e.g., society name)
        'amount',     // Transaction amount
        'created_at', // Date of the transaction
    ];
}
