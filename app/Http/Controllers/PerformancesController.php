<?php

namespace App\Http\Controllers;
use App\Models\Performances;
use Illuminate\Http\Request;

class PerformancesController extends Controller
{
    public function performance()
    {
        $performances = Performances::all();

        return view('Performances.index', ['performances' => $performances]);
    }

    public function edit(Performances $performances)
    {
        return view('Performances.edit', compact('performances'));
    }

    public function update(Performances $performances, Request $request)
    {
        $request->validate([
            'BandName'             => 'required',
            'VenueName'            => 'required',
            'Date'                 => 'required|date',
            'Time'                 => 'required',
            'TicketPrice'          => 'required',
        ]);

        $performances->update($request->all());
        return redirect('/performances')->with('info', "$performances->BandName has been updated" );
    }
}
