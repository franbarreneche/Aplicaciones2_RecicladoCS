@extends('layouts.app')

@section('content')
    <div class="box">
        <h2 class="subtitle">Reciclado N° - {{$reciclado->id}}</h2>
        <fieldset>
            <div class="field">
                <label for="objeto" class="label">Objeto:</label>
                <input class="input" type="text" name="objeto" value="{{$reciclado->objeto}}" >
            </div>
            <div class="field">
                <label for="transporte" class="label">Transporte:</label>
                <input class="input" type="text" name="transporte" value="{{$reciclado->transporte}}" >
            </div>
            <div class="field">
                <label for="fecha_contacto" class="label">Fecha de Contacto:</label>
                <input class="input" type="date" name="fecha_contacto" value="{{$reciclado->fecha_contacto}}" >
            </div>
            <div class="field">
                <label for="fecha_recoleccion" class="label">Fecha de Recolección:</label>
                <input class="input" type="date" name="fecha_recoleccion" value="{{$reciclado->fecha_recoleccion}}" >
            </div>
            <div class="field">
                <label for="ciudadano" class="label">Ciudadano:</label>
                <input class="input" type="text" name="ciudadano" value="{{$reciclado->ciudadano->nombre_completo}}" >
            </div>
            <div class="field">
                <label for="recolector" class="label">Recolector:</label>
                <input class="input" type="text" name="fecha_recoleccion" value="{{$reciclado->recolector->nombre_completo}}" >
            </div>
            <div class="field">
                <label for="centro" class="label">Centro de Reciclado:</label>
                <input class="input" type="text" name="centro" value="{{$reciclado->centro->sigla}}  - {{$reciclado->centro->nombre}}" >
            </div>
        </fieldset>
        <br>
        <x-backbutton />
    </div>
@endsection
