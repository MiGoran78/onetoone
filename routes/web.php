<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


use App\User;
use App\Address;


Route::get('/insert', function(){
    $user = User::findOrFail(1);

    $address = new Address(['name'=>'1234 Houston av NY 11218']);

    $user->address()->save($address);
});

