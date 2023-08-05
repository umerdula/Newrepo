<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user())
        {
            return view('home');
        }
        else
        {

        }
    }

    public function index1()
    {
        if(auth()->user())
        {
            return view('form');
        }
        else
        {

        }
    }
}
