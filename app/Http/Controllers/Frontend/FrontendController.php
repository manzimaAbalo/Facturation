<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::where('status', 1)->limit(8);

        return view('frontend.pages.home.accueil',[
            'products' => $products
        ]);
    }

    public function aboutPage(){
        return view('frontend.pages.about.aboutPage');
    }

    public function contactPage(){
        return view('frontend.pages.contact.contactPage');
    }

    public function profilePage(){
        return view('frontend.pages.profile.index');
    }
}
