<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Gasto;
use App\Mail\ResumenReporte;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = Gasto::latest()->get(); //json
        return view('gastos.index',['gastos'=>$gastos] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gastos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>['required']]);
        $report = new Gasto();
        $report->title = $request->get('title');
        $report->save();

        return redirect()->route('gastos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gasto $gasto)
    {
        return view('gastos.show', compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gasto = Gasto::find($id);
        return view('gastos.edit', compact('gasto'));
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
        $gasto = Gasto::find($id);
        $gasto->title = $request->get('title');
        $gasto->save();
        return redirect()->route('gastos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gasto = Gasto::find($id);
        $gasto->delete();
        return redirect()->route('gastos.index');   
    }

    public function confirmarEnvioEmail(Gasto $gasto) {
        return view('gastos.confirmarEnvioEmail', compact('gasto'));
    }

    public function enviarEmail(Request $request, Gasto $gasto) {
        Mail::to($request->get('email'))->send(new ResumenReporte($gasto));
        return redirect()->route('gastos.show', $gasto);
    }
}
