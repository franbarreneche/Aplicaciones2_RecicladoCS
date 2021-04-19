@extends('layouts.app')

@section('content')
<div class="box">
    <h2 class="subtitle">Crear Nuevo Ciudadano</h2>
    <form action="{{route('ciudadanos.store')}}" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="apellido">Apellido</label>
            <div class="control">
              <input class="input" type="text" name="apellido" placeholder="Ej: Perez" value="{{old('apellido')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="nombre">Nombre</label>
            <div class="control">
              <input class="input" type="text" name="nombre" placeholder="Ej: Juan" value="{{old('nombre')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="dni">DNI</label>
            <div class="control">
              <input class="input" type="number" name="dni" placeholder="35019385" value="{{old('dni')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="domicilio">Domicilio</label>
            <div class="control">
              <input class="input" type="text" name="domicilio" placeholder="Av. Alsina 1510" value="{{old('domicilio')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="telefono">Telefono</label>
            <div class="control">
              <input class="input" type="text" name="telefono" placeholder="+59 291-4311515" value="{{old('telefono')}}">
            </div>
        </div>

        <div class="buttons">
            <x-backbutton />
            <button type="submit" class="button is-primary">Crear</button>
        </div>
    </form>
</div>
@endsection
