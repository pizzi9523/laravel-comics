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
    
    return view('home');
})->name('home');


/*COMICS ROUTES*/
Route::get('/comics', function () {
    $comics = config('db.comics');

    return view('comics.index', compact('comics'));
})->name('comics');


Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');

    if(is_numeric($id) && $id >= 0){
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    }
    else{
        abort(404);
    }

})->name('comic');
/* /COMICS ROUTES*/


Route::get('/movies', function () {
    
    return view('movies');
})->name('movies');


Route::get('/tv', function () {
    
    return view('tv');
})->name('tv');


Route::get('/games', function () {
    
    return view('games');
})->name('games');


Route::get('/collectibles', function () {
    
    return view('collectibles');
})->name('collectibles');


Route::get('/video', function () {
    
    return view('video');
})->name('video');


Route::get('/fans', function () {
    
    return view('fans');
})->name('fans');


Route::get('/news', function () {
    
    return view('news');
})->name('news');


Route::get('/shop', function () {
    
    return view('shop');
})->name('shop');


/*
Route::get('/oop', function(){

    class Person {
        public $name;
        public $lastname;
    }

    $giuseppe= new Person();
    $giuseppe-> name = "Giuseppe";
    $giuseppe-> lastname = "Pizzitola";


    $gino= new Person();
    $gino-> name = "gino";
    $gino-> lastname = "capritto";


    // ddd($giuseppe, $gino);

    class Car  {
        public $make;
        public $model;
        public $price;


        public function setPrice ( int $value ){
            $this->price = $value;
        }


        public function getPrice (){
            return $this->price;
        }

    }

    $tesla = new Car();
    $tesla-> make = 'Tesla';
    $tesla->model = 'Model X';
    $tesla->setPrice(180);

    $tesla_price = $tesla->getPrice();

    dd($tesla, $tesla_price);

}); 
*/