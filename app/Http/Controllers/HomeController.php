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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function hasil()
    {
        return view('frontend.hasil_pencarian');
    }

    public function profil()
    {
        return view('frontend.profil');
    }
}
