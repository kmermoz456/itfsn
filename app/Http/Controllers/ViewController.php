<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function temoi()
    {
        return view('temoi');
    }

     public function cours()
    {
        return view('cours');
    }


     public function itf()
    {
        return view('itf');
    }

     public function collect()
    {
        return view('collect');
    }

    

    public function blog()
    {
        return view('blog');
    }
}
