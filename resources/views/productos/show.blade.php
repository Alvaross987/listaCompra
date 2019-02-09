@extends('layouts.master')

@section('content')

    <div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen genérica de los productos --}}
        <img src="https://picsum.photos/200/300/?random"/>

    </div>
    <div class="col-sm-8">

        {{-- TODO: Datos del producto --}}
        <p>Nombre del producto:{{$producto[0]}}</p>
        <p>Categoria:{{$producto[1]}}</p>
        <p>EStado: Producto actualmente comprado</p>
        <a class="btn btn-danger">Pendiente de compra</a>
        <a class="btn btn-warning" href="{{ url('/productos/edit/' . $id ) }}">Editar producto</a>
        <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>
    </div>
</div>



@stop