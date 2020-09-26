<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    function prova() 
    {
        return view('prova');
    }

    function prova_uno() 
    {
        $name = "Napoleone";

        return view('ciao')->with("name", $name);
    }

    function dettaglio($id, $first_name, $last_name) 
    {
        return view('dettaglio', compact('id', 'first_name', 'last_name'));
    }

}
