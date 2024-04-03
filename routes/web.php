<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//test routes
Route::get('/testTemplate',function (){
   return view('panel.layout.app');
});
