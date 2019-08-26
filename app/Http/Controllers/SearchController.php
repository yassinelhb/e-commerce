<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $search = $request->get('q');
        $categorie = $request->get('c');
        return view('search',compact('search','categorie'));
    }

    public function searchpopproduct($search, $categorie)
    {
        $checkCat = Categorie::where('nom', $categorie)->get();
        $checkProd = Product::where('type', $categorie)->get();

        if (count($checkCat)) {
            $products = Product::with('categorie','images')
                ->whereHas('categorie', function ($q) use ($categorie) {
                    $q->where('nom', $categorie);
                })
                ->where('nom', 'like', '%' . $search . '%')
                ->get();
        } elseif (count($checkProd)) {
            $products = Product::with('categorie','images')->where('nom', 'like', '%' . $search . '%')
                ->where('type', $categorie)
                ->get();
        } else {
            $products = Product::with('categorie','images')->where('nom', 'like', '%' . $search . '%')
                ->get();
        }
        return Response()->json(['products' => $products]);

    }


    public function searchproduct($search, $categorie, $tri)
    {
        $checkCat = Categorie::where('nom', $categorie)->get();
        $checkProd = Product::where('type', $categorie)->get();

        if ($tri == 'recentes') {
            if (count($checkCat)) {
                $products = Product::with('categorie','images')
                    ->whereHas('categorie', function ($q) use ($categorie) {
                        $q->where('nom', $categorie);
                    })
                    ->where('nom', 'like', '%' . $search . '%')
                    ->orderBy('id', 'desc')->get();
            } elseif (count($checkProd)) {
                $products = Product::with('categorie','images')->where('nom', 'like', '%' . $search . '%')
                    ->where('type', $categorie)
                    ->orderBy('id', 'desc')->get();
            } else {
                $products = Product::with('categorie','images')->where('nom', 'like', '%' . $search . '%')
                    ->orderBy('id', 'desc')->get();
            }


        } elseif ($tri == 'desc') {

            if (count($checkCat)) {
                $products = Product::with('categorie','images')
                    ->whereHas('categorie', function ($q) use ($categorie) {
                        $q->where('nom', $categorie);
                    })
                    ->where('nom', 'like', '%' . $search . '%')
                    ->orderBy('prix', 'desc')->get();
            } elseif (count($checkProd)) {
                $products = Product::with('categorie','images')->where('nom', 'like', '%' . $search . '%')
                    ->where('type', $categorie)
                    ->orderBy('prix', 'desc')->get();
            } else {
                $products = Product::with('categorie','images')->where('nom', 'like', '%' . $search . '%')
                    ->orderBy('prix', 'desc')->get();
            }

        } elseif ($tri == 'asc') {

            if (count($checkCat)) {
                $products = Product::with('categorie','images')
                    ->whereHas('categorie', function ($q) use ($categorie) {
                        $q->where('nom', $categorie);
                    })
                    ->where('nom', 'like', '%' . $search . '%')
                    ->orderBy('prix', 'asc')->get();
            } elseif (count($checkProd)) {
                $products = Product::with('categorie','images')->where('nom', 'like', '%' . $search . '%')
                    ->where('type', $categorie)
                    ->orderBy('prix', 'asc')->get();
            } else {
                $products = Product::with('categorie','images')->where('nom', 'like', '%' . $search . '%')
                    ->orderBy('prix', 'asc')->get();
            }

        } else {
            if (count($checkCat)) {
                $products = Product::with('categorie','images')
                    ->whereHas('categorie', function ($q) use ($categorie) {
                        $q->where('nom', $categorie);
                    })
                    ->where('nom', 'like', '%' . $search . '%')
                    ->get();
            } elseif (count($checkProd)) {
                $products = Product::with('categorie','images')->where('nom', 'like', '%' . $search . '%')
                    ->where('type', $categorie)
                    ->get();
            } else {
                $products = Product::with('categorie','images')->where('nom', 'like', '%' . $search . '%')
                    ->get();
            }
        }
        return Response()->json(['products' => $products]);

    }
}
