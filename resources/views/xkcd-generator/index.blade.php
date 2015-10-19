@extends('layouts.master')

@section('title')
	P3: XKCD Password Generator
@stop

@section('page-title')
	P3: XKCD Password Generator
@stop

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Random Password</h1>
		<form action="/">
			<input type="submit" value="GENERATE PASSWORD"/>
		</form>
	</div>
</div>

@stop
