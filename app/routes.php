<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	
    return View::make('index');

});

Route::get('/loremipsum', function() {
	
    return View::make('loremipsum');

});

Route::post('/loremipsum', function() {
	
    return View::make('loremipsum-results');

});

Route::get('/randomuser', function() {
	
    return View::make('randomuser');

});

Route::post('/randomuser', function() {
	
    return View::make('randomuser-results');

});

