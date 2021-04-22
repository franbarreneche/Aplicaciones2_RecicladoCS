@extends('layouts.app')

@section('content')
<div class="box">
    <h2 class="subtitle">Crear Nuevo Usuario</h2>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="name">Nombre de Usuario</label>
            <div class="control">
              <input class="input" type="text" name="name" placeholder="Ej: Juan" value="{{old('name')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
              <input class="input" type="email" name="email" placeholder="juan@gmail.com" value="{{old('email')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
              <input class="input" type="password" name="password" placeholder="***********" value="{{old('password')}}">
            </div>
        </div>
        <div class="field">
            <label for="rol_id" class="label">Rol</label>
            <div class="select">
                <select name="rol_id" id="rol">
                    @foreach($roles as $rol)
                        <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="field" id="panelCiudadano">
            <label for="ciudadano_id" class="label">Ciudadano</label>
            <div class="select"                >
                <select name="ciudadano_id" id="ciudadano">
                    <option></option>
                    @foreach($ciudadanos as $ciudadano)
                        <option value="{{$ciudadano->id}}">{{$ciudadano->apellido}}, {{$ciudadano->nombre}}</option>
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
<script>
    let panel = document.getElementById('panelCiudadano');
    let selectRol = document.getElementById('rol');
    let selectCiudadano = document.getElementById('ciudadano');
    panel.hidden = true;
    selectRol.onchange = function(){
        if(this.value == 3)
         panel.hidden = false;
        else {
            panel.hidden = true;
            selectCiudadano.value = null;
        }
    }
</script>
@endsection
