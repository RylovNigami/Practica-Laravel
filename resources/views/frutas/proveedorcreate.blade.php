@extends('layouts.layout')
@section('content')
<div>
    <h3>Crear Proveedor</h3>
    <form action="{{route('proveedores.proveedorstore')}}" method="post">
        {{csrf_field()}}
        Nombre proveedor: <input type="text" name="nombre" value=""/>
        <p>fruta: <select name="select">
        @foreach($frutas as $fruta)
        <option value="{{$fruta->id}}">{{$fruta->nombre}}</option>
        @endforeach
        </select>
        <p><button type="submit">Guardar</button>
    </form>
</div>
@endsection