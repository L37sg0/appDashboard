<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function management()
    {
        return view('management.index');
    }

    public function structure()
    {
        return view('structure.index');
    }
    public function windparks()
    {
        return view('structure.windparks.windparks');
    }
}
