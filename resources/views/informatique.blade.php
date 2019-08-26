@extends('layouts.nav')

@section('yl_content_cat')
    <div class="container">
        <div class="row">
            <div class="col-md-3 yl_cat">
                <a href="/informatique/téléphone">
                    <img src="{{asset('img/phone.png')}}">
                    <h2  class="yl_ncat">Téléphone</h2>
                </a>
            </div>
            <div class="col-md-3 yl_cat">
                <a href="/informatique/ordinateur">
                    <img src="{{asset('img/laptop.png')}}">
                    <h2 class="yl_ncat">Ordinateur</h2>
                </a>
            </div>
            <div class="col-md-3 yl_cat">
                <a href="/informatique/console & Jeux vidéo">
                    <img src="{{asset('img/games.png')}}">
                    <h2  class="yl_ncat">Consoles & Jeux vidéo</h2>
                </a>
            </div>

            <div class="col-md-3 yl_cat">
                <a href="/informatique/tablette">
                    <img src="{{asset('img/tablet.png')}}">
                    <h2  class="yl_ncat">Tablette</h2>
                </a>
            </div>

        </div>
    </div>
@endsection

@section('content')
    <p class="yl_locat_page"><a href="/home"> Accueil > </a> Informatique</p>

    <listproducts :cat="'informatique'"></listproducts>
@endsection
