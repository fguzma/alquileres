<html>
  <head lang="en">
    <meta charset="utf-8">
    <meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>
      Alquileres Santana<!--Martha Varela--> - Administracion
    </title>
    {!!Html::style("css/cssF/vendor/bootstrap/css/bootstrap.min.css")!!}
    {!!Html::style("css/cssF/vendor/font-awesome/css/font-awesome.min.css")!!}
    {!!Html::style("css/cssF/css/sb-admin.css")!!}
	<link href="/img/logosantana.jpg" type="image/x-icon" rel="shortcut icon" />

    </head>
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">Alquileres Santana <!--Martha Varela--></a>
      <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon">"</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordin">
          <li class="nav-item active" data-placement="right" data-toggle="tooltip" title="Dashboard">
            <a class="nav-link" href="{!!URL::to('/principal')!!}">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text" >
                Dashboard
              </span>
            </a>
          </li>
          <li class="nav-item" data-placement="right" data-toggle="tooltip" title="Cliente">
            <a class="nav-link nav-link-collapse collapsed" data-parent="#exampleAccordin" data-toggle="collapse" href="#collapseCliente">
              <i class="fa fa-user"></i>
              <span class="nav-link-text">
                Cliente
              </span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseCliente">
              <li>
                {!!link_to_route('cliente.create', $title = 'Agregar Cliente')!!}
              </li>
              <li >
                {!!link_to_route('cliente.index', $title = 'Ver Cliente')!!}
              </li>
            </ul>
          </li>
          <li class="nav-item" data-placement="right" data-toggle="tooltip" title="Personal">
            <a class="nav-link nav-link-collapse collapsed" data-parent="#exampleAccordin" data-toggle="collapse" href="#collapsePersonal">
              <i class="fa fa-users"></i>
              <span class="nav-link-text">
                Personal
              </span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapsePersonal">
              <li >
                {!!link_to_route('personal.create', $title = 'Agregar Personal')!!}
              </li>
              <li >
                {!!link_to_route('personal.index', $title = 'Ver Personal')!!}
              </li>
            </ul>
          </li>
          <!--<li class="nav-item" data-placement="right" data-toggle="tooltip" title="Vetado">
            <a class="nav-link nav-link-collapse collapsed" data-parent="#exampleAccordin" data-toggle="collapse" href="#collapseVetado">
              <i class="fa fa-exclamation-triangle"></i>
              <span class="nav-link-text">
                Vetado
              </span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseVetado">
              <li href="">
                <a>Agregar Vetado</a>
              </li>
              <li href="">
                <a>Ver Vetado</a>
              </li>
            </ul>
          </li>-->
          <li class="nav-item" data-placement="right" data-toggle="tooltip" title="Servicio">
            <a class="nav-link nav-link-collapse collapsed" data-parent="#exampleAccordin" data-toggle="collapse" href="#collapseServicio">
              <i class="fa fa-newspaper-o"></i>
              <span class="nav-link-text">
                Servicio
              </span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseServicio">
              <li href="">
                {!!link_to_route('servicio.create', $title = 'Agregar Servicio')!!}
              </li>
              <li href="">
                {!!link_to_route('servicio.index', $title = 'Ver Servicio')!!}
              </li>
            </ul>
          </li>
          <li class="nav-item" data-placement="right" data-toggle="tooltip" title="Inventario">
            <a class="nav-link nav-link-collapse collapsed" data-parent="#exampleAccordin" data-toggle="collapse" href="#collapseInventario">
              <i class="fa fa-newspaper-o"></i>
              <span class="nav-link-text">
                Inventario
              </span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseInventario">
              <li href="">
                {!!link_to_route('inventario.create', $title = 'Agregar Inventario')!!}
              </li>
              <li href="">
                {!!link_to_route('inventario.index', $title = 'Ver Inventario')!!}
              </li>
            </ul>
          </li>
          <li class="nav-item" data-placement="right" data-toggle="tooltip" title="Reservacion">
            <a class="nav-link nav-link-collapse collapsed" data-parent="#exampleAccordin" data-toggle="collapse" href="#collapseReservacion">
              <i class="fa fa-calendar"></i>
              <span class="nav-link-text">
                Reservacion
              </span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseReservacion">
              <li href="">
                {!!link_to_route('reservacion.index', $title = 'Agregar Reservacion')!!}
              </li>
              <li href="">
                {!!link_to_route('reserva.index', $title = 'Ver reservacion')!!}
              </li>
            </ul>
          </li>
          <!--<li class="nav-item" data-placement="right" data-toggle="tooltip" title="Eventos">
            <a class="nav-link nav-link-collapse collapsed" data-parent="#exampleAccordin" data-toggle="collapse" href="#collapseEventos">
              <i class="fa fa-map-marker"></i>
              <span class="nav-link-text">
                Eventos
              </span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseEventos">
              <li href="">
                <a>Agregar Eventos</a>
              </li>
              <li href="">
                <a>Ver Eventos</a>
              </li>
            </ul>
          </li>-->
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a id="sidenavToggler" class="nav-link text-center">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <!--<div class="input-group">
                <input type="text" class="form-control" placeholder="Search for ..." >
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>-->
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-target="#exampleModal" data-toggle="modal">
              <i class="fa fa-fw fa-sign-out"></i>
              Salir
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div aria-hidden="true" aria-labelledy="exampleModalLabel" class="modal fade" id="exampleModal" role="dialog" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Seguro que desea salir?</h5>
            <button aria-hidden="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true"></span>
            </button>
          </div>
          <div class="modal-body">
            Seleccione salir cuando este listo para terminar la sesion
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" type="button">Cancelar</button>
                                        <a href="{{ route('logout') }}"
                                        class="btn btn-primary"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            
          </div>
        </div>
      </div>
    </div>
    <div class="content-wrapper" style="padding-top: 0px; padding-bottom: 0px;"  >
      @yield('content')
    </div>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright Your Website 2017</small>
        </div>
      </div>
    </footer>
    {!!Html::script("js/jsF/vendor/jquery/jquery.min.js")!!}
    {!!Html::script("js/jsF/vendor/popper/popper.min.js")!!}
    {!!Html::script("js/jsF/vendor/bootstrap/js/bootstrap.min.js")!!}
    {!!Html::script("js/jsF/vendor/jquery-easing/jquery.easing.min.js")!!}
    {!!Html::script("js/jsF/js/sb-admin.min.js")!!}
    @section('script')
    @show
  </body>
</html>
