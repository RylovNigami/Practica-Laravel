@extends('layouts.layout')
@section('content')
<h3>Editar Fruta</h3>
<div>
    <form action="{{route('proveedores.proveedorupdate', ['id'=>$proveedor->id])}}" method="post">
        {{csrf_field()}}
        Nombre: <input type="text" name="nombre" value="{{$proveedor->nombre}}"/>
    
        <p><button type="submit">Actualizar</button>
    </form>
</div>
@endsection