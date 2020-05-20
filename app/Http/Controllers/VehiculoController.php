<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = App\Vehiculo::orderby('id', 'asc')->get();
        $parqueaderos = App\Parqueadero::orderby('cupo', 'asc')->get();
        return view('vehiculo.index', compact('vehiculos', 'parqueaderos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehiculos = App\Vehiculo::orderby('id','asc')->get();
        $parqueaderos = App\Parqueadero::orderby('cupo','asc')->get();
        return view('vehiculo.insert',compact('vehiculos','parqueaderos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'placavehiculo' => 'required',
            'tipovehiculo' => 'required'

        ]);

        App\Vehiculo::create($request->all());      
        
        return redirect()->route('vehiculo.index')
        ->with('exito', 'Vehiculo creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = App\Vehiculo::join('parqueaderos', 'vehiculos.idparqueadero', 'parqueaderos.id')
                            ->select('vehiculos.*', 'parqueaderos.id as parqueadero')
                            ->where('vehiculos.id', $id)
                            ->first();

        $parqueaderos = App\Parqueadero::orderby('id', 'asc')->get();
        return view('vehiculo.view', compact('vehiculo','parqueaderos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculos = App\Vehiculo::findorfail($id);
        $parqueaderos = App\Parqueadero::orderby('cupo', 'asc')->get();

        return view('vehiculo.edit', compact('vehiculos', 'parqueaderos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'idparqueadero' => 'required',
            'placavehiculo' => 'required',
            'tipovehiculo' => 'required'
        ]);

        $vehiculos = App\Vehiculo::findorfail($id);

        $vehiculos->update($request->all());

        return redirect()->route('vehiculo.index')
                ->with('exito', 'se modifico el vehiculo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculos = App\Vehiculo::findorfail($id);

        $vehiculos->delete();

        return redirect()->route('vehiculo.index')
                ->with('exito', 'se elimino el vehiculo con exito');
    }
}
