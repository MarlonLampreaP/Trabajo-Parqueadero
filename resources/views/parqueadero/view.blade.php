@extends('layouts.app', ['activePage' => 'cupo', 'titlePage' => __('cupo')])

@section('content')

<br><br>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card card-plain">
                    <div class="card-header card-header-info">
                        <h4 class="card-title mt-0"> Cupos</h4>
                        <p class="card-category"> Cupo seleccionado</p>
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
                                        Creacion
                                    </th>                                  
                                 </thead>

                                 <tbody>
                                    <tr>
                                        <td>{{$parqueadero->id}}</td>
                                        <td>{{$parqueadero->cupo}}</td>      
                                        <td>{{$parqueadero->created_at}}</td>                                                                   
                                    </tr>
                                </tbody>

                            </table>
                            <a href="{{route('parqueadero.index')}}"><button class="btn btn-info">Volver</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div> 
    </div>
</div>
@endsection