<!DOCTYPE html>
<html lang="es">
@section('header')
    @include('layouts.head')
    <body class="fondo">
    <header>
        @include('layouts.navegacion')
    </header>
@show
@yield('contenido')

@show   
@section('footer')
    @include('layouts.footer')
@show 
</body>
</html>