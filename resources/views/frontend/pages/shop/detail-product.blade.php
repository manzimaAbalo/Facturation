@extends('frontend.layouts.master')
@section('content')
    @include('frontend.layouts.breadcrumb')
    @section('pageTitle')
        Boutique
    @endsection
    @section('title')
        Détails du produit
    @endsection

    <main class="main-wrapper">
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area axil-section-gap pb--0 bg-color-white">
            <!-- Start Single Product thumb  -->
            @include('frontend.pages.shop.components.product-thumb')
            <!-- End .single-product-thumb -->

            <!-- Start Single Product content  -->
            @include('frontend.pages.shop.components.product-info')
            <!-- woocommerce-tabs -->

        </div>
        <!-- End Shop Area  -->

        <!-- Start Recently Viewed Product Area  -->
        @include('frontend.pages.shop.recently-viewed')
        <!-- End Recently Viewed Product Area  -->

        <!-- Start Axil Newsletter Area  -->
        @include('frontend.layouts.newsletter')
        <!-- End Axil Newsletter Area  -->
    </main>
@endsection
