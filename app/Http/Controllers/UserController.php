<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Announcement;

class UserController extends Controller
{
    //
    //
    public function index()
    {
        return view('user.user-dashboard');
    }
}

