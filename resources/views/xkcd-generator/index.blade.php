@extends('layouts.master')

@section('title')
	P3: XKCD Generator
@stop

@section('page-title')
	P3: XKCD Generator
@stop

@section('home-link')
	<a href="/">&larr; Home</a>
@stop

@section('content')

<div class="row">
	<div class="col-md-12">
		@if(isset($password))
			<h2>{{ $password }}</h2>
		@endif

	@if(count($errors) > 0)
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

		<form method='POST' action='/xkcd-generator'>
			<input type="hidden" value="{{ csrf_token() }}" name="_token"/>
			<h3>Options</h3>
			<input type="checkbox" name="addNum" id="addNum"> Add a random number (0-9)
			<input type="checkbox" name="addSym" id="addSym"> Add a random special character
			<br/><br/>
			<input type="submit" value="Generate!"/>
		</form>

	</div>
</div>

@stop
