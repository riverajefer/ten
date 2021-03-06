<?php

namespace ten\Http\Controllers;

use ten\Sector;
use Session;
use Illuminate\Http\Request;

use ten\Http\Requests;
use ten\Http\Controllers\Controller;

class SectorController extends Controller
{

    public function index()
    {
        $sectores = Sector::all();
        return view('sectores.index', array('sectores'=>$sectores));
    }


    public function create()
    {
        return view('sectores.crear');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'sector' => 'required|max:200',
        ]);        

        $sector = new Sector();
        $sector->sector = $request->sector;
        $sector->save();

        Session::flash('message', 'Sector creado correctamente!');
        return redirect('sector');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $sector = Sector::find($id);
        return view('sectores.modificar', array('sector'=>$sector));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'sector' => 'required|max:200',
        ]);        

        $sector = Sector::find($id);
        $sector->sector = $request->sector;
        $sector->save();

        Session::flash('message', 'Sector modificado correctamente!');
        return redirect('sector');        
    }

    public function destroy($id)
    {
        $sector = Sector::find($id);
        $sector->delete();

        Session::flash('message', 'Sector eliminado correctamente!');
        return redirect('sector');
    }
}
