<?php

namespace App\Http\Controllers;

use App\Mail\MessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        //
        return view('page_site.contacte');
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $this->validate($request,[
            'nom' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        $mailabele = new MessageCreated($request->nom, $request->email,$request->message );
        Mail::to('stivingtatga@gmail.com')->send($mailabele);
        return view('page_site.contacte');
    }
}
