<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = App\Vehiculo::orderby('id', 'asc')->get();
        $clientes = App\Cliente::orderby('nombre', 'asc')->get();
        $detalles = App\Detalle::orderby('nombre', 'asc')->get();
        return view('detalle.index', compact('vehiculos', 'clientes','detalles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detalle.insert');
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
            'idvehiculo' => 'required',
            'horaentrada' => 'required',
            'idcliente' => 'required'
        ]);

        App\Detalle::create($request->all());      
        
        return redirect()->route('detalle.index')
        ->with('exito', 'Detalle creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function show(Detalle $detalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculos = App\Vehiculo::orderby('id', 'asc')->get();
        $clientes = App\Cliente::orderby('nombre', 'asc')->get();
        $detalles = App\Detalle::orderby('nombre', 'asc')->get();

        return view('detalle.edit', compact('vehiculos', 'clientes','detalles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'idvehiculo' => 'required',
            'horaentrada' => 'required',
            'idcliente' => 'required',
        ]);

        $detalles = App\Detalle::findorfail($id);

        $detalles->update($request->all());

        return redirect()->route('detalle.index')
                ->with('exito', 'se modifico el detalle con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalles = App\Detalle::findorfail($id);

        $detalles->delete();

        return redirect()->route('detalle.index')
                ->with('exito', 'se elimino el detalle con exito');
    }
}
