<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Categoria;
use App\Models\ProductoDetalle;
use App\Models\Productos1;
use App\Models\Sucursal;

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
      
        $productos=Productos::findOrFail($id);
        return view('front.detalle',compact('productos'));
       
    }
    public function modelos()
    {
        // $categorias = Categoria::all();
        //$productos = Productos::all();
        $productos = Productos::all()->where('estado', '=', '1');
        return view('front.verproductos', compact('productos'));
    }
    public function nosotros()
    {

        return view('front.nosotros');
    }
    public function productos()
    {
        // $categorias = Categoria::all();
        //$productos = Productos::all();
        $productos = Productos1::all()->where('estado', '=', '1');
        return view('front.verproductos1', compact('productos'));
    }
    public function detalle1($id)
    {
      
        $productos=Productos1::findOrFail($id);
        return view('front.detalle1',compact('productos'));
       
    }

    public function sucursales()
    {
        // $categorias = Categoria::all();
        //$productos = Productos::all();
        $sucursales = Sucursal::all()->where('estado', '=', '1');
        return view('front.listasucursales', compact('sucursales'));
    }
}
