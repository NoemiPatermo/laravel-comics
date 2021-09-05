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

    $comics = config('comics');// abbiamo associato il nostro array ad una variabile

    return view('home', [  //la devi inviare alla homepage, come secondo argomento con un array
        'comics' => $comics
    ]);
})-> name('homepage');//dai un nome specifico alla rotta, in modo da poterla chiamare in quel modo per puntare a quello specifico url




//classe ROUTE:: - metodo get - funzione
//(primo argomento = la rotta, secondo argomento = lancia questa funzione che torna una vista e solo quella)

Route::get('/card', function () { //creata altra rotta che punta in direzione del singolo prodotto [card]
   $comics = config('comics');

    return view('card', [
        'comics' => $comics
    ]);
    
})-> name('card');

