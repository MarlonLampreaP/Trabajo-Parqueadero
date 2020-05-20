@extends('layouts.app', ['activePage' => 'vehiculo', 'titlePage' => __('Vehiculo')])

@section('content')

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('vehiculo.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @if ($message = Session::get('exito'))
                  <div class="alert alert success">
                  <p style="color:#1cc35e"> {{$message}}</p>
                  </div>
            @endif
            <div class="card ">
              <div class="card-header card-header-danger">
                <h4 class="card-title">{{ __('Agregar Vehiculos') }}</h4>
                <p class="card-category">{{ __('Digite la información del vehiculo a crear') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Cupo Disponible') }}</label>
                  <div class="col-sm-7">
                    <div class="input-field">
                      <select name="idparqueadero" type="text" value="" required="true">
                        <option value="" disabled selected>Cupo</option>
                        @foreach ($parqueaderos as $parqueadero)
                            <option value="{{$parqueadero->id}}">{{$parqueadero->cupo}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Placa Vehiculo') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="placavehiculo" id="input-name" type="text" placeholder="{{ __('Placa del vehiculo') }}">
                        @if ($errors->has('name'))
                          <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Tipo De Vehiculo') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="tipovehiculo" id="input-name" type="text" placeholder="{{ __('Tipo Del vehiculo') }}">
                        @if ($errors->has('name'))
                          <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-danger">Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-danger">
                  <h4 class="card-title mt-0"> Clientes Inscritos</h4>
                  <p class="card-category"> Clientes registrados en el sistema</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          id Vehiculo
                        </th>
                        <th>
                          Tipo de vehiculo
                        </th>
                        <th>
                          Acciones
                        </th>
                      </thead>
                      <tbody>
                        @foreach ($vehiculos as $vehiculo)
                        <tr>
                          <td>{{$vehiculo -> id}}</td>
                          <td>{{$vehiculo -> tipovehiculo}}</td>
                          <td>
                            <form action="{{route('vehiculo.destroy', $vehiculo->id)}}" method="post">
                              <a href="{{route('vehiculo.show', $vehiculo->id)}}" class="btn btn-primary">Ver</a>
                              <a href="{{route('vehiculo.edit', $vehiculo->id)}}" class="btn btn-success">Editar</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="{{route('home')}}"><button class="btn btn-danger">Atras</button>
    </div>
@endsection