<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nombreController extends Controller
{
    public function index()
    {
        return view('about.index');
    }
}
