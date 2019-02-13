<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function getIndex(){
        $productos=Producto::all();
    return view('productos.index', array('arrayProductos'=>$productos));
}

public function getCreate(){
    return view('productos.create');
}

public function getEdit($id){
    $producto=Producto::findorFail($id);
    return view('productos.edit', array('producto'=>$producto));
}

    public function getShow($id){
        $productos=Producto::findorFail($id);
    return view('productos.show')
    ->with('producto', $productos);
}

}
