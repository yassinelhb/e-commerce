<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($categorie, $tri, $type)
    {

        if ($categorie != 'All') {
            if ($type != 'All') {
                if ($tri == 'recentes') {
                    $products = Product::with('categorie','images')
                        ->whereHas('categorie', function ($q) use ($categorie) {
                            $q->where('nom', $categorie);
                        })
                        ->where('type', $type)
                        ->orderBy('id', 'desc')->get();
                } elseif ($tri == 'desc') {
                    $products = Product::with('categorie','images')
                        ->whereHas('categorie', function ($q) use ($categorie) {
                            $q->where('nom', $categorie);
                        })
                        ->where('type', $type)
                        ->orderBy('prix', 'desc')->get();
                } elseif ($tri == 'asc') {
                    $products = Product::with('categorie','images')
                        ->whereHas('categorie', function ($q) use ($categorie) {
                            $q->where('nom', $categorie);
                        })
                        ->where('type', $type)
                        ->orderBy('prix', 'asc')->get();
                } else {
                    $products = Product::with('categorie','images')
                        ->whereHas('categorie', function ($q) use ($categorie) {
                            $q->where('nom', $categorie);
                        })
                        ->where('type', $type)
                        ->get();
                }
            } else {
                if ($tri == 'recentes') {
                    $products = Product::with('categorie','images')
                        ->whereHas('categorie', function ($q) use ($categorie) {
                            $q->where('nom', $categorie);
                        })
                        ->orderBy('id', 'desc')->get();
                } elseif ($tri == 'desc') {
                    $products = Product::with('categorie','images')
                        ->whereHas('categorie', function ($q) use ($categorie) {
                            $q->where('nom', $categorie);
                        })
                        ->orderBy('prix', 'desc')->get();
                } elseif ($tri == 'asc') {
                    $products = Product::with('categorie','images')
                        ->whereHas('categorie', function ($q) use ($categorie) {
                            $q->where('nom', $categorie);
                        })
                        ->orderBy('prix', 'asc')->get();
                } else {
                    $products = Product::with('categorie','images')
                        ->whereHas('categorie', function ($q) use ($categorie) {
                            $q->where('nom', $categorie);
                        })->get();
                }
            }

        } else {
            if ($tri == 'recentes') {
                $products = Product::with('categorie','images')->orderBy('id', 'desc')->get();
            } elseif ($tri == 'desc') {
                $products = Product::with('categorie','images')->orderBy('prix', 'desc')->get();
            } elseif ($tri == 'asc') {
                $products = Product::with('categorie','images')->orderBy('prix', 'asc')->get();
            } else {
                $products = Product::with('categorie','images')->get();
            }
        }

        return Response()->json(['products' => $products]);

    }

}