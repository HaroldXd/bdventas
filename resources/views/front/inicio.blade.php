@extends('front.index')
@section('contenido')
    <title>
        Inicio
    </title>

    <body>
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
        <section>
            <br><br>
            <h2 style="text-align: center;">NUEVOS MODELOS</h2>
            <br><br>
            <div class="container">
                @foreach ($productos as $index => $item)
                    @if ($index < 4) 
                        <div class="col-md-4">
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
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            
            <style>
                @import url('https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800, 800i, 900&display=swap');




                .container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                    /* Espacio entre las columnas */
                }

                .container .card {
                    position: relative;
                    width: 320px;
                    height: 450px;

                    background: rgba(0, 0, 0, .5);
                    border-radius: 20px;
                    border: 50px;
                    overflow: hidden;

                    /* Ancho de cada tarjeta con espacio entre ellas */
                    margin-bottom: 20px;



                }

                .container .card:before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: azure;
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


        </section>
        <section>
            <div class="contenedor1">
                <div class="container-fluid mt-5 wow fadeInUp" style="visibility: visible;">
                    <div
                        class="row content-box justify-content-end justify-content-md-start justify-content-lg-start align-items-center">
                        <div class="col-12 offset-md-0 offset-lg-0 col-md-6 col-lg-6 p-0 wow fadeInLeft"
                            style="visibility: visible;">
                            <img src="/mainpage/img/blog-cabecera.webp" class="imagen-content" alt="MG CARE">
                        </div>
                        <div class="col-12 col-md-5 col-lg-4 offset-lg-1 content mt-4 mt-md-0 mt-lg-0 mb-5 mb-md-0">
                            <h6 class="wow fadeIn" style="visibility: visible;">Conoce los 5 autos top de Changan</h6>
                            <div class="titulo wow fadeIn boldTwoWord" data-wow-delay="0.5s"
                                style="visibility: visible; animation-delay: 0.5s;">LO MEJOR EN LO QUE HACEMOS</div>
                            <p class="bajada wow fadeIn" data-wow-delay="0.8s"
                                style="visibility: visible; animation-delay: 0.8s;">Los autos chinos son cada vez más
                                populares en todo el mundo, entre las personas que tienen un presupuesto limitado o los que
                                quieren un producto que ofrezca una sensación de libertad sin hacer mucho esfuerzo.

                                Aquí analizaremos las ventajas y desventajas de comprar un auto chino en el Perú, basado en
                                nuestro ranking de modelos de la marca Changan, una de las marcas chinas más populares del
                                mercado peruano.
                                para los conductores.</p>
                            <div>
                                <button type="button" class="btn btn-outline-secondary">Saber más</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <SECtion class="contenedor1">
            <div
                class="row content-box justify-content-start justify-content-md-end justify-content-lg-end align-items-center ">
                <div
                    class="col-12 col-md-6 col-lg-4 content mt-4 mt-md-0 mt-lg-0 order-1 order-md-0 order-lg-0 text-start ">
                    <h6 class="wow fadeIn" style="visibility: visible;">Changan CS15</h6>
                    <div class="titulo wow fadeIn boldTwoWord" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s;"><strong></strong></div>
                    <p class="bajada wow animated" data-wow-delay="0.8s"
                        style="visibility: visible; animation-delay: 0.8s;">La Changan CS15 es un vehículo crossover
                        compacto que fue lanzado al mercado en el 2017. Este modelo es fabricado por Changan Automobile, una
                        empresa china que se dedica a la producción de automóviles desde 1959. La CS15 es un modelo
                        importante en la gama de vehículos de la compañía, y ha recibido una gran cantidad de comentarios
                        positivos desde su lanzamiento.</p>
                    <div>
                        <button type="button" class="btn btn-outline-secondary">Saber más</button>
                    </div>
                </div>
                <div class="col-12 offset-lg-1 col-md-6 col-lg-6 p-0 order-0 order-md-0 order-lg-0 wow fadeInRight"
                    style="visibility: visible;">
                    <img src="/mainpage/img/blog-cabecera-cs15.webp" class="imagen-content" alt="UNIVERSO DIGITAL">
                </div>
            </div>
        </SECtion>
        <section class="header2">
            <div class="feature-models" data-v-4875077f="" data-v-eab28904="">
                <div class="row title-featured-container" data-v-4875077f="">
                    <div class="col-sm-12 col-md-12 col-lg-12" data-v-4875077f="">
                        <h2 class="featured-title" data-v-4875077f="">BENEFICIOS CHANGAN</h2>
                    </div>
                </div>
                <div class="row main-container-feature" data-v-4875077f="">
                    <div class="feature-column col-md-3 col-lg-*" data-v-4875077f="">
                        <div data-v-4875077f=""><img
                                data-src="https://derco-pe-prod.s3.amazonaws.com/images/carcontent/Experiencia.jpg"
                                alt="EXPERIENCIA" class="img-element lozad" data-v-4875077f=""
                                src="https://derco-pe-prod.s3.amazonaws.com/images/carcontent/Experiencia.jpg"
                                data-loaded="true"></div>
                        <div class="body-text" data-v-4875077f="">
                            <h3 data-v-4875077f="">EXPERIENCIA</h3>
                            <p data-v-4875077f="">33 Años fabricando vehículos con diseños inspirados en características de
                                alta tecnología vanguardista, fáciles de usar e intuitivas para los conductores.</p>
                        </div> <!---->
                    </div>
                    <div class="feature-column col-md-3 col-lg-*" data-v-4875077f="">
                        <div data-v-4875077f=""><img
                                data-src="https://derco-pe-prod.s3.amazonaws.com/images/carcontent/tecnologia.jpg"
                                alt="TECNOLOGÍA" class="img-element lozad" data-v-4875077f=""
                                src="https://derco-pe-prod.s3.amazonaws.com/images/carcontent/tecnologia.jpg"
                                data-loaded="true"></div>
                        <div class="body-text" data-v-4875077f="">
                            <h3 data-v-4875077f="">TECNOLOGÍA</h3>
                            <p data-v-4875077f="">Más de cinco mil patentes y ciento diez premios por su especialidad en
                                última generación tecnológica.</p>
                        </div> <!---->
                    </div>
                    <div class="feature-column col-md-3 col-lg-*" data-v-4875077f="">
                        <div data-v-4875077f=""><img
                                data-src="https://derco-pe-prod.s3.amazonaws.com/images/carcontent/i-d.jpg"
                                alt="LIDERES EN I+D" class="img-element lozad" data-v-4875077f=""
                                src="https://derco-pe-prod.s3.amazonaws.com/images/carcontent/i-d.jpg" data-loaded="true">
                        </div>
                        <div class="body-text" data-v-4875077f="">
                            <h3 data-v-4875077f="">LIDERES EN I+D</h3>
                            <p data-v-4875077f="">Una inversión de 4,7 billones de dólares en los próximos cinco años
                                convierten a Changan en la número uno en Investigación y Desarrollo.</p>
                        </div> <!---->
                    </div>
                    <div class="feature-column col-md-3 col-lg-*" data-v-4875077f="">
                        <div data-v-4875077f=""><img
                                data-src="https://derco-pe-prod.s3.amazonaws.com/images/carcontent/motores.jpg"
                                alt="MOTORES" class="img-element lozad" data-v-4875077f=""
                                src="https://derco-pe-prod.s3.amazonaws.com/images/carcontent/motores.jpg"
                                data-loaded="true"></div>
                        <div class="body-text" data-v-4875077f="">
                            <h3 data-v-4875077f="">MOTORES</h3>
                            <p data-v-4875077f="">La Tecnología en sus motores Bluecore ha sido desarrollada en el Centro
                                de Investigación y Desarrollo del Reino Unido</p>
                        </div> <!---->
                    </div>
                </div>
                <div style="display:flex; justify-content:center;">
                    <button style="align-content: center" type="button" class="btn btn-outline-secondary">Saber
                        más</button>
                </div>
            </div>
            </div>
        </section>
        <section>

        </section>





        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>
@endsection
