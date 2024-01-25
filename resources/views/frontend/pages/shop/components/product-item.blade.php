<!-- Start Single Product  -->

<div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="axil-product product-style-one has-color-pick mt--40">
        <div class="thumbnail">
            <a href="{{ route('market.detail', ['slug'=>$product]) }}">
                <img src="{{ asset('assets/images/product/electric/product-0' . ($product) . '.png') }}" alt="Product Images">
            </a>
            <div class="label-block label-right">
                <div class="product-badget">20% OFF</div>
            </div>
            <div class="product-hover-action">
                <ul class="cart-action">
                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                    <li class="select-option"><a href="cart.html">Ajouter au panier</a></li>
                    <li class="quickview">
                        @include('frontend.components.productQuickView', ['product' => $product])
                        {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a> --}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-content">
            <div class="inner">
                <h5 class="title"><a href="{{ route('market.detail', ['slug'=>$product]) }}">3D™ wireless headset</a></h5>
                <div class="product-price-variant">
                    <span class="price current-price">3000 fcfa</span>
                    <span class="price old-price">3000 fcfa</span>
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
</div>
<!-- End Single Product  -->
