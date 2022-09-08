<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieDbController extends Controller
{
    //
    public function index(){
        $movies=Movie::all();
        return view('movies', compact('movies'));
    }
}
