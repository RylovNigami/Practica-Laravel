@extends('layouts.layout')
@section('content')
    <h3>Lista de Frutas</h3>
    <div class="table.container">
            <table id="linkstable" cellspacing="10px">
                <thead>
                    <th>
                        <div class="btn-group">
                            <a href="{{route('frutas.frutacreate')}}" class="btn btn-info">Añadir Fruta</a>
                        </div>
                    </th>
                    <th>
                        <div class="btn-group">
                            <a href="{{route('proveedores.list')}}" class="btn btn-info">Proveedores</a>
                        <div>
                    </th>
                    <th>
                        <div class="btn-group">
                            <a href="{{route('batidos.list')}}" class="btn btn-info">Batidos</a>
                        <div>
                    </th>
                     
                </thead>
            </table>
    </div>
    <div class="table.container">
        <table id="mytable" cellspacing="10px">
            <thead>
                <th>Nombre</th>
                <th>Temporada</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($frutas as $fruta)
                <tr>
                    <td>{{$fruta->nombre}}</td>
                    <td>{{$fruta->temporada}}</td>
                    <td>{{$fruta->precio}}</td>
                    <td>{{$fruta->stock}}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{route('frutas.frutaedit', ['id'=>$fruta->id])}}" >
                            Edit
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{route('frutas.frutasshow', ['id'=>$fruta->id])}}" >
                            Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection