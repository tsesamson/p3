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
		<h2>Lorem Ipsum Generator</h2>
		<h3>This tool is used to generate Lorem Ipsum paragraphs as placeholder for your applications. You can define the number of paragraphs up to the maximum of 50.</h3>
		<div><a href="/lorem-ipsum">Generate some text...</a></div>
	</div>
	<div class="col-md-12">
		<h2>Random User Generator</h2>
		<h3>Short description</h3>
		<div>Create random user data for your applications. Like Lorem Ipsum, but for people.</div>
		<div><a href="/user-generator">Generate some users...</a></div>
	</div>
	<div class="col-md-12">
		<h2>XKCD Password Generator</h2>
		<h3>Short description</h3>
		<div>Create XKCD Password for your application. Passwords that people can remember.</div>
		<div><a href="/xkcd-generator">Generate some passwords...</a></div>
	</div>
</div>

@stop
