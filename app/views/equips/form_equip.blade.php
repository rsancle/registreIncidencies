@extends('layouts.master')


@section('content')
    {{ Form::open(array('url'=>'equip/create', 'class'=>'form-signin')) }}
        <h2 class="form-signin-heading">{{Lang::get('text.form equip')}}</h2>
        <br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        {{ Form::text('nom', null, array('class'=>'form-control', 'placeholder'=>Lang::get('text.nom'))) }}
        <br>
        {{ Form::text('lloc', null, array('class'=>'form-control', 'placeholder'=>Lang::get('text.lloc'))) }}
            <br>
        {{ Form::submit(Lang::get('text.guardar'), array('class'=>'btn btn-lg btn-primary btn-block'))}}
    {{ Form::close() }}
@stop