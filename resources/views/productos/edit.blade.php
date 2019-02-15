@extends('layouts.master')

@section('content')
        <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Producto
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('productos/edit/' . $producto->id) }}" method="POST">
                        {{method_field('PUT')}}
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre Producto</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$producto->nombre}}">
                        </div>

                        <div class="form-group">
                            <input type="number" min="0" name="precio" placeholder="Precio" value="{{$producto->precio}}">
                        </div>

                        <div class="form-group">
                            <input type="text" name="categoria" placeholder="Categoria" value="{{$producto->categoria}}">
                        </div>

                        <div class="form-group">
                            <input type="url" name="imagen" placeholder="url de la imagen" value="{{$producto->imagen}}">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{$producto->descripcion}}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar producto
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@stop