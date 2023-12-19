@extends('front.index')
@section('contenido')
<section>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/mainpage/img/Banner-Ficha-GRAN-SUPER-VAN.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>My Caption Title (1st Image)</h5>
                    <p>The whole caption will only show up if the screen is at least medium size.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/mainpage/img/2023-11-13-banner-desktop-1500x600jpg.jpg"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/mainpage/img/2023-08-24-newcs55pplus.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/mainpage/img/2023-09-14-unitjpg.jpg" alt="Third slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
   <h2 class="title">Nosotros</h2>
        <p> CONSTRUCTORA & MULTISERVICIOS RVC E.I.R.L es una empresa que se dedica a la compra y venta independiente de
            autos Changan, una marca china de reconocida calidad y prestigio en el mercado automotriz. La empresa
            adquiere los vehículos directamente de la sucursal de Derco en Lima, el distribuidor oficial de Changan en
            Perú, y los ofrece a los clientes de la región de Huamachuco, donde tiene su local comercial. Para optimizar
            el proceso de compra y venta, la empresa requiere un programa web que le permita gestionar las reservas, los
            pagos, las entregas y el stock de los autos en tiempo real. El programa web también mejorará la atención al
            cliente y el control de calidad. CONSTRUCTORA & MULTISERVICIOS RVC E.I.R.L es una empresa innovadora,
            eficiente y comprometida con la satisfacción de sus clientes.
        </p>
        @endsection