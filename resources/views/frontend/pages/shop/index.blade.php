@extends('frontend.layouts.master')
@section('pageTitle')
    Boutique
@endsection
@section('title')
    Explorer nos produits
@endsection
@section('content')
    @include('frontend.layouts.breadcrumb')
    <!-- Start Shop Area  -->
    <div class="axil-shop-area axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="axil-shop-top">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="category-select">

                                    <!-- Start Single Select  -->
                                    <select class="single-select">
                                        <option>Categories</option>
                                        <option>Fashion</option>
                                        <option>Electronics</option>
                                        <option>Furniture</option>
                                        <option>Beauty</option>
                                    </select>
                                    <!-- End Single Select  -->

                                    <!-- Start Single Select  -->
                                    <select class="single-select">
                                        <option>Color</option>
                                        <option>Red</option>
                                        <option>Blue</option>
                                        <option>Green</option>
                                        <option>Pink</option>
                                    </select>
                                    <!-- End Single Select  -->

                                    <!-- Start Single Select  -->
                                    <select class="single-select">
                                        <option>Price Range</option>
                                        <option>0 - 100</option>
                                        <option>100 - 500</option>
                                        <option>500 - 1000</option>
                                        <option>1000 - 1500</option>
                                    </select>
                                    <!-- End Single Select  -->

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                    <!-- Start Single Select  -->
                                    <select class="single-select">
                                        <option>Sort by Latest</option>
                                        <option>Sort by Name</option>
                                        <option>Sort by Price</option>
                                        <option>Sort by Viewed</option>
                                    </select>
                                    <!-- End Single Select  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row--15">
                @for ($i = 1; $i < 5; $i++)
                    @include('frontend.pages.shop.components.product-item', ['product' =>$i])

                @endfor
                {{-- <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="axil-product product-style-one has-color-pick mt--40">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="assets/images/product/electric/product-01.png" alt="Product Images">
                            </a>
                            <div class="label-block label-right">
                                <div class="product-badget">20% OFF</div>
                            </div>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">$30</span>
                                    <span class="price old-price">$30</span>
                                </div>
                                <div class="color-variant-wrapper">
                                    <ul class="color-variant">
                                        <li class="color-extra-01 active"><span><span class="color"></span></span>
                                        </li>
                                        <li class="color-extra-02"><span><span class="color"></span></span>
                                        </li>
                                        <li class="color-extra-03"><span><span class="color"></span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- End Single Product  -->

            </div>
            <div class="text-center pt--30">
                <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Affichez plus</a>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End Shop Area  -->
@endsection
