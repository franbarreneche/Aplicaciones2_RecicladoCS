@extends('layouts.app')

@section('content')
    <div class="box">
        <h2 class="subtitle">Nuevo Reciclado </h2>
        <form action="{{route('reciclados.store')}}" method="POST">
            @csrf
            <div class="field">
                <label class="label" for="centro_id">Centro</label>
                <input class="input" type="text" value="({{$centro->sigla}}) - {{$centro->nombre}}" disabled>
                <input type="hidden" name="centro_id" value="{{$centro->id}}" />
            </div>
            <div class="field">
                <label for="objeto" class="label">Objeto:</label>
                <div class="select">
                    <select name="objeto">
                        <option value=""></option>
                        @foreach(App\Models\Reciclado::OBJETOS as $objeto)
                            <option value="{{$objeto}}">{{$objeto}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="field">
                <label for="transporte" class="label">Transporte:</label>
                <div class="select">
                    <select name="transporte">
                        <option value=""></option>
                        @foreach(App\Models\Reciclado::TRANSPORTES as $transporte)
                            <option value="{{$transporte}}">{{$transporte}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="field">
                <label for="fecha_contacto" class="label">Fecha de Contacto:</label>
                <input class="input" type="date" name="fecha_contacto" value="{{old('fecha_contacto')}}" >
            </div>
            <div class="field">
                <label for="fecha_recoleccion" class="label">Fecha de Recolección:</label>
                <input class="input" type="date" name="fecha_recoleccion" value="{{old('fecha_recoleccion')}}" >
            </div>
            <div class="field">
                <label for="ciudadano" class="label">Ciudadano:</label>
                <div class="select">
                    <select name="ciudadano_id">
                        <option value=""></option>
                        @foreach($ciudadanos as $ciudadano)
                            <option value="{{$ciudadano->id}}">{{$ciudadano->nombre_completo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="field">
                <label for="recolector" class="label">Recolector:</label>
                <div class="select">
                    <select name="recolector_id">
                        <option value=""></option>
                        @foreach($centro->recolectores as $ciudadano)
                            <option value="{{$ciudadano->id}}">{{$ciudadano->nombre_completo}}</option>
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
