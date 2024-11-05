<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        "name" => "Batuhan",
        "email" => "batu@site.com",
    ];
    ddd($person);
    return view('welcome');
});

Route::view('/about','about');

Route::get('/product/{id}', function(string $id){
    return "Product ID=$id";
});
Route::get('/product/{category?}', function(string $category = null){
    return "Product for category=$category";
});


