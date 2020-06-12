<?php

namespace App\Http\Controllers;

use App\Contactos;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['contactos']=Contactos::paginate(5);
        return view('contactos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contactos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosContacto=request()->all();
        $datosContacto=request()->except('_token');
        Contactos::insert($datosContacto);
        /* return response()->json($datosContacto); */
        return redirect('contactos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show(Contactos $contactos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contacto=Contactos::findOrFail($id);
        return view('contactos.edit',compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datosContacto=request()->except(['_token','_method']);
        Contactos::where('id','=',$id)->update($datosContacto);
        $contacto=Contactos::findOrFail($id);
        //return view('contactos.edit',compact('contacto'));
        return redirect('contactos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contactos::destroy($id);
        return redirect('contactos');
    }
}
