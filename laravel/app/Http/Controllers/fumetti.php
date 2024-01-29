<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Fumetto;


class fumetti extends Controller
{
    public function index(){
        
        $fumetti=Fumetto::all();

        return view('welcome',compact("fumetti"));

    }
}
