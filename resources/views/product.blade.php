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

    <p class="yl_locat_page"><a href="/home"> Accueil > </a> <a href="/{{$product->categorie->nom}}">{{ $product->categorie->nom}} > </a> {{ $product->nom}}</p>

    <div class="row">
      <div class="yl_content_result col-md-7">
        <div id="carouselExampleIndicators" class="carousel slide row" data-ride="carousel">
            <div class="col-md-2">
                <ul class="yl_carousel_list">

                    @foreach($product->images as $index => $img)
                        @if($index == 0 )
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}"  class="active">
                                <img src="../img/{{$img->path}}">
                            </li>
                        @else
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}"  >
                                <img src="../img/{{$img->path}}">
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>
            <div class="carousel-inner col-md-9">

                    @foreach($product->images as $index => $img)
                        @if($index == 0 )
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../img/{{$img->path}}">
                            </div>
                        @else
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../img/{{$img->path}}" >
                            </div>
                        @endif
                    @endforeach

                </div>
        </div>
      </div>
      <div class="col-md-4 yl_prod_info">
          <h3 class="yl_prod_price"> {{ $product->prix }} TND</h3>
          <h2 class="yl_prod_tt"> {{ $product->nom }}</h2>
          <p>{{ $product->created_at }}</p>
          <p class="yl_prod_etat">Etat :
              @if($product->etat == 'neuf')
                  <span class="text-success">{{$product->etat}}</span>
              @else
                  <span class="text-info">{{$product->etat}}</span>
              @endif
          </p>
          <p class="yl_prod_desc">Description</p>
          <p>{{ $product->description }}</p>
      </div>




@endsection
