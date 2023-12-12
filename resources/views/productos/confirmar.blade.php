@extends('layouts.plantilla')
@section('contenido')
    <div class="container">
        <h1>Desea eliminar registro ? Codigo : {{ $productos->idproducto }} - Nombre : {{ $productos->descripcion }}
        </h1>
        <form method="POST" action="{{ route('productos.destroy', $productos->idproducto) }}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger"><i class="fas facheck-square"></i> SI</button>
            <a href="{{ route('cancelar_prod') }}" class="btn btnprimary"><i class="fas fa-times-circle"></i> NO</button></a>
        </form>
    @endsection
