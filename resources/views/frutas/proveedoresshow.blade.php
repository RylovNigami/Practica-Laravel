@extends('layouts.layout')
@section('content')
<h3>Borrar Proveedor</h3>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div>
        <h3>Nombre Proveedor: {{$proveedor->nombre}}</h3>
        <p><h3>Fruta: {{$fruta->nombre}}</h3>
        <br>
        <form action="{{route('proveedores.proveedordestroy', ['id'=>$fruta->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</button>
        </form>
    </div>
</div>
@endsection