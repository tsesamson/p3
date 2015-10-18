<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
    //return view('welcome');
});

//Routes for Lorem Ipsum Generator
Route::get('/lorem-ipsum', 'LoremIpsumController@getIndex');
Route::post('/lorem-ipsum', 'LoremIpsumController@postIndex');

//Routes for Random User Generator
Route::get('/user-generator', 'UserGeneratorController@getIndex');
Route::post('/user-generator', 'UserGeneratorController@postIndex');

//Routes for XKCD Password Genereator
Route::get('/xkcd-generator', 'XkcdGeneratorController@getIndex');
Route::post('/xkcd-generator', 'XkcdGeneratorController@postIndex');

Route::get('/test', function() {

	$data = Array('foo' => 'bar');
	Debugbar::info($data);
	Debugbar::error('Oh No!');
	Debugbar::warning('Watch out!');
	Debugbar::addMessage('Special message from', 'abel');


	$generator = new LIGenerator();
	//$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(5);

	return implode('<p>', $paragraphs);
});

Route::get('/random', function() {

	$faker = FakerGenerator::create();

	$output = $faker->name . "<br/><br/>";
	$output .= $faker->address . "<br/><br/>";
	$output .= $faker->text . "<br/><br/>";

	return $output;

});
