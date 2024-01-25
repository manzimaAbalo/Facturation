@extends('frontend.layouts.master')
@section('pageTitle')
    Panier
@endsection
@section('title')
    Mes produits
@endsection
@section('content')
    @include('frontend.layouts.breadcrumb')

    <main class="main-wrapper">

        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                    <div class="product-table-heading">
                        <h4 class="title">Votre panier</h4>
                        <a href="#" class="cart-clear">Vider le panier</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                                <tr>
                                    <th scope="col" class="product-remove"></th>
                                    <th scope="col" class="product-thumbnail">Produits</th>
                                    <th scope="col" class="product-title"></th>
                                    <th scope="col" class="product-price">Prix</th>
                                    <th scope="col" class="product-quantity">Quantité</th>
                                    <th scope="col" class="product-subtotal">Sous-total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="single-product.html"><img src="assets/images/product/electric/product-01.png" alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product.html">Casques</a></td>
                                    <td class="product-price" data-title="Price"><span class="currency-symbol">f</span>12.400</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">f</span>27.500</td>
                                </tr>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="single-product-2.html"><img src="assets/images/product/electric/product-02.png" alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product-2.html">Clavier rétro-eclairée</a></td>
                                    <td class="product-price" data-title="Price"><span class="currency-symbol">f</span>12.400</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">f</span>27.500</td>
                                </tr>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="single-product-3.html"><img src="assets/images/product/electric/product-03.png" alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product-3.html">Camera HD </a></td>
                                    <td class="product-price" data-title="Price"><span class="currency-symbol">f</span>12.400</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">f</span>27.500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-update-btn-area">
                        <div class="input-group product-cupon">
                            <input placeholder="Enter coupon code" type="text">
                            <div class="product-cupon-btn">
                                <button type="submit" class="axil-btn btn-outline">Appliquer</button>
                            </div>
                        </div>
                        <div class="update-btn">
                            <a href="#" class="axil-btn btn-outline">Mettre le panier a jour</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                            <div class="axil-order-summery mt--80">
                                <h5 class="title mb--20">Détails de commande</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table mb--30">
                                        <tbody>
                                            <tr class="order-subtotal">
                                                <td>Sous-total</td>
                                                <td>11.700 fcfa</td>
                                            </tr>
                                            <tr class="order-shipping">
                                                <td>Livraison</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio1" name="shipping" checked>
                                                        <label for="radio1">Livraison gratuite</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio2" name="shipping">
                                                        <label for="radio2">Local: 3.500 fcfa</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio3" name="shipping">
                                                        <label for="radio3">Forfaitaire: 1.200 fcfa</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="order-tax">
                                                <td>Impôt d'État</td>
                                                <td>800 fcfa</td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Total</td>
                                                <td class="order-total-amount">12.500 fcfa</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="{{ route('market.checkout') }}" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart Area  -->

    </main>
    @include('frontend.layouts.services')
@endsection
