@extends('layouts.master')


@section('content')
	{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
	    <h2 class="form-signin-heading">{{Lang::get('text.titol login')}}</h2>
	 	<br>
	    {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>Lang::get('text.email'))) }}
	    <br>
	    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>Lang::get('text.contrasenya'))) }}
	 	<br>
	    {{ Form::submit(Lang::get('text.titol login'), array('class'=>'btn btn-lg btn-primary btn-block'))}}
	{{ Form::close() }}
@stop