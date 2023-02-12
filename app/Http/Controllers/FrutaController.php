<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fruta;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frutas = Fruta::all();
        return view('frutas.frutasindex',['frutas'=>$frutas]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frutas.frutacreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fruta = new fruta();
        $fruta->nombre = $request->nombre;
        $fruta->temporada = $request->temporada;
        $fruta->precio = $request->precio;
        $fruta->stock = $request->stock;

        $fruta->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fruta = Fruta::findOrFail($id);
        return view('frutas.frutasshow', ['fruta'=>$fruta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$frutas = Fruta::all();
        $fruta = Fruta::findOrFail($id);
        return view('frutas.frutaupdate', ['fruta'=>$fruta]);
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
        $fruta = Fruta::findOrFail($id);

        $fruta->nombre = $request->nombre;
        $fruta->temporada = $request->temporada;
        $fruta->precio = $request->precio;
        $fruta->stock = $request->stock;

        $fruta->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fruta = Fruta::findOrFail($id);
        $fruta->delete();
        return redirect('/');
    }
}
