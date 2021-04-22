@extends('layouts.app')

@section('content')
    <div class="box">
        <h2 class="subtitle">Lista de Ususarios:</h2>
        <table class="table is-fullwidth">
            <thead>
                <th style="width:30px">ID</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Rol</th>
                <th>¿Ciudadano?</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><span class="tag is-warning is-light">{{$user->rol ? $user->rol->nombre : " - "}}</span></td>
                    <td><span class="tag is-danger is-light">{{$user->ciudadano ? "Si" : "No"}}</td></span>
                    <td>
                        <div class="buttons">
                            <a class="button is-info is-small" href="{{route('users.show',$user->id)}}">Ver</a>
                            <form method="POST" action="{{route('users.destroy',$user->id)}}">
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
        <div class="has-text-centered">{{$users->links()}}</div>
        <div class="buttons">
            <x-backbutton />
            <a class="button is-primary" href="{{route('users.create')}}">Crear Nuevo</a>
        </div>
    </div>
@endsection
