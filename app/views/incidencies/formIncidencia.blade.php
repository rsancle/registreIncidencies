@extends('layouts.master')


@section('content')
    {{ Form::open(array('url'=>'incidencies/create', 'class'=>'form-signin')) }}
        <h2 class="form-signin-heading">{{Lang::get('text.form incidencia')}}</h2>
        <br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        {{ Form::select('id_equip', $equips , Input::old('equips'), array('class'=>'form-control')) }}
        <br>
        {{ Form::text('descripcio', null, array('class'=>'form-control', 'placeholder'=>Lang::get('text.descripcio'))) }}
            <br>
        {{ Form::submit(Lang::get('text.guardar'), array('class'=>'btn btn-lg btn-primary btn-block'))}}
    {{ Form::close() }}
@stop