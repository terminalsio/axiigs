<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('landing');
});

Route::get('/gs', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/gs/callback', function () {
    $user = Socialite::driver('google')->user();

    dd($user);
});
