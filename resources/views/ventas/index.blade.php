@extends('layouts.plantilla')
@section('contenido')
 <div class="container">
 <h3> LISTADO DE VENTAS </h3>
 <br>

 <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa times"></i>
                </button>
            </div>


            <br>
            <a href="{{ route('ventas.create') }}" class="btn btn-primary"><i class="fas faplus"></i> Nuevo Registro</a>     
 <nav class="navbar navbar-light float-right">
 <form class="form-inline my-2 my-lg-0" method="GET">
 <input name="buscarpor" class="form-control mr-sm2" type="search" placeholder="Busqueda por descripcion" arialabel="Search" value="">

 <button class="btn btn-success my-2 my-sm0" type="submit">Buscar</button>
 </form>
 </nav>

 <table class="table">
 <thead class="thead-dark">
 <tr>
 <th scope="col">Código</th>
 <th scope="col">Descripción</th>
 <th scope="col">Fecha</th>
 <th scope="col">RUC/DNI</th>
 <th scope="col">Nombres/Razon</th>
 <th scope="col">Total</th>
 <th scope="col">PDF</th>

 </tr>
 </thead>
 <tbody>
 @foreach($venta as $itemventa)
 <tr>
 <td>{{$itemventa->venta_id}}</td>
 <td>{{$itemventa->tipo->descripcion}}</td>
 <td>{{$itemventa->fecha_venta}}</td>
 <td>{{$itemventa->clientes->ruc_dni}}</td>
 <td>{{$itemventa->clientes->nombres}}</td>
 <td>{{$itemventa->total}}</td>
 <td><a href="{{ route('ventas.pdf', $itemventa->venta_id) }}"target="_blank" class="btn btn-info btnsm"><i class="fas fa-edit"></i>
    PDF</a>

</td>



 </tr>
 @endforeach
 </tbody>
 </table>
 {{ $venta->links()}}
 </div>
@endsection