<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\SuggestNotification;

class SuggestController extends Controller
{
    
    public function create () {

        return view ('suggest.show');
    }
    public function store (Request $request) {
        Mail::to('david.martinez@aulab.es')
        ->send (new SuggestNotification(
            $request->email, 
            $request->input('name'), 
            $request->message
        ));

        return back ()->with ('success', 'Sugerencia recibida!');
    }

}
