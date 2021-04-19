@extends('layouts.app')

@section('content')
<div class="box">
    <h2 class="subtitle">{{$ciudadano->nombre_completo}}:</h2>
    <table class="table is-fullwidth">
        <thead>
            <th>Propiedad</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <tr>
                <td><strong>ID</strong></td>
                <td>{{$ciudadano->id}}</td>
            </tr>
            <tr>
                <td><strong>DNI</strong></td>
                <td>{{$ciudadano->dni}}</td>
            </tr>
            <tr>
                <td><strong>Apellido</strong></td>
                <td>{{$ciudadano->apellido}}</td>
            </tr>
            <tr>
                <td><strong>Nombre</strong></td>
                <td>{{$ciudadano->nombre}}</td>
            </tr>
            <tr>
                <td><strong>Domiclio</strong></td>
                <td>{{$ciudadano->domicilio}}</td>
            </tr>
            <tr>
                <td><strong>Telefono</strong></td>
                <td>{{$ciudadano->telefono}}</td>
            </tr>
        </tbody>
    </table>
    <x-backbutton />
</div>
@endsection
