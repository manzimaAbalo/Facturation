<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.home.accueil');
    }

    public function aboutPage(){
        return view('frontend.pages.about.aboutPage');
    }

    public function contactPage(){
        return view('frontend.pages.contact.contactPage');
    }
}
