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

<div class="row center-form">
	<div class="col-md-12">
	
		@if(count($errors) > 0)
		<div class="alert alert-warning bs-alert-old-docs" style="text-align:left;">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		</div>
    @endif
	
		<h2>How many paragraphs do you want?</h2>

		<form method='POST' action='/lorem-ipsum'>
			<input type="hidden" value="{{ csrf_token() }}" name="_token"/>
			<div class="row">
        <div class="col-md-12">
        <input type="text" value="{{ old('numOfParagraphs','5')}}" name="numOfParagraphs" id="numOfParagraphs" /> (Max: 50)
        </div>
			</div>
			<br/>
			<button type="submit" class="btn btn-info btn-lg btn-block">GENERATE PARAGRAPH(S)</button>
		</form>


		@if(isset($paragraphs))
		<div class="hero-unit">
			@foreach ($paragraphs as $paragraph)
				<h4>{{ $paragraph }}</h4>
			@endforeach
		</div>
		@endif
	</div>
</div>

@stop
