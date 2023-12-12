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
                        <img class="d-block w-100" src="mainpage/img/Banner-Ficha-GRAN-SUPER-VAN.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>My Caption Title (1st Image)</h5>
                            <p>The whole caption will only show up if the screen is at least medium size.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="mainpage/img/2023-11-13-banner-desktop-1500x600jpg.jpg"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="mainpage/img/2023-08-24-newcs55pplus.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="mainpage/img/2023-09-14-unitjpg.jpg" alt="Third slide">
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
            <div class="contenedor1">
                <div class="container-fluid mt-5 wow fadeInUp" style="visibility: visible;">
                    <div
                        class="row content-box justify-content-end justify-content-md-start justify-content-lg-start align-items-center">
                        <div class="col-12 offset-md-0 offset-lg-0 col-md-6 col-lg-6 p-0 wow fadeInLeft"
                            style="visibility: visible;">
                            <img src="mainpage/img/blog-cabecera.webp" class="imagen-content" alt="MG CARE">
                        </div>
                        <div class="col-12 col-md-5 col-lg-4 offset-lg-1 content mt-4 mt-md-0 mt-lg-0 mb-5 mb-md-0">
                            <h6 class="wow fadeIn" style="visibility: visible;">Conoce los 5 autos top de Changan</h6>
                            <div class="titulo wow fadeIn boldTwoWord" data-wow-delay="0.5s"
                                style="visibility: visible; animation-delay: 0.5s;">LO MEJOR EN LO QUE HACEMOS</div>
                            <p class="bajada wow fadeIn" data-wow-delay="0.8s"
                                style="visibility: visible; animation-delay: 0.8s;">Los autos chinos son cada vez más populares en todo el mundo, entre las personas que tienen un presupuesto limitado o los que quieren un producto que ofrezca una sensación de libertad sin hacer mucho esfuerzo.

                                Aquí analizaremos las ventajas y desventajas de comprar un auto chino en el Perú, basado en nuestro ranking de modelos de la marca Changan, una de las marcas chinas más populares del mercado peruano.
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
                        style="visibility: visible; animation-delay: 0.8s;">La Changan CS15 es un vehículo crossover compacto que fue lanzado al mercado en el 2017. Este modelo es fabricado por Changan Automobile, una empresa china que se dedica a la producción de automóviles desde 1959. La CS15 es un modelo importante en la gama de vehículos de la compañía, y ha recibido una gran cantidad de comentarios  positivos desde su lanzamiento.</p>
                        <div>
                            <button type="button" class="btn btn-outline-secondary">Saber más</button>
                        </div>
                </div>
                <div class="col-12 offset-lg-1 col-md-6 col-lg-6 p-0 order-0 order-md-0 order-lg-0 wow fadeInRight"
                    style="visibility: visible;">
                    <img src="mainpage/img/blog-cabecera-cs15.webp"
                        class="imagen-content" alt="UNIVERSO DIGITAL">
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
                    <button style="align-content: center" type="button" class="btn btn-outline-secondary">Saber más</button>
                </div>
                </div>
            </div>
        </section>
        <section>
            
        </section>






    </body>
@endsection
<section>
    @section('js')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    @endsection
</section>
