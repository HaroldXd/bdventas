@extends('layouts.plantilla')
@section('contenido')
    <div class="container">
        <h1>Registro Nuevo</h1>
        <form method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="formcontrol @error('descripcion') isinvalid @enderror" id="descripcion"
                    name="descripcion">
                @error('descripcion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Categoria</label>
                    <select class="form-control" id="idcategoria" name="idcategoria">

                        @foreach ($categorias as $itemcategoria)
                            <option value="{{ $itemcategoria['idcategoria'] }}">{{ $itemcategoria['descripcion'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Unidades</label>
                    <select class="form-control" id="idunidad" name="idunidad">

                        @foreach ($unidades as $itemunidades)
                            <option value="{{ $itemunidades['idunidad'] }}">{{ $itemunidades['descripcion'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Precio</label>
                    <input class="form-control @error('precio') is-invalid @enderror" id="precio" name="precio"
                        style="text-align:right" value ="0">
                    @error('precio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen </label>
                <input type="file" name="imagen" class="form-control " id="imagen">

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Stock</label>
                    <input class="form-control @error('stock') is-invalid @enderror" data-smk-type="decimal" id="stock"
                        name="stock" style="text-align:right" value ="0">
                    @error('stock')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
  <!-- Subformulario de Detalle del Producto -->






    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
    <a href="{{ route('cancelar_prod') }}" class="btn btndanger"><i class="fas fa-ban"></i> Cancelar</button></a>
    </form>
    </div>
@endsection
