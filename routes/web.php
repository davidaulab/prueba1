<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect() -> route('landing');
}) -> name ('home');


Route::get('/login', function () {
    $locals = [
        [1, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [2, 'Cervecería 2', 'Este sería el contenido de artículo 2 que es el siguiente'],
        [3, 'Cervecería 3', 'Este sería el contenido de artículo 3 que es la suma de los dos anteriores'],
        [5, 'Cervecería 5', 'Este sería el contenido de artículo 5 que sigue la numeración de Fibonacci'],
        [8, 'Cervecería 8', 'Este sería el contenido de artículo 8 que ya es el último']

    ];


    return view('locals.index', [
        'texto' => 'Usuario no autenticado',
        'locals' => $locals
    ]);
});

Route::get('/index', function () {

    $locals = [
        [1, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [2, 'Cervecería 2', 'Este sería el contenido de artículo 2 que es el siguiente'],
        [3, 'Cervecería 3', 'Este sería el contenido de artículo 3 que es la suma de los dos anteriores'],
        [5, 'Cervecería 5', 'Este sería el contenido de artículo 5 que sigue la numeración de Fibonacci'],
        [8, 'Cervecería 8', 'Este sería el contenido de artículo 8 que ya es el último']

    ];


    return view('locals.index', ['locals' => $locals]);
}) -> name('landing');




Route::get('/local/{id}', function ($id) {

    $locals = [
        [1, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [2, 'Cervecería 2', 'Este sería el contenido de artículo 2 que es el siguiente'],
        [3, 'Cervecería 3', 'Este sería el contenido de artículo 3 que es la suma de los dos anteriores'],
        [5, 'Cervecería 5', 'Este sería el contenido de artículo 5 que sigue la numeración de Fibonacci'],
        [8, 'Cervecería 8', 'Este sería el contenido de artículo 8 que ya es el último']

    ];
    // Busco el $id dentro de la posición 0 de los elementos del array

    $objLocal = null;

    foreach($locals as $local) {
        if ($local[0] == $id) {
            $objLocal = $local;
        }
    }
  
    
    if ($objLocal != null) {
        return view('locals.local', ['local' => $objLocal]);
    } 
    else {
        return view('locals.index', [
            'texto' => 'Local no encontrado, tal vez te interese uno de estos otros',
            'locals' => $locals
        ]);
    }
});



Route::get('/about', function () {
    return view('about', ['empName' => 'Aulab.es']);
}) -> name('about');

Route::get('/contact', function () {
    return view('contact');
}) -> name('contact');
