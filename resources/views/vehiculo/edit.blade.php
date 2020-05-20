@extends('layouts.app', ['activePage' => 'Vehiculo', 'titlePage' => __('vehiculo')])

@section('content')

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('vehiculo.update',$vehiculos->id)}}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('PUT')

            @if ($message = Session::get('exito'))
                  <div class="alert alert danger">
                  <p style="color:#1cc35e"> {{$message}}</p>
                  </div>
            @endif
            <div class="card ">
              <div class="card-header card-header-danger">
                <h4 class="card-title">{{ __('Editar El vehiculo') }}</h4>
                <p class="card-category">{{ __('Digite el nuevo vehiculo') }}</p>
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
                    <label class="col-sm-2 col-form-label">{{ __('Placa Del Vehiculo') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="placavehiculo" id="input-name" type="text" placeholder="{{ __('Placa') }}" value="" required="true" aria-required="true"/>
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
  </div>
</table>
<a href="{{route('vehiculo.index')}}"><button class="btn btn-danger">Atras</button>
</div>
@endsection