<?php

namespace ten\Http\Controllers\Formulario;

use ten\User;
use ten\Registro;
use Validator;
use Illuminate\Http\Request;
use ten\Http\Controllers\Controller;



class FormularioController extends Controller
{

    public function show(){

    	return view('formulario.index');

    }

    public function save(Request $request){

	    $this->validate($request, [
	        'email' => 'required|email|max:255',
	    ]);

	    $registro = new Registro();
	    $registro->email = $request->email;
	    $registro->save();

	    return "Registro guardado Ok";


/*
        if ($validator->fails()) {

            return redirect('formulario')
                        ->withErrors($validator)
                        ->withInput();
        }
*/
		return $input = $request->all();

    }    
    
}
