@extends('auth.layout')
@section('header')
<div class="singin-header-btn">
    <p>Vous avez déjà un compte ?</p>
    <a href="{{ route('login') }}" class="axil-btn btn-bg-secondary sign-in-btn">Connectez-vous</a>
</div>
@endsection

@section('main')
<div class="row">
    <div class="col-xl-4 col-lg-6">
        <div class="axil-signin-banner bg_image bg_image--10">
            <h3 class="title">Le site des bons produits</h3>
        </div>
    </div>
    <div class="col-lg-6 offset-xl-2">
        <div class="axil-signin-form-wrap">
            <div class="axil-signin-form">
                <h3 class="title">Vous êtes nouveaux chez nous ?</h3>
                <p class="b2 mb--55">Entrez vos informations pour vous inscrire</p>
                <form class="singin-form">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" value="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Prénoms</label>
                        <input type="text" class="form-control" name="username" value="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control" name="phone" value="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" value="" placeholder="Entrez votre mot de passe">
                    </div>
                    <div class="form-group">
                        <label>Confirmez le mot de passe</label>
                        <input type="password" class="form-control" name="password_confirmation" value="" placeholder="Entrez votre mot de passe">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="axil-btn btn-bg-primary submit-btn">Créer mon compte</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
