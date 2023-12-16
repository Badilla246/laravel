<?php

namespace App\Http\Controllers;

use App\Models\Venues;
use Illuminate\Http\Request;

class VenuesController extends Controller
{
    public function venues(){

        $venue = Venues::orderBy('id')->get();

        return view('Venues.index',['venues' => $venue]);
    }

    public function create()
    {
        return view('Venues.create');
    }

    public function store(Request $request){
        $request->validate([
            'VenueName'           => 'required',
            'Location'            => 'required',
            'Capacity'            => 'required|numeric',
            'ContactPerson'       => 'required',
            'OpeningDate'         => 'required|date',
        ]);

        Venues::create([
            'VenueName'            => $request->VenueName,
            'Location'             => $request->Location,
            'Capacity'             => $request->Capacity,
            'ContactPerson'        => $request->ContactPerson,
            'OpeningDate'          => $request->OpeningDate,
        ]);

        return redirect('/venues')->with('info',"New Venue has been added!");
    }
}
