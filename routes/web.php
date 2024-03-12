<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Contatti', function () {
    return view('Contatti', [
        'title'=>'I Miei Contatti: '
    ]);
});

Route::get('/ChiSono', function (){
    return view('ChiSono',[
        'title'=>'Il mio primo progetto Laravel',
        'description'=> 'Ciao a tutti sono un semplcie progetto Laravel'
    ]);
});
