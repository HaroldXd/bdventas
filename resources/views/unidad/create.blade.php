@extends('layouts.plantilla')
@section('contenido')
    <div class="container">
        <h1>Registro Nuevo</h1>
        <form method="POST" action="{{route('unidad.store')}}">
            @csrf
            <div class="form-group">
                <label for="">Descripción</label>
                <input type="text" class="formcontrol @error('descripcion') isinvalid @enderror" id="descripcion"
                    name="descripcion">
                @error('descripcion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
            <a href="{{ route('cancelar') }}" class="btn btndanger"><i class="fas fa-ban"></i> Cancelar</button></a>
        </form>
    </div>
@endsection
