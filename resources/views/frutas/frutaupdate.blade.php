@extends('layouts.layout')
@section('content')
<h3>Editar Fruta</h3>
<div>
    <form action="{{route('frutas.frutaupdate', ['id'=>$fruta->id])}}" method="post">
        {{csrf_field()}}
        Nombre: <input type="text" name="nombre" value="{{$fruta->nombre}}"/>
        <p>Temporada: <input type="text" name="temporada" value="{{$fruta->temporada}}"/>
        <p>Precio: <input type="text" name="precio" value="{{$fruta->precio}}"/>
        <p>Stock: <input type="number" name="stock" value="{{$fruta->stock}}"/>
        <p><button type="submit">Actualizar</button>
    </form>
</div>
@endsection