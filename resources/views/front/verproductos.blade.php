@extends('front.index')
@section('titulo')
    <title>Modelos</title>
@endsection
@section('contenido')
@section('modelos')
    <br><br>

    <div class="container" align="center">
        @foreach ($productos as $item)
        <div class="col-md-3">
            <div class="card">
                    <div class="imgBx">
                        <img src="{{ asset($item->imagen) }}" alt="nike-air-shoe">
                    </div>

                    <div class="contentBx">
                        <h2>{{ $item->descripcion }}</h2>
                        <div class="size">
                            <h3>{{ $item->unidades->descripcion }}</h3>
                        </div>
                        <div class="color">
                            <h3>Precio: S/{{ $item->precio }}</h3>
                        </div>
                        <a href="{{ route('user.detalle',$item->idproducto) }}">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endsection
        <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800, 800i, 900&display=swap');




            .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            margin: 0 auto;
            max-width: 1200px; /* Adjust the max-width as needed */
        }

        .container .row {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            margin-bottom: 20px;
        }
            .container .card {
                position: relative;
                width: 280px;
                height: 450px;
                
                background: rgba(0, 0, 0, .5);
                border-radius: 20px;
                border: 50px;
                overflow: hidden;
                margin-bottom: 20px;
                           /* Ancho de cada tarjeta con espacio entre ellas */
             



            }

            .container .card:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background:azure;
                clip-path: circle(150px at 80% 20%);
                transition: 0.5s ease-in-out;
            }

            .container .card:hover:before {
                clip-path: circle(300px at 80% -20%);
            }

            .container .card:after {
                content: "Changan";
                position: absolute;
                top: 30%;
                left: -7%;
                font-size: 5em;
                font-weight: 800;
                font-style: italic;
                color: rgba(255, 255, 255, 0.04);

            }

            .container .card .imgBx {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                z-index: 1000;
                width: 100%;
                height: 100%;
                transition: .5s;
            }

            .container .card:hover .imgBx {
                top: 0%;
                transform: translateY(-15%);
                /* bug  */
            }

            .container .card .imgBx img {
                position: absolute;
                top: 20%;
                left: 8%;
                width: 270px;
            }

            .container .card .contentBx {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 100px;
                text-align: center;
                transition: 0.5s;
                z-index: 90;
            }

            .container .card:hover .contentBx {
                height: 210px;
            }

            .container .card .contentBx h2 {
                position: relative;
                font-weight: 600;
                letter-spacing: 1px;
                color: #fff;
            }

            .container .card .contentBx .size,
            .container .card .contentBx .color {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 8px 20px;
                transition: .5s;
                opacity: 0;
                visibility: hidden;
            }

            .container .card:hover .contentBx .size {
                opacity: 1;
                visibility: visible;
                transition-delay: .5s;
            }

            .container .card:hover .contentBx .color {
                opacity: 1;
                visibility: visible;
                transition-delay: .3s;
            }

            .container .card .contentBx .size h3 {
                color: white;
                font-weight: 50px;
                font-size: 20px;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin-right: 10px;
            }

            .container .card .contentBx .color h3 {
                color: white;
                font-weight: 50px;
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin-right: 10px;
            }

            .container .card .contentBx .size span {
                width: 26px;
                height: 26px;
                text-align: center;
                line-height: 26px;
                font-size: 14px;
                display: inline-block;
                color: #111;
                background: #fff;
                margin: 0 5px;
                transition: .5s;
                color: #111;
                border-radius: 4px;
                cursor: pointer;
            }

            .container .card .contentBx .size span:hover {
                /* other bug */
                background: #B90000;
            }

            .container .card .contentBx .color span {
                width: 20px;
                height: 20px;
                background: #ff0;
                border-radius: 50%;
                margin: 0 5px;
                cursor: pointer;
            }

            .container .card .contentBx .color span:nth-child(2) {
                background: #1BBFE9;
            }

            .container .card .contentBx .color span:nth-child(3) {
                background: #1B2FE9;
            }

            .container .card .contentBx .color span:nth-child(4) {
                background: #080481;
            }

            .container .card .contentBx a {
                display: inline-block;
                padding: 10px 20px;
                background: #fff;
                border-radius: 4px;
                margin-top: 10px;
                text-decoration: none;
                font-weight: 600;
                color: #111;
                opacity: 0;
                transform: translateY(50px);
                transition: .5s;
            }

            .container .card:hover .contentBx a {
                opacity: 1;
                transform: translateY(0px);
                transition-delay: .2s;
            }
        </style>

        <br><br>
    @endsection
