@extends('layouts.nav')

@section('yl_content_cat')
    <div class="container">
        <div class="row">
                <div class="col-md-4 yl_cat">
                    <a href="/informatique">
                        <img src="{{asset('img/computer.png')}}">
                        <h2  class="yl_ncat">Informatique</h2>
                    </a>
                </div>
                <div class="col-md-4 yl_cat">
                    <a href="/vehicules">
                        <img src="{{asset('img/vehicle.png')}}">
                        <h2 class="yl_ncat">Véhicules</h2>
                    </a>
                </div>
                <div class="col-md-4 yl_cat">
                    <a href="/immobilier">
                        <img src="{{asset('img/home.png')}}">
                        <h2  class="yl_ncat">Immobilier</h2>
                    </a>
                </div>

        </div>
    </div>
@endsection

@section('content')
    <p class="yl_locat_page"><a href="/home"> Accueil > </a> Immobilier</p>

    <products :cat="'immobilier'"></products>
@endsection
