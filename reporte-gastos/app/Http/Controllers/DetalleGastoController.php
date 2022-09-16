<?php

namespace App\Http\Controllers;

use App\Gasto;
use App\DetalleGasto;
use Illuminate\Http\Request;

class DetalleGastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Gasto $gasto)
    {
        return view('detalleGastos.create', compact('gasto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Gasto $gasto)
    {
        $detalleGasto = new DetalleGasto();
        $detalleGasto->gasto_id = $gasto->id;
        $detalleGasto->descripcion = $request->get('descripcion');
        $detalleGasto->costo = (float)($request->get('costo'));
        $detalleGasto->save();
        return redirect()->route('gastos.show', $gasto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleGasto $detalleGasto)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
