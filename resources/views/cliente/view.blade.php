@extends('layouts.app', ['activePage' => 'cliente', 'titlePage' => __('Cliente')])

@section('content')

<br><br>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title mt-0">Cliente</h4>
                        <p class="card-category"> Datos del Cliente</p>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">

                                <thead class="">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Cupo
                                    </th>
                                    <th>
                                        Nombre
                                    </th>                                    
                                    <th>
                                        Telefono
                                    </th>
                                    <th>
                                        Creacion
                                    </th> 
                                 </thead>

                                 <tbody>
                                    <tr>
                                        <td>{{$cliente->id}}</td>
                                        <td>{{$cliente->parqueadero}}</td>                                       
                                        <td>{{$cliente->nombre}}</td>                                        
                                        <td>{{$cliente->telefono}}</td>  
                                        <td>{{$cliente->created_at}}</td>                                          
                                    </tr>
                                </tbody>

                            </table>
                            <a href="{{route('cliente.index')}}"><button class="btn btn-primary">Atras</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div> 
    </div>
</div>
@endsection