@extends('layouts.master')

<div><a href="/">&larr; Home</a></div>

@section('title')
	P3: User Generator
@stop

@section('page-title')
	P3: User Generator
@stop

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>How many users?</h2>

	@if(count($errors) > 0)
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

		<form method='POST' action='/user-generator'>
			<input type="hidden" value="{{ csrf_token() }}" name="_token"/>
			<input type="text" value="{{ old('numOfUsers') }}" name="numOfUsers" id="numOfUsers" /> (Max: 50)
			<br/><br/>
			<h3>Options</h3>
			<input type="checkbox" name="addAddress" id="addAddress"> Add Address
			<input type="checkbox" name="addProfile" id="addProfile"> Add Profile
			<br/><br/>
			<input type="submit" value="Generate!"/>
		</form>

		@if(isset($users))
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
		@endif
	</div>
</div>

@stop
