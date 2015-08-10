<?php

namespace ten\Http\Controllers;

use Illuminate\Http\Request;
use ten\Registro;
use ten\Sector;
use Session;
use ten\Http\Requests;
use ten\Http\Controllers\Controller;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $registros = Registro::all();
        return view('registros.index', array('registros'=>$registros));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $sectores = Sector::all();
        return view('registros.crear', array('sectores' => $sectores));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'tipoComercio'    => 'required',
            'empresa'         => 'required',
            'encargado'       => 'required',
            'localidad'       => 'required',
            'email'           => 'required|email|max:255',
            'nivelInteres'    => 'required',
            'mensaje'         => 'required',
            'servicioInteres' => 'required',
        ]);

        $registro = new Registro();

        $registro->sector_id        = $request->tipoComercio;
        $registro->empresa          = $request->empresa;
        $registro->encargado        = $request->encargado;
        $registro->cargo            = $request->cargo;
        $registro->localidad        = $request->localidad;
        $registro->direccion        = $request->direccion;
        $registro->email            = $request->email;
        $registro->celular          = $request->celular;
        $registro->celular          = $request->celular;
        $registro->telefono         = $request->telefono;
        $registro->extension        = $request->extension;
        $registro->nivel_interes    = $request->nivelInteres;
        $registro->mensaje          = $request->mensaje;
        $registro->servicio_interes = $request->servicioInteres;
        $registro->observaciones    = $request->observaciones;

        $registro->save();

        Session::flash('message', 'Registro creado correctamente!');
        return redirect('registro');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
