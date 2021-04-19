@extends('layouts.app')

@section('content')
    <div class="box">
        <h2 class="subtitle">Lista de Ciudadanos:</h2>
        <table class="table is-fullwidth">
            <thead>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Domicilio</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($ciudadanos as $ciudadano)
                <tr>
                    <td>{{$ciudadano->dni}}</td>
                    <td>{{$ciudadano->nombre_completo}}</td>
                    <td>{{$ciudadano->domicilio}}</td>
                    <td>{{$ciudadano->telefono}}</td>
                    <td>
                        <div class="buttons">
                            <a class="button is-info is-small" href="{{route('ciudadanos.show',$ciudadano->id)}}">Ver</a>
                            <form method="POST" action="{{route('ciudadanos.destroy',$ciudadano->id)}}">
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
        <div class="has-text-centered">{{$ciudadanos->links()}}</div>
        <div class="buttons">
            <x-backbutton />
            <a class="button is-primary" href="{{route('ciudadanos.create')}}">Crear Nuevo</a>
        </div>
    </div>
@endsection
