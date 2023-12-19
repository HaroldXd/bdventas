@extends('layouts.plantilla')
@section('titulo')
    <title>Control | Ventas</title>
@endsection
@section('contenido')
    <div class="card">
        <div class="card-header">
            <h3> LISTADO DE MODELOS </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa times"></i>
                </button>
            </div>


            <br>
            <a href="{{ route('productos1.create') }}" class="btn btn-primary"><i class="fas faplus"></i> Nuevo Registro</a>



            <nav class="navbar navbar-light float">
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


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>

                @if (count($productos) <= 0)
                    <tr>
                        <td colspan="3">No hay registros</td>
                    </tr>
                @else
                    @foreach ($productos as $itemproducto)
                        <tr>
                            <td>{{ $itemproducto->idproducto }}</td>

                            <td>{{ $itemproducto->descripcion }}</td>
                            <td>
                                {{ $itemproducto->categorias->descripcion }}
                            </td>
                            <td>{{ $itemproducto->unidades->descripcion }}</td>

                            <td>{{ $itemproducto->precio }}</td>

                            <td>{{ $itemproducto->stock }}</td>

                            <td>
                                <img src="{{ asset($itemproducto->imagen) }}" alt="{{ $itemproducto->title }}"
                                    class="img-fluid" width="100" height="100">

                            </td>

                            <td>
                                <a href="{{ route('productos1.edit', $itemproducto->idproducto) }}"
                                    class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                <a href="{{ route('productos1.confirmar', $itemproducto->idproducto) }}"
                                    class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Eliminar</a>

                             
                           

                            </td>

                        </tr>
                    @endforeach
                @endif
            </tbody>

        </table>
        {{ $productos->links() }}
    </div>
    </div>


@endsection

@section('script')
    <script>
        setTimeout(function() {
            document.querySelector('#mensaje').remove();
        }, 2000);
    </script>
@endsection
