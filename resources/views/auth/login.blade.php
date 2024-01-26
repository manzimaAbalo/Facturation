
@extends('auth.layout')

@section('header')
    <div class="singin-header-btn">
        <p>Vous n'avez pas de compte ?</p>
        <a href="{{ route('register') }}" class="axil-btn btn-bg-secondary sign-up-btn">Inscrivez-vous</a>
    </div>
@endsection

@section('main')
<div class="row">
    <div class="col-xl-4 col-lg-6">
        <div class="axil-signin-banner bg_image bg_image--9">
            <h3 class="title">Vous êtes le bienvenue au marché</h3>
        </div>
    </div>
    <div class="col-lg-6 offset-xl-2">
        <div class="axil-signin-form-wrap">
            <div class="axil-signin-form">
                <h3 class="title">Connectez-vous.</h3>
                <p class="b2 mb--55">Entrez vos identifiants</p>
                @include('layouts.messages')
                <form class="singin-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="email" value="" placeholder="Entrez votre nom utilisateur (email,telephone,username)">
                        <span class="text-danger">
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" class="form-control" name="password" value="" placeholder="Entrez votre mot de passe">
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <button type="submit" class="axil-btn btn-bg-primary submit-btn">Se connecter</button>
                        <a href="#" class="forgot-btn">Mot de passe oublié</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
