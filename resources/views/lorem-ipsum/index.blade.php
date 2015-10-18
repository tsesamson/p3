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
		<div>How many paragraphs do you want?</div><br/>

		<div>
		Paragraphs

		<form action="/">
			<input type="hidden" value="{{ csrf_token() }}" name="token"/>
			<input type="text" value=5 name="numOfParagraphs" /> (Max: 50)
			<br/>
			<input type="submit" value="Generate!"/>
		</form>



		@foreach ($paragraphs as $paragraph)
			<p>{{ $paragraph }}</p>
		@endforeach
	</div>
</div>

@stop
