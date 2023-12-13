<?php

namespace App\Http\Controllers;

//use File;
//use Illuminate\Http\File;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

use App\Models\Productos;
use App\Models\Categoria;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Sucursal;
use App\Models\Unidades;
use NunoMaduro\Collision\Contracts\Provider;
use DB;
//

class SucursalesController extends Controller
{
    const PAGINATION = 5; // PARA QUE PAGINEE DE 10 EN 10


    public function index(Request $request)
    {




        //$sucursales = Categoria::with('categorias')->get();


       
        $buscarpor = $request->get('buscarpor');
        $sucursales = Sucursal::where('estado', '=', '1')->where('descripcion', 'like', '%' . $buscarpor . '%')->paginate($this::PAGINATION);
        return view('sucursal.index', compact('sucursales', 'buscarpor'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $provincia = Provincia::get();
        $distrito = Distrito::get();
       
        //$buscarpor=$request->get('buscarpor');
        return view('sucursal.create' ,compact('distrito','provincia'));



        
       
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $sucursales = new Sucursal();

        $data=request()->validate([
            'descripcion'=>'required|max:30'
            ],
            [
            'descripcion.required'=>'Ingrese descripción de categoria',
            'descripcion.max'=>'Maximo 30 caracteres para la descripción'
            ]);

        $sucursales->descripcion = $request->descripcion;
        $sucursales->direccion = $request->direccion;
        $sucursales->idprovincia = $request->idprovincia;
        $sucursales->iddistrito = $request->iddistrito;
        $sucursales->idservicio = $request->idservicio;
        $sucursales->idhorario = $request->idhorario;
        $sucursales->ubicacion = $request->ubicacion;
        $sucursales->estado = '1';
        $sucursales->save();
        return redirect()->route('sucursales.index')->with('datos', 'Registro Nuevo Guardado...!');
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
        $sucursales = Sucursal::with('provincia')->get();
        $provincia = Provincia::all();
        $distrito = Distrito::all();
        $sucursales = Sucursal::findOrFail($id);
        return view('sucursal.edit', compact('sucursales', 'provincia', 'distrito'));
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
        $sucursales = Sucursal::find($id);

        //$sucursales->imagen=$filename;


        $sucursales->descripcion = $request->input('descripcion');
        $sucursales->direccion = $request->input('direccion');
        $sucursales->idprovincia = $request->input('idprovincia');
        $sucursales->iddistrito = $request->input('iddistrito');
        $sucursales->idservicio = $request->input('idservicio');
        $sucursales->idhorario = $request->input('idhorario');
        $sucursales->update();
        return redirect()->route('sucursales.index')->with('datos', 'Registro Actualizado...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmar($id)
    {
        $sucursales = Sucursal::findOrFail($id);
        return view('sucursal.confirmar', compact('sucursales'));
    }
    public function destroy($id)
    {
        $sucursales = Sucursal::findOrFail($id);
        $sucursales->estado = '0';
        $sucursales->save();
        return redirect()->route('sucursales.index')->with('datos', 'Registro Eliminado...!');
    }
}
