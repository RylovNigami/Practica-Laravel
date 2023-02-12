<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Batido;
use App\Models\Fruta;

class BatidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batidos = Batido::all();
        return view('frutas.batidosindex', ['batidos'=>$batidos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $frutas = Fruta::all();
        return view('frutas.batidocreate',['frutas'=>$frutas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batido = new Batido();
        $batido->nombre = $request->nombre;
        $batido->precio = $request->precio;
        $batido->id_fruta = $request->select;

        $batido->save();
        return redirect('/batidoslist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $batido = Batido::findOrFail($id);
        return view('frutas.batidosshow',['batido'=>$batido]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batido = Batido::findOrFail($id);
        return view('frutas.batidosupdate', ['batido'=>$batido]);
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
        $batido = Batido::findOrFail($id);

        $batido->nombre = $request->nombre;

        $batido->save();

        return redirect('/batidoslist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $batido = Batido::findOrFail($id);

        $batido->delete();

        return redirect('/batidoslist');
    }
}
