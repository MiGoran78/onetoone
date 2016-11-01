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


Route::get('/update', function(){

//    $address = Address::where('user_id', 1)->first();
//    $address = Address::where('user_id', '=', 1)->first();
    $address = Address::whereUserId(1)->first();

    $address->name = "Update new address";
    $address->save();

});



Route::get('/read', function(){
    $user = User::findOrFail(1);
    echo $user->address->name;
});



Route::get('/delete', function(){
    $user = User::findOrFail(1);
    $user->address()->delete();
    return "done";
});
