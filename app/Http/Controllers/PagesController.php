<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function pages()
    {
        return view('layouts.pages');
    }


    public function about()
    {
        return view('about');
    }

    public function entrepreneurship()
    {
        return view('entrepreneurship');
    }
    public function global()
    {
        return view('global');
    }

    public function brand()
    {
        return view('brand');
    }

    public function registration()
    {
        return view('registration');
    }
    public function blog()
    {
        return view('blog');
    }

    public function event()
    {
        return view('event');
    }
}