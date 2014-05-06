@extends('layouts.master')


@section('content')

        <h2 class="form-signin-heading">{{Lang::get('text.llista')}}</h2>
        <br>

        <table class="table">
            <tr>
                <th>{{Lang::get('text.nom')}}</th>
                <th>{{Lang::get('text.lloc')}}</th>
                <th>{{Lang::get('text.descripcio')}}</th>
                <th>{{Lang::get('text.comentari')}}</th>
                <th>{{Lang::get('text.data')}}</th>
            </tr>
            @foreach($inNoResoltes->all() as $incidencia)

                <tr class="danger">

                    <td>{{$incidencia->nom}}</td>
                    <td>{{$incidencia->lloc}}</td>
                    <td>{{$incidencia->descripcio}}</td>
                    <td>{{$incidencia->comentari}}</td>
                    <td>{{$incidencia->created_at}}</td>

                </tr>  

            @endforeach
            @foreach($inResoltes->all() as $incidencia)

                <tr class="success">

                    <td>{{$incidencia->nom}}</td>
                    <td>{{$incidencia->lloc}}</td>
                    <td>{{$incidencia->descripcio}}</td>
                    <td>{{$incidencia->comentari}}</td>
                    <td>{{$incidencia->created_at}}</td>

                </tr>  

            @endforeach
        </table>
@stop