@extends('layouts.layout')
@section('content')
<div>
    <h3>Crear Fruta</h3>
    <form action="{{route('frutas.frutastore')}}" method="post">
        {{csrf_field()}}
        Nombre: <input type="text" name="nombre" value=""/>
        <p>Temporada: <input type="text" name="temporada" value=""/>
        <p>Precio: <input type="text" name="precio" value=""/>
        <p>Stock: <input type="number" name="stock" value=""/>
        <p><button type="submit">Guardar</button>
    </form>
</div>
@endsection