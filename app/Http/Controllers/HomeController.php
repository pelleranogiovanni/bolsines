<?php

namespace App\Http\Controllers;

use App\Bolsine;
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
        $bolsines = Bolsine::all();

        $total = $bolsines->count();

        return view('home', compact('total'));
    }
}
