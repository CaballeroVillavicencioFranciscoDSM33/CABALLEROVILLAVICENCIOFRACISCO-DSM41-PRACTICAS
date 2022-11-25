<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\Especialistas;
use App\Models\Pacientes;
use App\Models\Servicios;
use Illuminate\Http\Request;

class CitasController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Definimos nuestra vista
        //return students::all();
        $citas = Citas::all();
        
        return view('citas.index', compact('citas'));

      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialistas=Especialistas::all('id','nombre_completo');
        $pacientes=Pacientes::all('id','nombre_completo');
        $servicios=Servicios::all('id','nombre_servicio');
      
        return view('citas.add',compact('especialistas','pacientes','servicios'));

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
        $input=$request->all();
        Citas::create($input);
        return redirect('citas')->with('flash_message','Cita  Añadida!');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Citas::find($id);
        return view('citas.show')->with('citas',$cita);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialistas=Especialistas::all('id','nombre_completo');
        $pacientes=Pacientes::all('id','nombre_completo');
        $servicios=Servicios::all('id','nombre_servicio');
        $cita = Citas::findOrFail($id);
      
        return view('citas.edit',compact('especialistas','pacientes','servicios'))->with('citas', $cita);  
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
        $cita= Citas::findOrFail($id);
        $input=$request->all();
        $cita->update($input);
        return redirect('citas')->with('flash_message', 'cita Actualizada!');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
