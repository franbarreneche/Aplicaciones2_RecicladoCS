@extends('layouts.app')

@section('content')
    <div class="box">
        <h2 class="subtitle">Lista de Centros:</h2>
        <table class="table is-fullwidth">
            <thead>
                <th style="width:30px">Sigla</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($centros as $centro)
                <tr>
                    <td>{{$centro->sigla}}</td>
                    <td>{{$centro->nombre}}</td>
                    <td><a class="button is-info is-small" href="{{route('centros.show',$centro->id)}}">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <x-backbutton />
    </div>
@endsection
