<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\utilisateurs;

class UtilisateursController extends Controller
{
    //
    public function index()
    {
        //
        return view('page_site.administrateur.register');
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //$nom = 'nom';
        //$nom = 'email';
        $this->validate($request,[
            'nom' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
        ]);


        $utilisateur = new utilisateurs();
        $utilisateur->nom = request('nom');
        $utilisateur->email = request('email');
        $utilisateur->password = bcrypt(request('password'));

        $utilisateur->save();

        return view('page_site.administrateur.login');
    }
}
