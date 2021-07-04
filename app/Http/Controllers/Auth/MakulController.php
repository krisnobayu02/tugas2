<?php

namespace App\Http\Controllers;

use App\Biaya;
use Illuminate\Http\Request;
use Alert;


class BiayaController extends Controller
{
    public function index()
    {
        $makul = makul::all();
        return view('makul.index', compact('makul'));
    }

    
    }

