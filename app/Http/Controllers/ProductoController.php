<?php

namespace ten\Http\Controllers;

use ten\Producto;
use Session;
use Illuminate\Http\Request;

use ten\Http\Requests;
use ten\Http\Controllers\Controller;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', array('productos'=>$productos));
    }


    public function create()
    {
        return view('productos.crear');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'plan' => 'required|max:500',
        ]);        

        $producto = new Producto();
        $producto->plan = $request->plan;
        $producto->save();

        Session::flash('message', 'Producto creado correctamente!');
        return redirect('producto');

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.modificar', array('producto'=>$producto));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'plan' => 'required|max:500',
        ]);        

        $producto = Producto::find($id);
        $producto->plan = $request->plan;
        $producto->save();

        Session::flash('message', 'Producto modificado correctamente!');
        return redirect('producto');        
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        Session::flash('message', 'producto eliminado correctamente!');
        return redirect('producto');
    }
}
