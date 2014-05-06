@extends('layouts.master')


@section('content')
    {{ Form::open(array('url'=>'users/create', 'class'=>'form-signin')) }}
        <h2 class="form-signin-heading">{{Lang::get('text.formregistre')}}</h2><br>
     
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
     
        {{ Form::text('nom', null, array('class'=>'form-control', 'placeholder'=>Lang::get('text.nom'))) }}<br>
        {{ Form::text('cognom', null, array('class'=>'form-control', 'placeholder'=>Lang::get('text.cognom'))) }}<br>
        {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>Lang::get('text.email'))) }}<br>
        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>Lang::get('text.contrasenya'))) }}<br>
        {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>Lang::get('text.confirmar contrasenya'))) }}<br>
     
        {{ Form::submit(Lang::get('text.registrar-se'), array('class'=>'btn btn-lg btn-primary btn-block'))}}
    {{ Form::close() }}
@stop