<?php

namespace App\Http\Controllers;

use App\Models\Especialistas;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class EspecialistasController extends Controller
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
        $especialistas = Especialistas::all();
        
        return view('especialistas.index', compact('especialistas'));

      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         $usuarios=Usuarios::all('id','correo');
        return view('especialistas.add',compact('usuarios'));

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
        Especialistas::create($input);
        return redirect('especialistas')->with('flash_message','Especialista  Añadido!');
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
        $especialista = Especialistas::find($id);
        return view('especialistas.show')->with('especialistas',$especialista);
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
        $usuarios = Usuarios::all('id','correo');
        $especialista = Especialistas::findOrFail($id);
        
        return view('especialistas.edit',compact('usuarios'))->with('especialistas', $especialista);  
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
        $especialista= Especialistas::findOrFail($id);
        $input=$request->all();
        $especialista->update($input);
        return redirect('especialistas')->with('info', 'especialista Actualizado!');
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