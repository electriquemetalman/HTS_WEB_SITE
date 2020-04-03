<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produits;
use Image;

class ProduitController extends Controller
{
    //
    public function index()
    {
        return view('page_site.administrateur.AjoutProduit');
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'logo' => 'required',
            'nom' => 'required',
            'detaille' => 'required',
            'version' => 'required',
        ]);

        $produit = new Produits();

        // debut ajouter une image
        $originalImage = $request->file('logo');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path() . '/storage/images/';
        $originalPath = storage_path() . '/app/public/images/';
        $thumbnailImage0 = Image::make($originalImage)->save($originalPath . time() . $originalImage->getClientOriginalName());
        $thumbnailImage0->resize(412,386);
        $thumbnailImage0->save($thumbnailPath . time() . $originalImage->getClientOriginalName());
        $image = time() . $originalImage->getClientOriginalName();
        $produit->image = $image;
        // fin ajouter image
        $produit->nom = request('nom');
        $produit->detail = request('detaille');
        $produit->version = request('version');

        $produit->save();

        return view('page_site.administrateur.AjoutProduit');
    }
}
