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
	Debugbar::addMessage('Special message from', 'Label');

	return 'Just testing';
});
