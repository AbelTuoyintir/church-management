<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    use HasFactory;

    protected $fillable = [
        'invitation_type',
        'content',
        'date',
        'time',
        'location',
        'attendee_name',
    ];
}
