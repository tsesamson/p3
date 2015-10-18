@extends('layouts.master')

@section('title')
	P3: Developer's Best Friend
@stop

@section('page-title')
	P3: Developer's Best Friend
@stop

@section('content')

<div class="row">
	<div class="col-md-12">
		<h4>Lorem Ipsum Generator</h4>
		<div>Short description</div>
		<div>Create random filler text for your applications.</div>
		<div><a href="/lorem-ipsum">Generate some text...</a></div>
	</div>
	<div class="col-md-12">
		<h4>Random User Generator</h4>
		<div>Short description</div>
		<div>Create random user data for your applications. Like Lorem Ipsum, but for people.</div>
		<div><a href="/user-generator">Generate some users...</a></div>
	</div>
	<div class="col-md-12">
		<h4>XKCD Password Generator</h4>
		<div>Short description</div>
		<div>Create XKCD Password for your application. Passwords that people can remember.</div>
		<div><a href="/xkcd">Generate some passwords...</a></div>
	</div>
</div>

@stop
