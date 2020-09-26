<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    function prova()
    {
        $heroes = ['batman', 'ironman', 'superman', 'spiderman', 'thor'];

        return view('prova')->with('heroes', $heroes);
    }
}
