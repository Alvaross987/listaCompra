@extends('layouts.master')

@section('content')

    <div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen genérica de los productos --}}
        <img src="https://picsum.photos/200/300/?random"/>

    </div>
    <div class="col-sm-8">
    <form action="{{ url('productos/show/' . $producto->id) }}" method="POST">
    {{method_field('PUT')}}
                        @csrf
        {{-- TODO: Datos del producto --}}
        <p>Nombre del producto:{{$producto->nombre}}</p>
        <p>Categoria:{{$producto->categoria}}</p>
        @if ($producto->boolean)
        <p>Estado: Producto actualmente comprado</p>
        <input type="submit" class="btn btn-success" value="Comprado">
        @else
        <p>Estado: Producto actualmente sin comprar</p>
        <input type="submit" class="btn btn-danger" value="Comprar">
        @endif
        
        <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">Editar producto</a>
        <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>
    </form>
    </div>
</div>



@stop