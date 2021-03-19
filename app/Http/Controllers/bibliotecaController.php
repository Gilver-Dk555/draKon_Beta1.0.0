<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bibliotecaController extends Controller
{
    public function index()
    {
        return view('biblioteca.index');
    }

    public function create()
    {
        return view('biblioteca.create');
    }

    public function show($seccion)
    {
        return view('biblioteca.show', compact('seccion'));
    }
}
