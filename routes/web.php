<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
});

Route::get('/login', function () {
    return view('public.login');
});

Route::get('/register', function (){
    return view('public.cadastro');
});

Route::get('/logoff', function (){
    return view('/');
});

Route::resource('/user', 'UserController');
