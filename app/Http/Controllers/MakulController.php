<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        $makul = makul::all();
        return view('makul.index', compact('makul'));
    }

    
}
