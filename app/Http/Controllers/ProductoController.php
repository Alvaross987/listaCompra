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

public function putEdit(Request $request, $id){
    $producto = Producto::findOrFail($id);
    $producto->nombre = $request->nombre;
    $producto->precio = $request->precio;
    $producto->categoria = $request->categoria;
    $producto->imagen = $request->imagen;
    $producto->descripcion = $request->descripcion;
    $producto->save();
    return redirect('/productos/show/' . $producto->id);
}

public function postCreate(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->categoria = $request->categoria;
        $producto->imagen = $request->imagen;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        return redirect('/productos');
}

    public function getShow($id){
        $productos=Producto::findorFail($id);
    return view('productos.show')
    ->with('producto', $productos);
}

public function putComprar($id){
    $productos=Producto::findorFail($id);
    if($productos->boolean){
        $productos->boolean = false;
    }else{
        $productos->boolean = true;
    }
    $productos->save();
    return view('productos.show')
    ->with('producto', $productos);
}

}
