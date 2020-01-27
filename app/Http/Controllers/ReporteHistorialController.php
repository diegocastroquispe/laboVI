<?php

namespace App\Http\Controllers;

use App\Reporte_Historial;
use App\Paciente;
use App\Doctor;
use Illuminate\Http\Request;

class ReporteHistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Reporte_Historials=Reporte_Historial::all();
        $pacientes=Paciente::all();
        $doctors=Doctor::all();
        return view('Reporte_Historials.index',compact('Reporte_Historials','pacientes','doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Reporte_Historials=Cita::create($request->all());
        $Reporte_Historials->save();
        return redirect()->route('Reporte_Historials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reporte_Historial  $reporte_Historial
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte_Historial $reporte_Historial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reporte_Historial  $reporte_Historial
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte_Historial $reporte_Historial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reporte_Historial  $reporte_Historial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte_Historial $reporte_Historial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reporte_Historial  $reporte_Historial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte_Historial $reporte_Historial)
    {
        Reprote_Historial::find($reporte_Historial->id)->delete();
        return back();
    }
}
