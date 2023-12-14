<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductoDetalle;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoDetalleController extends Controller
{
    public function create($idproducto)
    {
        $producto = Productos::find($idproducto);
        $detalleExistente = ProductoDetalle::where('idproducto', $idproducto)->first();

        return view('productos.createdetalle', compact('producto', 'detalleExistente'));
    }

    public function store(Request $request)
    {
        // Obtén el ID del producto del formulario
        $idProducto = $request->idproducto;

        // Verificar si ya existe un detalle para este producto
        $detalleExistente = ProductoDetalle::where('idproducto', $idProducto)->first();

        // Si ya existe, redirige a la edición en lugar de crear uno nuevo
        if ($detalleExistente) {
            return redirect()->route('detalles.edit', $detalleExistente->id)->with('info', 'Ya existe un detalle para este producto. Puedes editarlo a continuación.');
        }

        // Si no existe, crea uno nuevo
        $detalle_producto = new ProductoDetalle();
        $detalle_producto->llantas = $request->llantas;
        $detalle_producto->garantia = $request->garantia;
        $detalle_producto->detalle = $request->detalle;
        $detalle_producto->idproducto = $idProducto;
        $detalle_producto->idgaleria = $idProducto;
        $detalle_producto->estado = '1';
        $detalle_producto->save();

        return redirect()->route('productos.index')->with('datos', 'Detalle del Producto Guardado...!');
    }
    public function edit($id)
    {
        // Obtén el detalle del producto por su ID
        $detalle = ProductoDetalle::findOrFail($id);

        // Puedes cargar otros datos necesarios para la vista aquí, si es necesario
        // Por ejemplo, podrías cargar las categorías, unidades, etc.

        return view('productos.editdetalle', compact('detalle'));
    }

    public function update(Request $request, $id)
    {
        $detalle = ProductoDetalle::findOrFail($id);

        // Validaciones si es necesario

        // Actualizar los campos del detalle
        $detalle->llantas = $request->llantas;
        $detalle->garantia = $request->garantia;
        $detalle->detalle = $request->detalle;

        // Guardar los cambios
        $detalle->save();

        return redirect()->route('productos.index')->with('datos', 'Detalle del Producto actualizado con éxito.');
    }
 
}
