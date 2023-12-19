@extends('front.index')

@section('titulo')
<title>Sucursales</title>
@endsection
@section('contenido')
    <h2 class="title" id="modelos">Sucursales</h2>

  
    
        <div class="row row-cols-1 row-cols-md-2 g-4">

            @foreach ($sucursales as $itemproducto)
                <div class="card  mb-3" style="max-width: 18rem; margin-inline-end: 3% ; margin-inline-start: 3%; border-color: black; text-align: center">
                    <div class="card-header bg-transparent">{{ $itemproducto->descripcion }}</div>
                    <div class="card-body text">
                        <h5 class="card-head">Dirección:
                            <br>
                            {{ $itemproducto->direccion }}</h5>
                        <p class="card-text">
                            Servicios:
                            <br>
                            {{ $itemproducto->idservicio }}
                            <br>
                            Provincia:
                            <br>
                            {{ $itemproducto->provincia->nombre }}
                            <br>
                            Distrito:
                            <br>
                            {{ $itemproducto->distrito->nombre }}
                            <br>
                            Horarios:
                            <br>
                            {{ $itemproducto->idhorario }}

                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-success">
                        <td><a href="https://www.google.com/maps/dir/Current+Location/{{ $itemproducto->ubicacion }}"
                                target="_blank">Cómo Llegar</a></td>
                    </div>
                </div>
            @endforeach



        </div>


  
@endsection
