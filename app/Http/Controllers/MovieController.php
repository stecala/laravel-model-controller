<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies=Movie::all(); //<- è una query # SELECT * FROM 'books'
        return view('home', compact('movies'));
    }
}