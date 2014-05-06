@extends('layouts.master')

@section('content')
	<h1>{{Lang::get('text.titol index')}}</h1>
	 
	<p>{{Lang::get('text.benvingut')}}</p>

	<div class="container list-group">
        {{ HTML::link('incidencies/llista', Lang::get('text.llista'), array('class'=>'list-group-item')) }}
        @if(Auth::check())
            {{ HTML::link('equip/form_equip', Lang::get('text.form equip'), array('class'=>'list-group-item')) }}
            {{ HTML::link('incidencies/nova', Lang::get('text.form incidencia'), array('class'=>'list-group-item')) }}
            {{ HTML::link('incidencies/form_modifica', Lang::get('text.form modifica'), array('class'=>'list-group-item')) }}
        @endif 
    </div>
@stop