<?php

namespace App\Http\Controllers;

use App\Models\Bands;
use Illuminate\Http\Request;

class BandsController extends Controller
{
    public function bands(){

        $band = Bands::orderBy('id')->get();

        return view('Bands.index',['bands' => $band]);
    }

    public function create()
    {
        return view('Bands.create');
    }

    public function store(Request $request){
        $request->validate([
            'BandName'           => 'required',
            'Genre'              => 'required',
            'CountryOfOrigin'    => 'required',
            'FormationYear'      => 'required|numeric',
            'AlbumsReleased'     => 'required|numeric',
        ]);

        Bands::create([
            'BandName'           => $request->BandName,
            'Genre'              => $request->Genre,
            'CountryOfOrigin'    => $request->CountryOfOrigin,
            'FormationYear'      => $request->FormationYear,
            'AlbumsReleased'     => $request->AlbumsReleased,
        ]);

        return redirect('/bands')->with('info',"New Band has enter the Contest!");
    }

    public function edit(Bands $band)
    {
        return view('Bands.edit', compact('band'));
    }

    public function update(Bands $band, Request $request)
    {
        $request->validate([
            'BandName'             => 'required',
            'Genre'                => 'required',
            'CountryOfOrigin'      => 'required',
            'FormationYear'        => 'required',
            'AlbumsReleased'       => 'required',
        ]);

        $band->update($request->all());
        return redirect('/bands')->with('info', "$band->BandName has been updated" );
    }

    public function delete(Bands $band)
    {
        $band->delete();

        return redirect('/bands')->with('info', "$band->BandName has been deleted" );

    }
}
