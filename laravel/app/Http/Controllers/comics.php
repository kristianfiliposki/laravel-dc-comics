<?php

namespace App\Http\Controllers;

use App\Models\Fumetto;
use Illuminate\Http\Request;


class comics extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fumetti=Fumetto::all();
    

        return view("fumetti",compact("fumetti"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data= $request->all();
        $newcomics=new Fumetto;
        $newcomics->titolo = $data['titolo'];
        $newcomics->casaEditrice = $data['casa_editrice'];
        $newcomics->autore = $data['autore'];
        $newcomics->copertina = $data['copertina'];
        $newcomics->anno = $data['anno'];
        $newcomics->oscar = $data['oscar'];
        $newcomics->genere = $data['genere'];
        $newcomics->save();

        return redirect()->route('fumetti.index');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
