@extends('layouts.app')

@section('content')
    <div class="box">
        <h2 class="subtitle">{{$centro->sigla}} - {{$centro->nombre}}</h2>
        <fieldset disabled>
        <div class="field">
            <label for="coordinador" class="label">Coordinador:</label>
            <input class="input" typte="text" name="coordinador" value="{{$centro->coordinador->nombreCompleto ?? 'No definido'}}" >
        </div>
        <div class="field">
            <label for="horario" class="label">Horario:</label>
            <input class="input" type="text" name="horario" value="{{$centro->horario}}" >
        </div>
        <div class="field">
            <label for="telefono" class="label">Telefono:</label>
            <input class="input" type="text" name="telefono" value="{{$centro->telefono}}" >
        </div>
        </fieldset>
        <br>
        <label class="label" for="">Recolectores:</label>
        <table class="table is-fullwidth">
            <thead>
                <th style="width:30px">ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($centro->recolectores as $recolector)
                <tr>
                    <td>{{$recolector->id}}</td>
                    <td>{{$recolector->nombre}} {{$recolector->apellido}}</td>
                    <td>
                    <div class="buttons">
                        <a class="button is-info is-small" href="{{route('ciudadanos.show',$recolector->id)}}">Ver</a>
                        <form method="POST" action="{{route('centros.recolectores.detach',$centro->id)}}">
                            @csrf
                            <input type="hidden" name="recolector_id" value="{{$recolector->id}}">
                            <button class="button is-danger is-small">Quitar</button>
                        </form>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form method="POST" action="{{route('centros.recolectores.attach',$centro->id)}}">
            @csrf
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Registrar Recolector</label>
                </div>
                <div class="field-body">
                    <div class="field is-grouped">
                        <div class="select">
                            <select name="recolector_id">
                                <option value=""></option>
                                @foreach($ciudadanos as $ciudadano)
                                    <option value="{{$ciudadano->id}}">{{$ciudadano->apellido.", ".$ciudadano->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="control ml-2">
                            <button type="submit" class="button is-link">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <label class="label" for="">Reciclados:</label>
        <table class="table is-fullwidth">
            <thead>
                <th style="width:30px">ID</th>
                <th>Objeto</th>
                <th>Transporte</th>
                <th>Contacto</th>
                <th>Recolección</th>
                <th>Ciudadano</th>
                <th>Recolector</th>
                <th>Acciones</th>
            </thead>
            <tfoot>
                <tr><th><a class="button is-primary is-small" href="{{route('reciclados.create','id='.$centro->id)}}">Nuevo Reciclado</a></th></tr>
            </tfoot>
            <tbody>
                @foreach ($centro->reciclados as $reciclado)
                <tr>
                    <td>{{$reciclado->id}}</td>
                    <td>{{$reciclado->objeto}}</td>
                    <td>{{$reciclado->transporte}}</td>
                    <td><x-date>{{$reciclado->fecha_contacto?? ""}}</x-date></td>
                    <td><x-date>{{$reciclado->fecha_recoleccion?? ""}}</x-date></td>
                    <td>{{$reciclado->ciudadano->nombre_completo}}</td>
                    <td>{{$reciclado->recolector->nombre_completo}}</td>
                    <td>
                        <div class="buttons">
                            <a class="button is-info is-small" href="{{route('reciclados.show',$reciclado->id)}}">Ver</a>
                            <form method="POST" action="{{route('reciclados.destroy',$reciclado->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="button is-danger is-small">Borrar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <x-backbutton />
    </div>
@endsection
