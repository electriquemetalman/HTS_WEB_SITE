<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Produits;
use App\Services;

class recupController extends Controller
{
    //
    public function recupServices()
    {
        $services = Services::get();
        return view('page_site.nos_service', compact('services'));
    }

    public function recupProduits()
    {
        $produits = Produits::get();
        return view('page_site.nos_produit', compact('produits'));
    }
}
