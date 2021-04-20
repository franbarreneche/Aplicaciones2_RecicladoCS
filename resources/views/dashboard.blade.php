@extends('layouts.app')

@section('content')
<div class="box">
    <h1 class="title">Bienvenido {{auth()->user()->name}}. Tu rol es {{auth()->user()->rol->nombre}}</h1>
    <h2 class="subtitle">Acciones disponibles</h2>
    @if(auth()->user()->isCoordinador())
    aca va para que vea el coordinador
    @else
    <div class="column">
    <a class="button is-large" href="{{route('ciudadanos.index')}}">
        <span class="icon is-medium">
            <i class="fas fa-users"></i>
        </span>
        <span>Ciudadanos</span>
    </a>
      <a class="button is-large" href="{{route('centros.index')}}">
        <span class="icon is-medium">
            <i class="fas fa-industry"></i>
        </span>
        <span>Centros</span>
    </a>
    @endif
</div>
@endsection
