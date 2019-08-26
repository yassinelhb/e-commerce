@extends('layouts.nav')

@section('yl_content_cat')
    <div class="container">
        <div class="row">
            <div class="col-md-3 yl_cat">
                <a href="/vehicules/motos">
                    <img src="{{asset('img/motors.png')}}">
                    <h2  class="yl_ncat">Motos</h2>
                </a>
            </div>
            <div class="col-md-3 yl_cat">
                <a href="/vehicules/voitures">
                    <img src="{{asset('img/carv.png')}}">
                    <h2 class="yl_ncat">Voitures</h2>
                </a>
            </div>
            <div class="col-md-3 yl_cat">
                <a href="/vehicules/vélo">
                    <img src="{{asset('img/bicycle.png')}}">
                    <h2  class="yl_ncat">Vélo</h2>
                </a>
            </div>

            <div class="col-md-3 yl_cat">
                <a href="/informatique/Semi-Remorque">
                    <img src="{{asset('img/truck.png')}}">
                    <h2  class="yl_ncat">Semi-Remorque</h2>
                </a>
            </div>

        </div>
    </div>
@endsection

@section('content')
    <p class="yl_locat_page"><a href="/home"> Accueil > </a> Véhicules</p>
    <listproducts :cat="'vehicules'"></listproducts>
@endsection
