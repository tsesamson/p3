@extends('layouts.master')

@section('title')
	P3: User Generator
@stop

@section('page-title')
	P3: User Generator
@stop

@section('home-link')
	<a href="/">&larr; Home</a>
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
	
		<h2>How many users?</h2>

		<form method='POST' action='/user-generator'>
			<input type="hidden" value="{{ csrf_token() }}" name="_token"/>
			<input type="text" value="{{ old('numOfUsers', '1') }}" name="numOfUsers" id="numOfUsers" /> (Max: 50)
			<br/>
			
      <div class="panel panel-default" style="margin-top: 25px;">
          <div class="panel-heading">
            <h2 class="panel-title">Options</h2>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-6">
                <div class="checkbox">
                  <label><input type="checkbox" name="addAddress" id="addAddress"> Add Address</label>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="checkbox">
                  <label><input type="checkbox" name="addProfile" id="addProfile"> Add Profile</label>
                </div>
              </div>

            </div>
          </div>
        </div>
       
			<br/>
			<button type="submit" class="btn btn-info btn-lg btn-block" style="margin-top:25px;">GENERATE USER(S)</button>
		</form>
  
    
		@if(isset($users))
		<div class="hero-unit">
			@foreach($users as $user)
			<h4>{{ $user->name }}<br/>

			  @if(Input::get('addAddress'))
			    {{ $user->address }}<br/>
			  @endif

			  @if(Input::get('addProfile'))
			    {{ $user->text }}
			  @endif

			</h4>

			@endforeach
    </div>
		@endif
		
	</div>
</div>

@stop
