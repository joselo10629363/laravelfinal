<?php

namespace prueba2\Http\Controllers;

use Illuminate\Http\Request;
class docentescontroller extends Controller
{
 
    public function index()
    {
        $docentes=docentes::all();
        return view('docentes/index', compact('docentes'));
    }


    
}
