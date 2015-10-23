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

<div class="row center-form">
	<div class="col-md-12">
		@if(isset($password))
			<div class="hero-unit"><h1 class="bs-callout-info">{{ $password }}</h1></div>
		@endif

	@if(count($errors) > 0)
    <div class="alert alert-warning bs-alert-old-docs" style="text-align:left;">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		</div>
	@endif

		<h2>How many words?</h2>

		<form method='POST' action='/xkcd-generator'>
			<input type="hidden" value="{{ csrf_token() }}" name="_token"/>
			<input type="text" value="{{ old('numOfWords','4') }}" name="numOfWords" id="numOfWords" /> (Max:7)
			<br/>
			
      <div class="panel panel-default" style="margin-top: 25px;">
          <div class="panel-heading">
            <h2 class="panel-title">Options</h2>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-6">
                <div class="checkbox">
                  <label><input type="checkbox" name="addNum"> Add a random number (0-9)</label>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="checkbox">
                  <label><input type="checkbox" name="addSym"> Add a random special character</label>
                </div>
              </div>

            </div>
          </div>
        </div>

			<br/>
			<button type="submit" class="btn btn-info btn-lg btn-block">GENERATE PASSWORD</button>
		</form>

	</div>
</div>

@stop
