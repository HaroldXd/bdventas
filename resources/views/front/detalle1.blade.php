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

    </section>
@endsection
