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
                    <td>
                        <div class="buttons">
                            <a class="button is-info is-small" href="{{route('centros.show',$centro->id)}}">Ver</a>
                            <form method="POST" action="{{route('centros.destroy',$centro->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="button is-danger is-small">Borrar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="has-text-centered">{{$centros->links()}}</div>
        <div class="buttons">
            <x-backbutton />
            <a class="button is-primary" href="{{route('centros.create')}}">Crear Nuevo</a>
        </div>
    </div>
@endsection
