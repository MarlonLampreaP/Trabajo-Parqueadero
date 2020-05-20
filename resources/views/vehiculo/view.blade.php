@extends('layouts.app', ['activePage' => 'Vehiculo', 'titlePage' => __('vehiculo')])

@section('content')

<br><br>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card card-plain">
                    <div class="card-header card-header-danger">
                        <h4 class="card-title mt-0">Vehiculo</h4>
                        <p class="card-category"> Datos del Vehiculo</p>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">

                                <thead class="">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Placa
                                    </th>
                                    <th>
                                        Cupo
                                    </th> 
                                    <th>
                                        Tipo de vehiculo
                                    </th>   
                                    <th>
                                        Creacion
                                    </th>  
                                 </thead>

                                 <tbody>
                                    <tr>
                                        <td>{{$vehiculo->id}}</td>
                                        <td>{{$vehiculo->placavehiculo}}</td>                                       
                                        <td>{{$vehiculo->parqueadero}}</td>    
                                        <td>{{$vehiculo->tipovehiculo}}</td>     
                                        <td>{{$vehiculo->created_at}}</td>                                                                              
                                    </tr>
                                </tbody>

                            </table>
                            <a href="{{route('vehiculo.index')}}"><button class="btn btn-danger">Atras</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div> 
    </div>
</div>
@endsection