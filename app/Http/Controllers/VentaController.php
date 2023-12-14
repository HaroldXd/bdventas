<?php

namespace App\Http\Controllers;

use App\Models\CabeceraVenta;
use App\Models\Parametro;
use App\Models\Tipo;
use App\Models\Cliente;
use App\Models\DetalleVenta;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class VentaController extends Controller
{
    const PAGINATION = 10;
    public function index(Request $request)
    {
        $venta = CabeceraVenta::where('estado', '=', '1')->paginate($this::PAGINATION);
        return view('ventas.index', compact('venta'));
    }
    public function create()
    {
        $cliente = DB::table('clientes')->get();
        $producto = DB::table('productos')->where('estado', '=', '1')->get();
        $tipo = Tipo::all();
        $tipou = Tipo::select('tipo_id', 'descripcion')->orderBy('tipo_id', 'DESC')->get();
        $parametros = Parametro::findOrFail($tipou[0]->tipo_id);
        return view('ventas.create', compact('tipo', 'parametros', 'cliente', 'producto'));
    }

    public function pdf(Request $request,$id)
    {

       
        $ventas = CabeceraVenta::findOrFail($id);
        $dt = DetalleVenta::all()->where('venta_id', '=', $id);
        
        $pdf = PDF::loadview('ventas.pdf', compact('ventas','dt'));
        return $pdf->stream();

  
    }

    public function store(Request $request)
    {
        //             
        try {
            DB::beginTransaction();
            /* Grabar Cabecera */
            /* Obtiene codigo cliente a partir del dni */
            $cliente = Cliente::where('ruc_dni', '=', $request->ruc)->get();
            $cliente_id = $cliente[0]->cliente_id;
            $venta = new CabeceraVenta();
            $venta->cliente_id = $cliente_id;
            $venta->nrodoc = $request->get('nrodoc');
            $venta->tipo_id = $request->seltipo;
            $arr = explode('/', $request->fecha);
            $nFecha = $arr[2] . '-' . $arr[1] . '-' . $arr[0];





            $venta->fecha_venta = $nFecha;
            if ($request->seltipo = '2') {

                $venta->total = $request->total;
                $venta->subtotal = '0';
                $venta->igv = '0';
            } else {
                $venta->total = $request->total;
                $venta->subtotal = $request->total - ($request->total * 0.18);
                $venta->igv = $request->total * 0.18;
            }

            $venta->estado = '1';
            $venta->save();
            /* Grabar Detalle */
            //$detalleventa=$request->get('detalles');
            $idproducto = $request->get('cod_producto');
            $cantidad = $request->get('cantidad');
            $pventa = $request->get('pventa');
            $cont = 0;
            while ($cont < count($idproducto)) {
                $detalle = new DetalleVenta();
                $detalle->venta_id = $venta->venta_id;
                $detalle->idproducto = $idproducto[$cont];
                $detalle->cantidad = $cantidad[$cont];
                $detalle->precio = $pventa[$cont];
                $detalle->save();
                /* Actualizar stock */
                Productos::ActualizarStock($detalle->idproducto, $detalle->cantidad);
                $cont = $cont + 1;
            }
            /* Actualizar el numero de documento en la tabla parametro */
            $numeracion = '';
            $numeracion = $this->dar_formato($request->numeracion + 1);
            Parametro::ActualizarNumero($venta->tipo_id, $numeracion);
            DB::commit();
            return redirect()->route('ventas.index');
        } catch (Exception $e) {
            DB::rollback();
        }
    }
    public function dar_formato($numero)
    {
        if ($numero < 10) return "0000" . $numero;
        else if ($numero < 100) return "000" . $numero;
        else if ($numero < 1000) return "00" . $numero;
        else if ($numero < 10000) return "0" . $numero;
        else return '' . $numero;
    }

    /* Para select2 Buscar Productos */
    public function ProductoCodigo($idproducto)
    {
        return DB::table('productos as p')
            ->join('unidades as u', 'p.idunidad', '=', 'u.idunidad')
            ->where('p.estado', '=', '1')
            ->where('p.idproducto', '=', $idproducto)
            ->select('p.idproducto', 'p.descripcion', 'u.descripcion as unidad', 'p.precio', 'p.stock')->get();
    }
    public function PorTipo($tipo_id)
    {
        return DB::table('tipo as t')
            ->join('parametros as p', 'p.tipo_id', '=', 't.tipo_id')
            ->where('t.tipo_id', '=', $tipo_id)
            ->select('t.tipo_id', 't.descripcion', 'p.serie', 'p.numeracion')->get();
    }
}
