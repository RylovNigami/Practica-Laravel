@extends('layouts.layout')
@section('content')
    <h3>Lista de Batidos</h3>
    <div class="table.container">
            <table id="linkstable" cellspacing="10px">
                <thead>
                    <th>
                        <div class="btn-group">
                            <a href="{{route('batidos.batidocreate')}}" class="btn btn-info">Añadir Batido</a>
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
                <th>Precio</th>
                <th>Fruta</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($batidos as $batido)
                <tr>
                    <td>{{$batido->nombre}}</td>
                    <td>{{$batido->precio}}</td>
                    <td>{{$batido->frutas->nombre}}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{route('batidos.batidoedit', ['id'=>$batido->id])}}" >
                            Edit
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{route('batidos.batidosshow', ['id'=>$batido->id])}}" >
                            Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection