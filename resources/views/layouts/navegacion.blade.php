<nav class="navbar navbar-expand-lg navbar-light orange">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"></path>
    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
  </svg>
  <a class="navbar-brand logo" href="{{ action( 'habitacion@inicio' ) }}">HotelPocasPulgas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link negrita animacion-item-nav" href="{{ action( 'habitacion@inicio' ) }}">Inicio<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link negrita animacion-item-nav" href="#">Mascotas<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link negrita animacion-item-nav" href="#">Habitaciónes<span class="sr-only">(current)</span></a>
      </li>

    </ul>
    @if( (Auth::id()) == NULL )
    <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-danger" type="button" href="{{ route('login' )}}">Iniciar Sesión</a>
        <a class="btn btn-sm btn-warning" type="button" href="{{ route('register') }}">Registrar</a>
    </form>
    @else
    <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-sm btn-success my-2" type="button" href="{{ asset('ControladorRutas@revervaciones') }}">Mis Reservaciones</a>
        <a class="btn btn-sm btn-danger" href="{{ action('ControladorRutas@cerrar_sesion') }}">Cerrar Sesión</a>
      </form>
    @endif
  </div>
</nav>