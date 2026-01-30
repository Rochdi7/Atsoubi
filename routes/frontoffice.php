<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontoffice Routes
|--------------------------------------------------------------------------
*/

Route::name('frontoffice.')->group(function () {

    // temporary front page
    Route::get('/', function () {
        return view('frontoffice.home');
    })->name('home');

});
