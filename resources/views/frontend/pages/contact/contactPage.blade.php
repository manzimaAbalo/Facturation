@extends('frontend.layouts.master')
@section('pageTitle')
    Contact
@endsection
@section('title')
    Contactez-nous
@endsection

@section('content')
    @include('frontend.layouts.breadcrumb')

    <!-- Start Contact Area  -->
    <div class="axil-contact-page-area axil-section-gap">
        <div class="container">
            <div class="axil-contact-page">
                <div class="row row--30">
                    @include('frontend.pages.contact.components.contact-form')
                    @include('frontend.pages.contact.components.contact-info')
                </div>
            </div>
            <!-- Start Google Map Area  -->
            <div class="axil-google-map-wrap axil-section-gap pb--0">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=lome&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
            <!-- End Google Map Area  -->
        </div>
    </div>
    <!-- End Contact Area  -->
    @include('frontend.layouts.newsletter')
@endsection
