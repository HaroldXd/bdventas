@extends('layouts.plantilla')
@section('titulo')
    <title>Control | Ventas</title>
@endsection
@section('contenido')
    <div class="card">
        <div class="card-header">
            <h3> LISTADO DE CATEGORIAS </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa times"></i>
                </button>
            </div>


            <br>
            <a href="{{ route('categoria.create') }}" class="btn btn-primary"><i class="fas faplus"></i> Nuevo Registro</a>


<div>
<nav class="navbar navbar-light float-right">
                <form class="form-inline my-2 my-lg-0" method="GET">
                    <input name="buscarpor" class="form-control mr-sm2" type="search"
                        placeholder="Busqueda por descripcion" arialabel="Search" value="{{ $buscarpor }}">
                    <button class="btn btn-success my-2 my-sm0" type="submit">Buscar</button>
                </form>
                @if (session('datos'))
<div id="mensaje">
 @if (session('datos'))
 <div class="alert alert-warning alert-dismissible fade show mt3" role="alert">
 {{ session('datos') }}
 <button type="button" class="close" data-dismiss="alert" arialabel="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 @endif
 @endif

</div>
        
                

 </div>


                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($categoria) <= 0)
                                <tr>
                                    <td colspan="3">No hay registros</td>
                                </tr>
                            @else
                                @foreach ($categoria as $itemcategoria)
                                    <tr>
                                        <td>{{ $itemcategoria->idcategoria }}</td>

                                        <td>{{ $itemcategoria->descripcion }}</td>
                                        <td><a href="{{route ('categoria.edit' ,$itemcategoria->idcategoria)}}" class="btn btn-info btnsm"><i class="fas fa-edit"></i>
                                                Editar</a>
                                            <a href="{{route ('categoria.confirmar' ,$itemcategoria->idcategoria)}}" class="btn btn-danger btnsm"><i class="fas fa-trash"></i>
                                                Eliminar</a>
                                        </td>

                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{ $categoria->links() }}
        </div>
    @endsection
    @section('js')
        <script>
            setTimeout(function() {
                document.querySelector('#mensaje').remove();
            }, 2000);
        </script>
    @endsection