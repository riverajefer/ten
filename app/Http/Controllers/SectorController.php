<?php

namespace ten\Http\Controllers;

use ten\Sector;
use Session;
use Illuminate\Http\Request;

use ten\Http\Requests;
use ten\Http\Controllers\Controller;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sectores = Sector::all();
        return view('sectores.index', array('sectores'=>$sectores));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('sectores.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
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
        $sector = Sector::find($id);
        return view('sectores.modificar', array('sector'=>$sector));
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

        $this->validate($request, [
            'sector' => 'required|max:200',
        ]);        

        $sector = Sector::find($id);
        $sector->sector = $request->sector;
        $sector->save();

        Session::flash('message', 'Sector modificado correctamente!');
        return redirect('sector');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $sector = Sector::find($id);
        $sector->delete();

        Session::flash('message', 'Sector eliminado correctamente!');
        return redirect('sector');
    }
}
