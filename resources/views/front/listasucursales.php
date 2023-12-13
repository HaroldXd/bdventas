@extends('front.index')
@section('contenido')

<h2 class="title" id="modelos">MODELOS</h2>
@foreach ($productos as $itemproducto)
<div class="card1">

    <div class="row row-cols-1 row-cols-md-2 g-4">

        <a class="nav-link active" aria-current="page" href="{{ route('front.detalle', $itemproducto->idproducto) }}">
            <DIV class="card text-bg-light mb-3">

                <img src="{{ asset($itemproducto->imagen) }}" alt="{{ $itemproducto->title }}"
                    class="rounded mx-auto d-blocks" width="200" height="100">
                <div class="container">


                    <h5 class="card-head">{{ $itemproducto->nombre }}</h5>
                    <p class="card-text">{{ $itemproducto->categorias->descripcion }}
                        <br>
                        S/. {{ $itemproducto->precio }}
                    </p>

                </DIV>
            </div>
        </a>


    </div>


</div>
@endforeach