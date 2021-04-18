@extends('layouts.app')

@section('content')
<div class="box">
    <h2 class="subtitle">Acciones disponibles</h2>
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
      <button class="button is-large">
        <span class="icon is-medium">
            <i class="fas fa-trash"></i>
        </span>
        <span>Reciclados</span>
      </button>
    </div>
</div>
@endsection
