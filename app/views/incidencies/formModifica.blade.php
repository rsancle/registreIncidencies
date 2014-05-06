@extends('layouts.master')


@section('content')
    {{ Form::open(array('url'=>'incidencies/modifica', 'class'=>'form-signin')) }}
        <h2 class="form-signin-heading">{{Lang::get('text.form modifica')}}</h2>
        <br>
     
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        {{ Form::select('id', $incidencies , Input::old('incidencies'), array('class'=>'form-control')) }}
        <br>
        {{ Form::select('arreglada', array(0=> Lang::get('text.espatllat'), 1=>Lang::get('text.arreglat')), null,array('class'=>'form-control')) }}
        <br>
        {{ Form::textarea('comentari', null, array('class'=>'form-control', 'placeholder'=>Lang::get('text.comentari'))) }}
        <br>
            
        {{ Form::submit(Lang::get('text.guardar'), array('class'=>'btn btn-lg btn-primary btn-block'))}}
    {{ Form::close() }}
@stop