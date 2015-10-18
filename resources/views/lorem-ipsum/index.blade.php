@extends('layouts.master')

@section('title')
	P3: Lorem Ipsum Generator
@stop

@section('page-title')
	P3: Lorem Ipsum Generator
@stop

@section('content')

<div class="row">
	<div class="col-md-12">
		@foreach ($paragraphs as $paragraph)
			<p>{{ $paragraph }}</p>
		@endforeach
	</div>
</div>

@stop
