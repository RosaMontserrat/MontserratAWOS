@extends('layouts.master')

@section('contenido')
<div class="container">
    <div class="container">
        <div class="card-deck" style="margin: 2%;">
        @foreach($habitaciones as $habitacion)
            <div class="card fondo-blanco">
                <div class="card ext-center fondo-naranja-fuerte text-white" style="margin: 20px;">
                    <img src="{{ $habitacion->imagen }}" height="225px" alt="imagen extra">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $habitacion->rango }}</h5>
                        <p class="card-text">{{ $habitacion->descripcion }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/reservaciones" class="btn btn-warning">Reserva Ahora por ${{ $habitacion->costo }}</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@stop