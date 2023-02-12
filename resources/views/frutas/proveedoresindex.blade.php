@extends('layouts.layout')
@section('content')
    <h3>Lista de Proveedores</h3>
    <div class="table.container">
            <table id="linkstable" cellspacing="10px">
                <thead>
                    <th>
                        <div class="btn-group">
                            <a href="{{route('proveedores.proveedorcreate')}}" class="btn btn-info">Añadir proveedor</a>
                        </div>
                    </th>
                    <th>
                        <div class="btn-group">
                            <a href="{{route('frutas.list')}}" class="btn btn-info">Frutas</a>
                        </div>
                    </th>    
                </thead>
            </table>
    </div>
    <div class="table.container">
        <table id="mytable" cellspacing="10px">
            <thead>
                <th>Nombre</th>
                <th>Fruta</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->frutas->nombre}}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{route('proveedores.proveedoredit', ['id'=>$proveedor->id])}}" >
                            Edit
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{route('proveedores.proveedoresshow', ['id'=>$proveedor->id])}}" >
                            Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection