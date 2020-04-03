<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\utilisateurs;
use Auth;

class LoginsController extends Controller
{
    //
    public function index()
    {
        //
        return view('page_site.administrateur.login');
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        /*$this->validate($request,[
            'email' => 'required|min:3',
            'password' => 'required|min:6',
        ]);*/

        $resultat = Auth::attempt([
            'email' => $request ->email,
            'password' => $request ->password
        ]);

        if($resultat){
            return view('page_site.administrateur.AjoutService');
        } else{
            return redirect()->back();
        }


    }
}
