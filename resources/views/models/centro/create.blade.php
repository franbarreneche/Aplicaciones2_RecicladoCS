@extends('layouts.app')

@section('content')
<div class="box">
    <h2 class="subtitle">Crear Nuevo Centro</h2>
    <form action="{{route('centros.store')}}" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="nombre">Nombre</label>
            <div class="control">
              <input class="input" type="text" name="nombre" placeholder="Centro de Reciclado Smurfit" value="{{old('nombre')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="sigla">Sigla</label>
            <div class="control">
              <input class="input" type="text" name="sigla" maxlength="4" placeholder="ABC" value="{{old('sigla')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="horario">Horario</label>
            <div class="control">
              <input class="input" type="text" name="horario" placeholder="de 10 a 18hs" value="{{old('horario')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="telefono">Telefono</label>
            <div class="control">
              <input class="input" type="text" name="telefono" placeholder="+59 291-4311515" value="{{old('telefono')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="coordinador_id">Coordinador</label>
            <div class="select">
                <select name="coordinador_id">
                    <option value=""></option>
                    @foreach($ciudadanos as $ciudadano)
                        <option value="{{$ciudadano->id}}">{{$ciudadano->nombreCompleto}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="buttons">
            <x-backbutton />
            <button type="submit" class="button is-primary">Crear</button>
        </div>
    </form>
</div>
@endsection
