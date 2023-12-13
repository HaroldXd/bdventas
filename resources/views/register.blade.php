<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Changan</title>
    <link rel="icon" href="/mainpage/img/Changan-Logo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/loginres/css/login.css">
    <link rel="stylesheet" href="/loginres/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />


</head>

<body class="login">



<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/front">
      <img src="{{asset('/mainpage/img/Changan-Logo.png')}}" alt="Logo" width="100" height="50" class="d-inline-block align-text-top" >

    </a>
    <a href="/front" class="nav-link-1">Home</a>
  </div>
</nav>

<!-- As a heading -->

    <div class="logo">
        <img src="{{asset('/mainpage/img/Changan-Logo (1).png')}}" alt="Changan" width="200" height="100">
        <p> </p>
        
    </div>
    <div class="content">

        <form method="POST" action="{{ route ('register') }}">
            @csrf
            <h4 class="label-titles">Registro</h4>
            <div class="form-group">
                <div class="form-group">
                    <label class="label-subtitles">
                        EMAIL:
                    </label>
                    <div class="input-icon">
                        <i class="fas fa-envelope"></i>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Ingrese su correo electrónico" id="email" name="email" value="{{ old('email') }}" />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <label class="label-subtitles">
                USUARIO:</label>
                <div class="input-icon">
                    <i class="fas fa-user"></i>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Ingrese usuario" id="name" name="name" value="{{old('name')}}" />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="label-subtitles">CONTRASEÑA:</label>
                <div class="input-icon">
                    <i class="fas fa-lock"></i>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Ingrese contraseña" id="password" name="password" value="{{old('password')}}" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="label-subtitles">CONFIRMAR CONTRASEÑA:</label>
                <div class="input-icon">
                    <i class="fas fa-lock"></i>
                    <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" placeholder="Confirme la contraseña" id="password_confirmation" name="password_confirmation" />
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
           


            <hr />
            <div class="form-actions">
                <button class=" btn-ingresar">
                    Registrar </button>
            </div>
            <div class="linebreak">
                O
            </div>


            <div class="form-actions" style="align-content: center" align="center">
                <a href="/login">Inicia Sesion</a>
            </div>
         
        
            
        </form>
    </div>
    <div class="copyright">
        2023 &copy; Changan
    </div>
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/dist/js/adminlte.min.js"></script>

</body>

</html>