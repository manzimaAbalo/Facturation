<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index(){
        return view('frontend.pages.shop.index');
    }

    public function detail_product(Request $request){
        return view('frontend.pages.shop.detail-product');
    }

    public function cartPage(){
        return view('frontend.pages.shop.cartPage');
    }

    public function checkoutPage(){
        return view('frontend.pages.shop.checkoutPage');
    }

    public function favorisPage(){
        return view('frontend.pages.shop.favorisPage');
    }

}
