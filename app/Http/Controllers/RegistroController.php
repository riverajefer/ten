<?php

namespace ten\Http\Controllers;

use Illuminate\Http\Request;
use ten\Registro;
use ten\Sector;
use ten\Producto;
use Session;
use ten\Http\Requests;
use ten\Http\Controllers\Controller;


class RegistroController extends Controller
{

    public function __construct()
    {
       $this->nivel_interes = collect(['Alto', 'Medio', 'Bajo', 'Ninguno']);
       $this->localidad     = collect(['Antonio Nariño', 'Bosa', 'Engativad']);
       $this->mensajes  = collect([
        'Envíar portafolio por correo',
        'Envìar cotización por correo',
        'Nosotros le escribimos o lo llamamos luego',
        'Volver cuando este el dueño',
        'Muy costoso',
        'No me interesa',
        'Volver luego',
        'Llamar luego',
        ]);
    }

    public function index()
    {
        $registros = Registro::all();
        return view('registros.index', array('registros'=>$registros));        
    }

    public function create()
    {
        $sectores  = Sector::all();
        $productos = Producto::all();

        $datos = array(
            'sectores'      => $sectores,
            'productos'     => $productos,
            'localidad'     => $this->localidad,
            'nivel_interes' => $this->nivel_interes,
            'mensajes'      => $this->mensajes,
        );

        return view('registros.crear', $datos);

    }

    public function store(Request $request)
    {
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

    public function show($id)
    {
        $registro = Registro::find($id);
        return view('registros.detalle', array('registro' => $registro));
    }


    public function edit($id)
    {
        $registro = Registro::find($id);
        $sectores = Sector::all();
        $productos = Producto::all();

        $datos = array(
            'registro'      => $registro, 
            'sectores'      => $sectores,
            'productos'     => $productos,
            'localidad'     => $this->localidad,
            'nivel_interes' => $this->nivel_interes,
            'mensajes'      => $this->mensajes,
        );

        return view('registros.modificar', $datos);        

    }

    public function update(Request $request, $id)
    {
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

        $registro = Registro::find($id);

        $registro->sector_id        = $request->tipoComercio;
        $registro->empresa          = $request->empresa;
        $registro->encargado        = $request->encargado;
        $registro->cargo            = $request->cargo;
        $registro->localidad        = $request->localidad;
        $registro->barrio           = $request->barrio;
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

        Session::flash('message', 'Registro modificado correctamente!');
        return redirect('registro');  
    }


    public function destroy($id)
    {

        $registro = Registro::find($id);
        $registro->delete();

        Session::flash('message', 'Registro eliminado correctamente!');
        return redirect('registro');

    }

}
