<?php

namespace App\Http\Controllers;

//use File;
//use Illuminate\Http\File;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Productos;
use App\Models\Categoria;
use App\Models\ProductoDetalle;
use App\Models\Unidades;
//

class ProductosController extends Controller
{
    const PAGINATION = 5; // PARA QUE PAGINEE DE 10 EN 10


    public function index(Request $request)
    {




        //$productos = Categoria::with('categorias')->get();



        $buscarpor = $request->get('buscarpor');
        $productos = Productos::where('estado', '=', '1')->where('descripcion', 'like', '%' . $buscarpor . '%')->paginate($this::PAGINATION);
        return view('productos.index', compact('productos', 'buscarpor'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::where('estado', '=', '1')->get();
        $unidades = Unidades::where('estado', '=', '1')->get();
        $detalleProducto = ProductoDetalle::all();

        // Obtén un producto nuevo para relacionar con el detalle
        $producto = new Productos();

        return view('productos.create', compact('categorias', 'unidades', 'detalleProducto', 'producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $productos = new Productos();
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $productos->imagen = $destinationPath . $filename;
        }

        /*
        $data = request()->validate(
            [
                'nombre' => 'required|max:30'
            ],
            [
                'nombre.required' => 'Ingrese descripción de categoria',
                'nombre.max' => 'Maximo 30 caracteres para la descripción'
            ]
        );
        */

        $productos->descripcion = $request->descripcion;
        $productos->idcategoria = $request->idcategoria;
        $productos->idunidad = $request->idunidad;
        $productos->precio = $request->precio;
        $productos->stock = $request->stock;
        $productos->estado = '1';
        $productos->save();
       
        return redirect()->route('productos.index')->with('datos', 'Registro Nuevo Guardado...!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Productos::with('categorias')->get();
        $categorias = Categoria::all()->where('estado', '=', '1');
        $unidades = Unidades::all()->where('estado', '=', '1');
        $productos = Productos::findOrFail($id);
        return view('productos.edit', compact('productos', 'categorias', 'unidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = Productos::find($id);

        //$productos->imagen=$filename;
        $productos->descripcion = $request->input('descripcion');
        $productos->idcategoria = $request->input('idcategoria');
        $productos->idunidad = $request->input('idunidad');
        $productos->precio = $request->input('precio');
        $productos->stock = $request->input('stock');
        if ($request->hasfile('imagen')) {
            $destination = 'images/featureds/' . $productos->imagen;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('imagen');
            $destinationPath = 'images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $productos->imagen = $destinationPath . $filename;
        }
        $productos->update();
        return redirect()->route('productos.index')->with('datos', 'Registro Actualizado...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmar($id)
    {
        $productos = Productos::findOrFail($id);
        return view('productos.confirmar', compact('productos'));
    }
    public function destroy($id)
    {
        $productos = Productos::findOrFail($id);
        $productos->estado = '0';
        $productos->save();
        return redirect()->route('productos.index')->with('datos', 'Registro Eliminado...!');
    }
}
