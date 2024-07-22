<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function projects()
    {
        return view('projects');
    }
    public function projectTwo()
    {
        return view('la2');
    }
    public function projectThree()
    {
        return view('la3');
    }
}