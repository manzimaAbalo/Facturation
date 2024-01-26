<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index(){
        $products = Product::where('status',1)->paginate(12);
        return view('frontend.pages.shop.index',[
            'products' => $products
        ]);
    }

    public function detail_product(Request $request, $slug){
        $product = Product::where('slug', $slug)->first();
        if ($product) {
            return view('frontend.pages.shop.detail-product', [
                'product' => $product
            ]);
        } else {
            return redirect()->back()->with('error', 'Product not found');
        }
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
