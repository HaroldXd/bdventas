@extends('layouts.plantilla')
@section('contenido')
<div class="container">
    <h1>Registro Nuevo</h1>
    <form method="POST" action="{{ route('detalleproducto.store') }}">
    @csrf
    <input type="hidden" name="idproducto" value="{{ $producto->idproducto }}">
    <!-- Otros campos del detalle del producto -->
   
        <input type="hidden" name="idproducto" value="{{ $producto->idproducto }}">
        <div class="form-group">
            <label for="llantas">Llantas</label>
            <input type="text" class="form-control" id="llantas" name="llantas">
        </div>
        <div class="form-group">
            <label for="garantia">Garantía</label>
            <input type="text" class="form-control" id="garantia" name="garantia">
        </div>
        <div class="form-group">
            <label for="detalle">Detalle</label>
            <textarea class="form-control" id="detalle" name="detalle"></textarea>
        </div>
        <div class="container">
            <h1>Cargar Imágenes a la Galería</h1>
            <form method="POST" action="{{ route('galeria.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="imagen">Seleccionar Imagen</label>
                    <input type="file" name="imagen" class="form-control" id="imagen" required>
                </div>
                <button type="submit" class="btn btn-primary">Cargar Imagen</button>
            </form>
        </div>




</div>
 <button type="submit" class="btn btn-primary">Guardar Detalle del Producto</button>
<a href="{{ route('cancelar_prod') }}" class="btn btndanger"><i class="fas fa-ban"></i> Cancelar</button></a>
</form>
</div>
@endsection