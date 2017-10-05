@extends('layouts.app')
@section('content')
	<a href="/dashboard" class="btn btn-primary">Go Back</a>
	<h1>Edit Listing</h1>
	{!! Form::open(['action' => ['ListingsController@update',$listing->id], 'method' => 'POST']) !!}
 		{{ Form::bsText('name',$listing->name) }}
		{{ Form::bsText('website',$listing->website) }}
		{{ Form::bsText('email',$listing->email) }}
		{{ Form::bsText('phone',$listing->phone) }}
		{{ Form::bsText('address',$listing->address) }}
		{{ Form::bsTextArea('bio',$listing->bio) }}
		{{ Form::hidden('_method', 'PUT') }}
		{{ Form::bsSubmit('submit',['class'=>'btn btn-primary']) }}
	{!! Form::close() !!}
		
@endsection