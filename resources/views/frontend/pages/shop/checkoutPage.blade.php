@extends('frontend.layouts.master')
@section('pageTitle')
    Panier
@endsection
@section('title')
    Mes commandes
@endsection
@section('content')
    @include('frontend.layouts.breadcrumb')

    <main class="main-wrapper">

        <!-- Start Checkout Area  -->
        <div class="axil-checkout-area axil-section-gap">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="axil-checkout-notice">
                                <div class="axil-toggle-box">
                                    <div class="toggle-bar"><i class="fas fa-user"></i> Déja client ? <a href="javascript:void(0)" class="toggle-btn">Click here to login <i class="fas fa-angle-down"></i></a>
                                    </div>
                                    <div class="axil-checkout-login toggle-open">
                                        <p>Si vous n'etes pas connecté, veuillez d'abord vous connecter.</p>
                                        <div class="signin-box">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <div class="form-group mb--0">
                                                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Se connecter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="axil-toggle-box">
                                    <div class="toggle-bar"><i class="fas fa-pencil"></i> Avez-vous un coupon ? <a href="javascript:void(0)" class="toggle-btn">Click here to enter your code <i class="fas fa-angle-down"></i></a>
                                    </div>

                                    <div class="axil-checkout-coupon toggle-open">
                                        <p>Si vous avez un code de coupon, veuillez l'appliquer ci-dessous.</p>
                                        <div class="input-group">
                                            <input placeholder="Enter coupon code" type="text">
                                            <div class="apply-btn">
                                                <button type="submit" class="axil-btn btn-bg-primary">Appliquer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="axil-checkout-billing">
                                <h4 class="title mb--40">Détails de facturation</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nom<span>*</span></label>
                                            <input type="text" id="first-name" placeholder="Adam">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Prénom<span>*</span></label>
                                            <input type="text" id="last-name" placeholder="John">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nom de la compagnie</label>
                                    <input type="text" id="company-name">
                                </div>
                                <div class="form-group">
                                    <label>Pays/Région <span>*</span></label>
                                    <select id="Region">
                                        <option value="3">Togo</option>
                                        <option value="4">Ghana</option>
                                        <option value="6">Bénin</option>
                                        <option value="5">Canada</option>
                                        <option value="1">France</option>
                                        <option value="2">Etats-unis</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Adresse postale<span>*</span></label>
                                    <input type="text" id="address1" class="mb--15" placeholder="House number and street name">
                                    <input type="text" id="address2" placeholder="Apartment, suite, unit, etc. (optonal)">
                                </div>
                                <div class="form-group">
                                    <label>Ville<span>*</span></label>
                                    <input type="text" id="town">
                                </div>
                                <div class="form-group">
                                    <label>Pays</label>
                                    <input type="text" id="country">
                                </div>
                                <div class="form-group">
                                    <label>Téléphone <span>*</span></label>
                                    <input type="tel" id="phone">
                                </div>
                                <div class="form-group">
                                    <label>Adresse mail<span>*</span></label>
                                    <input type="email" id="email">
                                </div>
                                <div class="form-group input-group">
                                    <input type="checkbox" id="checkbox1" name="account-create">
                                    <label for="checkbox1">Créer un compte</label>
                                </div>
                                <div class="form-group different-shippng">
                                    <div class="toggle-bar">
                                        <a href="javascript:void(0)" class="toggle-btn">
                                            <input type="checkbox" id="checkbox2" name="diffrent-ship">
                                            <label for="checkbox2">Envoyer à une adresse différente ?</label>
                                        </a>
                                    </div>
                                    <div class="toggle-open">
                                        <div class="form-group">
                                            <label>>Pays/Région <span>*</span></label>
                                            <select id="Region">
                                                <option value="3">Togo</option>
                                                <option value="4">Ghana</option>
                                                <option value="6">Bénin</option>
                                                <option value="5">Canada</option>
                                                <option value="1">France</option>
                                                <option value="2">Etats-unis</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Adresse postale <span>*</span></label>
                                            <input type="text" id="address1" class="mb--15" placeholder="House number and street name">
                                            <input type="text" id="address2" placeholder="Apartment, suite, unit, etc. (optonal)">
                                        </div>
                                        <div class="form-group">
                                            <label>Ville <span>*</span></label>
                                            <input type="text" id="town">
                                        </div>
                                        <div class="form-group">
                                            <label>Pays</label>
                                            <input type="text" id="country">
                                        </div>
                                        <div class="form-group">
                                            <label>Téléphone<span>*</span></label>
                                            <input type="tel" id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Autres remarques (facultatif)</label>
                                    <textarea id="notes" rows="2" placeholder="Notes about your order, e.g. speacial notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="axil-order-summery order-checkout-summery">
                                <h5 class="title mb--20">Votre commande</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table">
                                        <thead>
                                            <tr>
                                                <th>Produits</th>
                                                <th>Sous-total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="order-product">
                                                <td>Lampe<span class="quantity">x1</span></td>
                                                <td>11.700 fcfa</td>
                                            </tr>
                                            <tr class="order-product">
                                                <td>Ampoule intelligente <span class="quantity">x1</span></td>
                                                <td>19.800 fcfa</td>
                                            </tr>
                                            <tr class="order-subtotal">
                                                <td>Sous-total</td>
                                                <td>11.700 fcfa</td>
                                            </tr>
                                            <tr class="order-shipping">
                                                <td colspan="2">
                                                    <div class="shipping-amount">
                                                        <span class="title">Méthode d'expédition</span>
                                                        <span class="amount">3.500 fcfa</span>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio1" name="shipping" checked>
                                                        <label for="radio1">Expédition gratuite</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio2" name="shipping">
                                                        <label for="radio2">Local</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio3" name="shipping">
                                                        <label for="radio3">Forfaitaire</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Total</td>
                                                <td class="order-total-amount">32.300 fcfa</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="order-payment-method">
                                    <div class="single-payment">
                                        <div class="input-group">
                                            <input type="radio" id="radio4" name="payment">
                                            <label for="radio4">Virement bancaire direct</label>
                                        </div>
                                        <p>Effectuez votre paiement directement sur notre compte bancaire. Veuillez utiliser votre ID de commande comme référence de paiement. Votre commande ne sera pas expédiée tant que les fonds n'auront pas été crédités sur notre compte.</p>
                                    </div>
                                    <div class="single-payment">
                                        <div class="input-group">
                                            <input type="radio" id="radio5" name="payment">
                                            <label for="radio5">Paiement à la livraison</label>
                                        </div>
                                        <p>Payez en espèces à la livraison.</p>
                                    </div>
                                    <div class="single-payment">
                                        <div class="input-group justify-content-between align-items-center">
                                            <input type="radio" id="radio6" name="payment" checked>
                                            <label for="radio6">Paypal</label>
                                            <img src="assets/images/others/payment.png" alt="Paypal payment">
                                        </div>
                                        <p>Payez via PayPal, vous pouvez payer avec votre carte de crédit si vous n'avez pas de compte PayPal.</p>
                                    </div>
                                </div>
                                <button type="submit" class="axil-btn btn-bg-primary checkout-btn">Procéder au paiement</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Checkout Area  -->
    </main>
    @include('frontend.layouts.services')

@endsection
