@extends('layouts.plantilla')
@section('contenido')
    <div class="container">
        <h1>Editar Registro</h1>
        <form method="POST" action="{{ route('productos.update', $productos->idproducto) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="">Código</label>
                <input type="text" class="formcontrol" id="id" name="id" value="{{ $productos->idproducto }}"
                    disabled>

                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="formcontrol @error('descripcion') isinvalid @enderror" id="descripcion"
                        name="descripcion" value="{{ $productos->descripcion }}">
                    @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="">Categoria</label>
                    <select class="form-control" id="idcategoria" name="idcategoria">

                        @foreach ($categorias as $itemcategoria)
                            <option value="{{ $itemcategoria->idcategoria }}"
                                {{ $itemcategoria->idcategoria == $productos->idcategoria ? 'selected' : '' }}>
                                {{ $itemcategoria->descripcion }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="">Unidades</label>
                <select class="form-control" id="idunidad" name="idunidad">

                    @foreach ($unidades as $itemunidades)
                        <option value="{{ $itemunidades->idunidad }}"
                            {{ $itemunidades->idunidad == $productos->idunidad ? 'selected' : '' }}>
                            {{ $itemunidades->descripcion }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Precio</label>
                    <input class="form-control @error('precio') is-invalid @enderror" id="precio" name="precio"
                        style="text-align:right" value ="{{ $productos->precio }}">
                    @error('precio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Stock</label>
                    <input class="form-control @error('stock') is-invalid @enderror" data-smk-type="decimal" id="stock"
                        name="stock" style="text-align:right" value ="{{ $productos->stock }}">
                    @error('stock')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <div>
                    <img id="imagen-preview" src="{{ asset($productos->imagen) }}" alt="" style="max-width: 200px; max-height: 200px;">
                </div>
            
                <input type="file" name="imagen" class="form-control" id="imagen" onchange="previewImage(this)">
            </div>
            
            <script>
                function previewImage(input) {
                    var preview = document.getElementById('imagen-preview');
                    var file = input.files[0];
            
                    if (file) {
                        var reader = new FileReader();
            
                        reader.onload = function (e) {
                            preview.src = e.target.result;
                        };
            
                        reader.readAsDataURL(file);
                    }
                }
            </script>
            







    <div>












        @error('descripcion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
    <a href="{{ route('cancelar_prod') }}" class="btn btndanger"><i class="fas fa-ban"></i> Cancelar</button></a>
    </form>
    </div>
@endsection
