<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="/mainpage/img/Changan-Logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/mainpage/css/style.index.css">

    <title>Changan Motors</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="\mainpage\img\Changan-Logo (1).png" alt="Logo" width="80" height="40"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('front.index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#modelos">Modelos</a>
                    </li>


                    <li>

                        <div class="dropdown" style="margin-inline-start: 20px ;">
                            <a class="btn btn dropdown-toggle"
                                style="width: 50px; background-color:rgba(0, 0, 0, 0.1) ;      " href="#"
                                role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far  fa-user" style="color: black;"></i>
                            </a>



                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink">
                                <a class="nav-link" href="{{ route('login') }}" id="btnlogin">login</a>
                                @if (Auth::check())
                                  
                                    <script>
                                        const btnlogin = document.getElementById('btnlogin');
                                        btnlogin.remove();


                                       
                                    </script>
                                    <a class="dropdown-item" href="#" id="btnperfil">Perfil</a>
                                    <a class="dropdown-item" href="#" id="btncarrito">Carrito</a>
                                    @if (Auth::user()->role == 0)
                                        <script>
                                            const btnvista = document.getElementById('btnvista');
                                            const btnvista1 = document.getElementById('btnperfil');
                                            const btnvista2 = document.getElementById('btncarrito');
                                            btnvista1.remove();
                                            btnvista2.remove();
                                            btnvista.remove();
                                        </script>
                                          <a class="dropdown-item" href="{{ route('admin.home') }}" id="btnvista">Vista
                                            Administrador</a>
                                    @endif


                                    
                                    <a class="dropdown-item" href="{{ route('salir') }}">Salir</a>
                            </div>
                        </div>
                        @endif
                    </li>
                </ul>


            </div>

    </nav>





    <section class="content">

        @yield('contenido')
    </section>





    <!-- <section class="content contact">
        <h2 class="title">UBICACION</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1976.452307201604!2d-77.9911291538616!3d-7.799922793040187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ade33bab2ec693%3A0xa4b83de9d0499d0c!2s3N%20620%2C%2013300!5e0!3m2!1ses-419!2spe!4v1699500341549!5m2!1ses-419!2spe"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" hight="100" width="100"></iframe>
    </section>
-->

    <footer class="footer">
        <div class="container">
            <div class=footer-row>
                <div class="footer-links">
                    <h4>
                        Compañia
                    </h4>
                    <ul>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Nuestros Servicios</a></li>
                        <li><a href="#">Politica de Privacidad</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>
                        Ayuda </h4>
                    <ul>
                        <li><a href="#">Preguntas</a></li>
                        <li><a href="#">Compras</a></li>
                        <li><a href="#">Envios</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>
                        Cotiza </h4>
                    <ul>
                        <li><a href="#">Modelos</a></li>
                        <li><a href="#">Compras</a></li>
                        <li><a href="#">Envios</a></li>
                    </ul>




                </div>
                <div class="footer-links">
                    <h4>
                        Siguenos
                    </h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>




                </div>

            </div>

        </div>



    </footer>

</body>

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<section>
    @yield ('script')
</section>


</html>
