<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function indexx()
    {
        $getAllProducts = Product::all();
        return view('user.home', compact('getAllProducts'));
    }

    public function gohome()
    {

        $getAllProducts = Product::all();
        return view('user.home', compact('getAllProducts'));
    }

    public function about()
    {

        $getAllProducts = Product::all();
        return view('user.about', compact('getAllProducts'));
    }
}
