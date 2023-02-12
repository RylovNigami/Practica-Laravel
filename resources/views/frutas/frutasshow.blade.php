@extends('layouts.layout')
@section('content')
<h3>Borrar Fruta</h3>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div>
        <h3>Nombre: {{$fruta->nombre}}</h3>
        <p><h3>Temporada: {{$fruta->temporada}}</h3>
        <p><h3>Precio: {{$fruta->precio}}</h3>
        <p><h3>Stock: {{$fruta->stock}}</h3>
        <br>
        <form action="{{route('frutas.frutadestroy', ['id'=>$fruta->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</button>
        </form>
    </div>
</div>
@endsection