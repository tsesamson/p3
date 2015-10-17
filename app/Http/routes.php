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
    return view('welcome');
});

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
