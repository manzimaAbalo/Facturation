@extends('frontend.layouts.master')

@section('content')
<main class="main-wrapper">
    <!-- Start banner Area  -->
    @include('frontend.pages.home.partials.banners')
    <!-- End banners Area  -->

    <!-- Start Categorie Area  -->
    @include('frontend.pages.home.partials.categories', ['categories' => []])
    <!-- End Categorie Area  -->

    <!-- Poster Countdown Area  -->
    @include('frontend.pages.home.partials.Countdown')
    <!-- End Poster Countdown Area  -->

    <!-- Start Expolre Product Area  -->
    @include('frontend.pages.home.partials.explore-products')
    <!-- End Expolre Product Area  -->

    <!-- Start Testimonila Area  -->
    @include('frontend.pages.home.partials.testimoials')
    <!-- End Testimonila Area  -->


    <!-- Start Why Choose Area  -->
    @include('frontend.pages.home.partials.choose')
    <!-- End Why Choose Area  -->


    <!-- Start Axil Product Poster Area  -->
    <div class="axil-poster">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb--30">
                    <div class="single-poster">
                        <a href="shop.html">
                            <img src="assets/images/product/poster/poster-01.png" alt="eTrade promotion poster">
                            <div class="poster-content">
                                <div class="inner">
                                    <h3 class="title">Rich sound, <br> for less.</h3>
                                    <span class="sub-title">Collections <i class="fal fa-long-arrow-right"></i></span>
                                </div>
                            </div>
                            <!-- End .poster-content -->
                        </a>
                    </div>
                    <!-- End .single-poster -->
                </div>
                <div class="col-lg-6 mb--30">
                    <div class="single-poster">
                        <a href="shop-sidebar.html">
                            <img src="assets/images/product/poster/poster-02.png" alt="eTrade promotion poster">
                            <div class="poster-content content-left">
                                <div class="inner">
                                    <span class="sub-title">50% Offer In Winter</span>
                                    <h3 class="title">Get VR <br> Reality Glass</h3>
                                </div>
                            </div>
                            <!-- End .poster-content -->
                        </a>
                    </div>
                    <!-- End .single-poster -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Axil Product Poster Area  -->

    <!-- Start Axil Newsletter Area  -->
    @include('frontend.layouts.newsletter')
    <!-- End Axil Newsletter Area  -->

</main>
@endsection
