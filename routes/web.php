<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['welcome'=>'Riccardo\'s Blog']);
})->name('welcome');

Route::get('/contatti', function () {
    return view('pages.Contatti');
})->name('contacts');

Route::get('/chi-sono', function (){
    return view('pages.ChiSono',[
        'title'=>'Il mio primo progetto Laravel',
        'description'=> 'Ciao a tutti sono un semplice progetto Laravel'
    ]);
})->name('about-me');

Route::get('/articles', function (){
    $list=[
        ['title'=>'Pogrammare in JavaScript', 'category'=> 'Coding', 'description'=>'Prima descrizione'],
        ['title'=>'Programmare in php', 'category'=> 'Coding', 'description'=>'Seconda descrizione'],
        ['title'=>'Programmare in Python', 'category'=> 'Coding', 'description'=>'Terza descrizione']
    ];
   
    return view('pages.articles', [
        'list'=> $list
    ]);
})->name('articles');

Route::get('/article/{index}', function ($index){
    $list=[
        ['title'=>'Pogrammare in JavaScript', 'category'=> 'Coding', 'description'=>'Prima descrizione'],
        ['title'=>'Programmare in php', 'category'=> 'Coding', 'description'=>'Seconda descrizione'],
        ['title'=>'Programmare in Python', 'category'=> 'Coding', 'description'=>'Terza descrizione']
    ];
    if($index<count($list)){
        return view('pages.article',['list'=> $list[$index]]);
    }
    else {
    return 'Error 404 not found';
    };
    
})->name('article');