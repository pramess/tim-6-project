<?php

namespace App\Http\Controllers;
use App\Pertanyaan;
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
        $pertanyaan=pertanyaan::all();
        return view('home',compact('pertanyaan'));
    }

    public function profile()
    {
        return view('profile');
    }
}
