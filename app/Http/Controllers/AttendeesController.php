<?php

namespace App\Http\Controllers;
use App\Models\Attendees;
use Illuminate\Http\Request;

class AttendeesController extends Controller
{
    public function Attendee()
    {
        $attendees = Attendees::all();

        return view('Attendees.index', ['attendees' => $attendees]);
    }
}
