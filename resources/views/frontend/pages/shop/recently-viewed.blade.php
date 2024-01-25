<!-- Start Recently Viewed Product Area  -->
<div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i>Récents</span>
            <h2 class="title">Dans la même catégorie</h2>
        </div>
        <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
            @for ($i = 1; $i < 10; $i++)
                @include('frontend.pages.shop.components.viewed-item', ['product' => $i])
            @endfor
        </div>
    </div>
</div>
<!-- End Recently Viewed Product Area  -->
