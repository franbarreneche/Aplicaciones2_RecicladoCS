@extends('layouts.app')

@section('content')
<div class="card mb-2">
    <div class="card-content">
      <div class="media">
        <div class="media-left">
          <span class="icon is-large">
            <i class="fas fa-2x fa-address-card"></i>
          </span>
        </div>
        <div class="media-content">
          <p class="title is-4">{{auth()->user()->name}}</p>
          <p class="subtitle is-6">{{auth()->user()->email}}</p>
        </div>
      </div>
      <div class="content">
        Bienvenido! Tu rol es <strong class="has-text-warning">{{auth()->user()->rol ? auth()->user()->rol->nombre : "Sin Rol"}}</strong>
        <br>
        Recuerde lavarse las manos y protegerse del <em class="has-text-info">#COVID19</em>
        <br>
        <time>{{now()->format('d/m/Y')}}</time>
        <time>{{now()->format('h:i')}}hs</time>
      </div>
    </div>
</div>
<div class="box">
    <h2 class="subtitle">Acciones disponibles</h2>
    @if(auth()->user()->isCoordinador())
    @if(auth()->user()->ciudadano && auth()->user()->ciudadano->centro)
    <div>
        <a class="button is-large" href="{{route('centros.show',auth()->user()->ciudadano->centro->id)}}">
            <span class="icon is-medium">
                <i class="fas fa-users"></i>
            </span>
            <span>Ver Mi Centro</span>
        </a>
    </div>
    @else
    <div class="notification is-danger is-light"> Su rol es coordinador, pero usted no es actualmente coordinador de ningun Centro</div>
    @endif
    @else
    <div class="column">
        <a class="button is-large" href="{{route('users.index')}}">
            <span class="icon is-medium">
                <i class="fas fa-user-circle"></i>
            </span>
            <span>Usuarios</span>
        </a>
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
    </div>
    @endif
</div>
@endsection
