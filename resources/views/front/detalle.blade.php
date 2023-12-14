@extends('front.index')

@section('titulo')
    <title>{{$productos->descripcion}}</title>
@endsection

@section('contenido')
    <header class="content header">
        <div>
            <h2 class="title" style="font-size: 50px">{{$productos->descripcion}}</h2>
        </div>
        <br>
        <img src="{{ asset($productos->imagen) }}" alt="{{$productos->descripcion}}">
        <label for="" style="font-size: 30px">Precio: {{$productos->precio}}</label>
    </header>

    <h2 class="title1" style="text-align: center">Model: {{$productos->descripcion}}</h2>

    <section class="content">
        <div>
            <h3>Product Details:</h3>
            <ul>
                <li><strong>Llantas:</strong> {{$productoDetalle->llantas}}</li>
                <li><strong>Garantia:</strong> {{$productoDetalle->garantia}}</li>
                <li><strong>Detalle:</strong> {{$productoDetalle->detalle}}</li>
            </ul>
        </div>

        <div>
            <h3>Product Gallery:</h3>
            @foreach($productoDetalle->galeria as $imagen)
                <img src="{{ asset($imagen->ruta) }}" alt="Gallery Image">
            @endforeach
        </div>
    </section>
@endsection
