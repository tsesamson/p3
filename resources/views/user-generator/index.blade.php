@extends('layouts.master')

@section('title')
	P3: User Generator
@stop

@section('page-title')
	P3: User Generator
@stop

@section('content')

<div class="row">
	<div class="col-md-12">
		<p>{{ $faker->name }}</p>
		<p>{{ $faker->address }}</p>
		<p>{{ $faker->text }}</p>
	</div>
</div>

@stop
