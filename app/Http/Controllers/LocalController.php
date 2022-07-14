<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LocalController extends Controller
{
    public $locals = [
        [1, 'Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [2, 'El Yunque', 'Fábrica de cerveza con cervecería todo en uno. Puedes tomarte una cerveza mientras ves cómo la fabrican'],
        [3, 'La Txapela', 'Pinchos más propios del barrio viejo de Bilbao, acompañados de una amplia carta de cervezas'],
        [5, 'Los Amigos', 'Una cervecería de las de toda la vida, con la más pura tradición de las tabernas madrileñas'],
        [8, 'Petite Bretagne', 'Amplia carta de cervezas y crepes dulces y salados']

    ];

    public function index () {
        $locals = DB::table ('locals')->get();
        //dd($locals);
        return view('locals.index', ['locals' => $locals]); 
    
    }
    public function create () {
        return view ('locals.create');
    }
    public function store (Request $request) {
        $img = $request->file('img')->store('public/brewery');
        DB::table('locals')->insert([
            'name' => $request->name,
            'description' =>$request->get('description'),
            'url' => Storage::url ($img) 
        ]);
        //eturn back ()->with ('success', 'Hemos guardado correctamente la cervecería.'); 
        return redirect()->route('localhome')->with ('success', 'Hemos guardado correctamente la cervecería.');
    }
    public function show ($id) {
        
        // Busco el $id dentro de la posición 0 de los elementos del array
    
        $objLocal = DB::table ('locals')->where ('id', '=', $id)->first();
        //dd ($objLocal);
        return view('locals.local',  ['local' => $objLocal]);

     /*
        foreach($this->locals as $local) {
            if ($local[0] == $id) {
                $objLocal = $local;
            }
        }
      
        
        if ($objLocal != null) {
            return view('locals.local',  ['local' => $objLocal]);
        } 
        else {
            return view('locals.index', [
                'texto' => 'Local no encontrado, tal vez te interese uno de estos otros',
                'locals' => $this->locals
            ]);
        }*/
    }
    public function login () {
        return view('locals.index', [
            'texto' => 'Usuario no autenticado',
            'locals' => $this->locals
        ]);
    }
}
