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

    public function contactForm(){
        // return redirect()->back()->with(['message' => 'Gracias por contactarnos, nuestro equipo atenderá tu consulta inmediatamente']);
        return redirect('/#contact_form')->with(['message' => 'Gracias por contactarnos, nuestro equipo atenderá tu consulta inmediatamente']);
    }

    public function catalog()
    {
        return view('products.catalog');
    }

    public function product1()
    {
        return view('products.product1');
    }

    public function product2()
    {
        return view('products.product2');
    }

    public function product3()
    {
        return view('products.product3');
    }

    public function product4()
    {
        return view('products.product4');
    }

    public function aboutUs()
    {
        return view('aboutUs.aboutUs');
    }

    public function invest()
    {
        return view('aboutUs.invest');
    }

    public function workWithUs()
    {
        return view('aboutUs.workWithUs');
    }

    public function generalConditions()
    {
        return view('importantInfo.generalConditions');
    }

    public function privacyPolicy()
    {
        return view('importantInfo.privacyPolicy');
    }

    public function frequentQuestions()
    {
        return view('importantInfo.frequentQuestions');
    }

    public function cookiesPolicy()
    {
        return view('importantInfo.cookiesPolicy');
    }

    public function customerService()
    {
        return view('importantInfo.customerService');
    }


}
