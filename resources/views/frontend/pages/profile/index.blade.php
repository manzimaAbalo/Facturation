@extends('frontend.layouts.master')

@section('pageTitle')
    Mon compte
@endsection
@section('title')
    Détails du compte
@endsection
@section('content')
<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    @include('frontend.layouts.breadcrumb')
    <!-- End Breadcrumb Area  -->

    <!-- Start My Account Area  -->
    <div class="axil-dashboard-area axil-section-gap">
        <div class="container">
            <div class="axil-dashboard-warp">
                <div class="axil-dashboard-author">
                    <div class="media">
                        <div class="thumbnail">
                            <img src="assets/images/product/author1.png" alt="Hello Annie">
                        </div>
                        <div class="media-body">
                            <h5 class="title mb-0">Bonjour Annie</h5>
                            <span class="joining-date">Membre de eTrade depuis Janvier 2024</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-4">
                        <aside class="axil-dashboard-aside">
                            <nav class="axil-dashboard-nav">
                                <div class="nav nav-tabs" role="tablist">
                                    <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-dashboard" role="tab" aria-selected="true"><i class="fas fa-th-large"></i>Tableau</a>
                                    <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-orders" role="tab" aria-selected="false"><i class="fas fa-shopping-basket"></i>Commandes</a>
                                    <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-downloads" role="tab" aria-selected="false"><i class="fas fa-file-download"></i>Telechargements</a>
                                    <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-address" role="tab" aria-selected="false"><i class="fas fa-home"></i>Adresse</a>
                                    <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-account" role="tab" aria-selected="false"><i class="fas fa-user"></i>Detail compte</a>
                                    <a class="nav-item nav-link" href="sign-in.html"><i class="fal fa-sign-out"></i>Se deconnecter</a>
                                </div>
                            </nav>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel">
                                <div class="axil-dashboard-overview">
                                    <div class="welcome-text">Bonjour Annie (pas <span>Annie?</span> <a href="sign-in.html">Se deconnecter</a>)</div>
                                    <p>"Depuis le tableau de bord de votre compte, vous pouvez consulter vos commandes récentes, gérer vos adresses de livraison et de facturation, et modifier votre mot de passe et les détails de votre compte."</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-orders" role="tabpanel">
                                <div class="axil-dashboard-order">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Order</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">#6523</th>
                                                    <td>September 10, 2020</td>
                                                    <td>Processing</td>
                                                    <td>$326.63 for 3 items</td>
                                                    <td><a href="#" class="axil-btn view-btn">View</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#6523</th>
                                                    <td>September 10, 2020</td>
                                                    <td>On Hold</td>
                                                    <td>$326.63 for 3 items</td>
                                                    <td><a href="#" class="axil-btn view-btn">View</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#6523</th>
                                                    <td>September 10, 2020</td>
                                                    <td>Processing</td>
                                                    <td>$326.63 for 3 items</td>
                                                    <td><a href="#" class="axil-btn view-btn">View</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#6523</th>
                                                    <td>September 10, 2020</td>
                                                    <td>Processing</td>
                                                    <td>$326.63 for 3 items</td>
                                                    <td><a href="#" class="axil-btn view-btn">View</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#6523</th>
                                                    <td>September 10, 2020</td>
                                                    <td>Processing</td>
                                                    <td>$326.63 for 3 items</td>
                                                    <td><a href="#" class="axil-btn view-btn">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-downloads" role="tabpanel">
                                <div class="axil-dashboard-order">
                                    <p>Vous n'avez aucun telechargement</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-address" role="tabpanel">
                                <div class="axil-dashboard-address">
                                    <p class="notice-text">"Les adresses suivantes seront utilisées par défaut sur la page de paiement."</p>
                                    <div class="row row--30">
                                        <div class="col-lg-6">
                                            <div class="address-info mb--40">
                                                <div class="addrss-header d-flex align-items-center justify-content-between">
                                                    <h4 class="title mb-0">Adresse de livraison</h4>
                                                    <a href="#" class="address-edit"><i class="far fa-edit"></i></a>
                                                </div>
                                                <ul class="address-details">
                                                    <li>Name: Annie Mario</li>
                                                    <li>Email: annie@gmail.com</li>
                                                    <li>Phone: +228 91718327</li>
                                                    <li class="mt--30">7398 Smoke Ranch Road <br>
                                                    Las Vegas, Nevada 89128</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="address-info">
                                                <div class="addrss-header d-flex align-items-center justify-content-between">
                                                    <h4 class="title mb-0">Billing Address</h4>
                                                    <a href="#" class="address-edit"><i class="far fa-edit"></i></a>
                                                </div>
                                                <ul class="address-details">
                                                    <li>Name: Annie Mario</li>
                                                    <li>Email: annie@example.com</li>
                                                    <li>Phone: 1234 567890</li>
                                                    <li class="mt--30">7398 Smoke Ranch Road <br>
                                                    Las Vegas, Nevada 89128</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-account" role="tabpanel">
                                <div class="col-lg-9">
                                    <div class="axil-dashboard-account">
                                        <form class="account-details-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Nom</label>
                                                        <input type="text" class="form-control" value="Annie">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label> Prenom</label>
                                                        <input type="text" class="form-control" value="Mario">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mb--40">
                                                        <label>Pays/ Region</label>
                                                        <select class="select2">
                                                            <option value="1">Togo</option>
                                                            <option value="1">USA</option>
                                                            <option value="1">Emirates Arab</option>
                                                            <option value="1">Australie</option>
                                                        </select>
                                                        <p class="b3 mt--10">This will be how your name will be displayed in the account section and in reviews</p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h5 class="title">Changer le mot de passe</h5>
                                                    <div class="form-group">
                                                        <label>Mot de passe</label>
                                                        <input type="password" class="form-control" value="123456789101112131415">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nouveau mot de passe</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Confirmer le mot de passe</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group mb--0">
                                                        <input type="submit" class="axil-btn" value="Save Changes">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End My Account Area  -->

    <!-- Start Axil Newsletter Area  -->
    @include('frontend.layouts.newsletter')
    <!-- End Axil Newsletter Area  -->
</main>
@endsection
