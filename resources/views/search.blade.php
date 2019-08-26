@extends('layouts.nav')

@section('yl_content_cat')
    <div class="container">
        <div class="row">
            <div class="col-md-4 yl_cat">
                <img src="{{asset('img/computer.png')}}">
                <a href="/informatique" class="yl_ncat">Informatique</a>
            </div>
            <div class="col-md-4 yl_cat">
                <img src="{{asset('img/vehicle.png')}}">
                <a href="/vehicules" class="yl_ncat">Véhicules</a>
            </div>
            <div class="col-md-4 yl_cat">
                <img src="{{asset('img/home.png')}}">
                <a href="/immobilier" class="yl_ncat">Immobilier</a>
            </div>

        </div>
    </div>
@endsection

@section('content')
    <p class="yl_locat_page"><a href="/home"> Accueil > </a> {{ $search }}</p>

    <search :search="'{{$search}}'" :categorie="'{{$categorie}}'"></search>

@endsection
