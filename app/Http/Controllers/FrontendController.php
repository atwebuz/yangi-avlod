<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.pages.home');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function investoram_premushastva(){
        return view('frontend.pages.investoram.premushastva');
    }
    public function investoram_registratsiya_rezidentov(){
        return view('frontend.pages.investoram.registratsiya_rezidentov');
    }
}
