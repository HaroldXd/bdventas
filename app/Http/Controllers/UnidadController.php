<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidades;

class UnidadController extends Controller
{
    const PAGINATION = 10; // PARA QUE PAGINEE DE 10 EN 10
    public function index(Request $request)
    {



    
        $buscarpor=$request->get('buscarpor');
        $unidad=Unidades::where('estado','=','1')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('unidad.index',compact('unidad','buscarpor'));
        
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
        'descripcion'=>'required|max:30'
        ],
        [
        'descripcion.required'=>'Ingrese descripción de unidad',
        'descripcion.max'=>'Maximo 30 caracteres para la descripción'
        ]);
        $unidad=new Unidades();
        $unidad->descripcion=$request->descripcion;
        $unidad->estado='1';
        $unidad->save();
        return redirect()->route('unidad.index')->with('datos','Registro Nuevo Guardado...!');
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
        $unidad=Unidades::findOrFail($id);
        return view('unidad.edit',compact('unidad'));
       
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
        $data=request()->validate([
            'descripcion'=>'required|max:30'
            ],
            [
            'descripcion.required'=>'Ingrese descripción de unidad',
            'descripcion.max'=>'Maximo 30 caracteres para la descripción'
            ]);
            $unidad=Unidades::findOrFail($id);
            $unidad->descripcion=$request->descripcion;
            $unidad->save();
            return redirect()->route('unidad.index')->with('datos','Registro Actualizado...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmar($id)
    {
    $unidad=Unidades::findOrFail($id);
    return view('unidad.confirmar',compact('unidad'));
    }
    public function destroy($id)
    {
    $unidad=Unidades::findOrFail($id);
    $unidad->estado='0';
    $unidad->save();
    return redirect()->route('unidad.index')->with('datos','Registro Eliminado...!');
    }
}
