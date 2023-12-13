@extends('layouts.plantilla')
@section('contenido')
    <div class="container">
        <h1>Desea eliminar registro ? Codigo : {{ $categoria->idcategoria }} - Descripcion : {{ $categoria->descripcion }}
        </h1>
        <form method="POST" action="{{ route('categoria.destroy', $categoria->idcategoria) }}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger"><i class="fas facheck-square"></i> SI</button>
            <a href="{{ route('cancelar') }}" class="btn btnprimary"><i class="fas fa-times-circle"></i> NO</button></a>
        </form>
    @endsection
