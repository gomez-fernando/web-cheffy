<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Component;

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
    public function welcome()
    {
        return view('welcome');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function product1()
    {
        return view('product1');
    }

    public function product2()
    {
        return view('product2');
    }

    public function product3()
    {
        return view('product3');
    }

    public function product4()
    {
        return view('product4');
    }
}
