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

	$paragraphCount = Input::get('paragraphCount');
	$formdata = Input::all();

	if (isset($paragraphCount)) {
		if ($paragraphCount < 1 || $paragraphCount > 7) {
			$paragraphCount = 5;
		}
	} else {
		$paragraphCount = 1;
	}

//	echo Pre::render($formdata);
//	echo Pre::render($paragraphCount);

	$loremIpsumObject = new Badcow\LoremIpsum\Generator();

	$generatedLoremIpsum = $loremIpsumObject->getParagraphs($paragraphCount);

//	echo Pre::render($generatedLoremIpsum);

	$loremIpsumOutput = implode('<p>',$generatedLoremIpsum);
	
    return View::make('loremipsum-results')->with('output',$loremIpsumOutput);

});

Route::get('/randomuser', function() {
	
    return View::make('randomuser');

});

Route::post('/randomuser', function() {
	
    return View::make('randomuser-results');

});

