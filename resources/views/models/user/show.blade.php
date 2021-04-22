@extends('layouts.app')

@section('content')
<div class="box">
    <h2 class="subtitle">{{$user->name}}:</h2>
    <table class="table is-fullwidth">
        <thead>
            <th>Propiedad</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <tr>
                <td><strong>ID</strong></td>
                <td>{{$user->id}}</td>
            </tr>
            <tr>
                <td><strong>Nombre de usuario</strong></td>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td><strong>Rol</strong></td>
                <td>{{$user->rol ? $user->rol->nombre : " - "}}</td>
            </tr>
            <tr>
                <td><strong>Ciudadano</strong></td>
                <td>{{$user->ciudadano ? $user->ciudadano->nombre_completo : " - "}}</td>
            </tr>
        </tbody>
    </table>
    <x-backbutton />
</div>
@endsection
