<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="home" class="simple-text logo-normal">
      {{ __('Parqueadero') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('material') }}/img/contraseña.png"></i>
          <p>{{ __('Ajustes De Usuario') }}
            <b class="caret"></b>
          </p>
        </a> 
        <div class="collapse hide" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> CC </span>
                <span class="sidebar-normal">{{ __('Cambiar Contraseña') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'vehiculo' || $activePage == 'vehiculo') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#vehiculo" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('material') }}/img/car.png"></i>
          <p>{{ __('Vehiculos') }}
            <b class="caret"></b>
          </p>
        </a> 
        <div class="collapse hide" id="vehiculo">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'vehiculo' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('vehiculo.index') }}">
                <i class="material-icons">VH</i>
                  <p>{{ __('Vehiculo') }}</p>
              </a>
           </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'cliente' || $activePage == 'cliente') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#cliente" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('material') }}/img/new_logo.png"></i>
          <p>{{ __('Clientes') }}
            <b class="caret"></b>
          </p>
        </a> 
        <div class="collapse hide" id="cliente">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'cliente' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('cliente.index') }}">
                <i class="material-icons">content_paste</i>
                  <p>{{ __('Cliente') }}</p>
              </a>
           </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'cupo' || $activePage == 'cupo') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#cupo" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('material') }}/img/imac1.png"></i>
          <p>{{ __('Cupos') }}
            <b class="caret"></b>
          </p>
        </a> 
        <div class="collapse hide" id="cupo">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'cupo' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('parqueadero.index') }}">
                <i class="material-icons">library_books</i>
                  <p>{{ __('Cupos') }}</p>
              </a>
           </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>