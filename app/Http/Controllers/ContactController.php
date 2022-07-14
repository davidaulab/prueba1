<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactNofitication;
use App\Mail\ContactNotification;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function show  () {
        
        return view('contacts.show'); 
    
    }
    public function store (Request $request) {
        // Enviamos el email de contacto
        
         if (Mail::to('david.martinez@aulab.es')->send(new ContactNotification($request->email, $request->message))) {
            return back ()->with ('success', 'Hemos recibido tu consulta en breve nos pondremos en contacto contigo.'); 
    
         }
         else {
            return back ()->with ('error', 'No hemos podido enviar su mensaje');
        }
        
       
        
    }
}
