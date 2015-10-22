@extends('layouts.master')

@section('title')
	P3: Lorem Ipsum Generator
@stop

@section('page-title')
	P3: Lorem Ipsum Generator
@stop

@section('home-link')
	<div><a href="/">&larr; Home</a></div>
@stop

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>How many paragraphs do you want?</h2>

	@if(count($errors) > 0)
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

		<form method='POST' action='/lorem-ipsum'>
			<input type="hidden" value="{{ csrf_token() }}" name="_token"/>
			<input type="text" value="{{ old('numOfParagraphs','5')}}" name="numOfParagraphs" id="numOfParagraphs" /> (Max: 50)
			<br/><br/>
			<input type="submit" value="Generate!"/>
		</form>


		@if(isset($paragraphs))
			@foreach ($paragraphs as $paragraph)
				<h4>{{ $paragraph }}</h4>
			@endforeach
		@endif
	</div>
</div>

@stop
