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
    return view('home', [
        'seo_title' => 'Welcome to Splice',
        'seo_description' => "Welcome to Splice"
        ]);
});

Route::prefix('battle')->name('battle.')->group(function () {
    Route::get('/', function () {
        return view('battle', [
            'seo_title' => 'battle',
            'seo_description' => 'Battle'
        ]);
    });
    
    //Route::get('/{brewery}', 'BreweryController@getBrewery');
});
