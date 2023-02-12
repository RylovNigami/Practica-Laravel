@extends('layouts.layout')
@section('content')
<div>
    <h3>Crear Batido</h3>
    <form action="{{route('batidos.batidostore')}}" method="post">
        {{csrf_field()}}
        Nombre Batido: <input type="text" name="nombre" value=""/>
        <p>Precio: <input type="text" name="precio" value=""/>
        <p>fruta 1: <select name="select">
        @foreach($frutas as $fruta)
        <option value="{{$fruta->id}}">{{$fruta->nombre}}</option>
        @endforeach
        </select>
        <p><button type="submit">Guardar</button>
    </form>
</div>
@endsection