<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class YslController extends Controller
{
    public function index(){
        return view('index');
    }
    public function informatique(){
        return view('informatique');
    }
    public function vehicules(){
        return view('vehicules');
    }
    public function immobilier(){
        return view('immobilier');
    }
    public function product($id){
        $product = Product::with('categorie','images')->find($id);
        return view('product',compact('product'));
    }
    public function sous_informatique($source){
        return view('sous_informatique',compact('source',$source));
    }
}
