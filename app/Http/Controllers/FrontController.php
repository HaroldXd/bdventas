<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Categoria;
use App\Models\ProductoDetalle;

class FrontController extends Controller

{
     public function index()
    {
        // $categorias = Categoria::all();
        //$productos = Productos::all();
        $productos = Productos::all()->where('estado', '=', '1');
        $productoDetalle = ProductoDetalle::all();
        return view('front.inicio', compact('productos','productoDetalle'));
     
    }
    public function index1()
    {
        // $categorias = Categoria::all();
        //$productos = Productos::all();
        $productos = Productos::all()->where('estado', '=', '1');
        return view('front.verproductos', compact('productos'));
    }
    public function detalle($id)
    {
        $productoDetalle = ProductoDetalle::findOrFail($id);
        $productos=Productos::findOrFail($id);
        return view('front.detalle',compact('productos','productoDetalle'));
       
    }
    public function modelos()
    {
        // $categorias = Categoria::all();
        //$productos = Productos::all();
        $productos = Productos::all()->where('estado', '=', '1');
        return view('front.verproductos', compact('productos'));
    }
}
