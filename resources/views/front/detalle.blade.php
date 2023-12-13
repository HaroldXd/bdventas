<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="/mainpage/img/Changan-Logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/mainpage/css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>{{$productos->nombre}}</title>

</head>

<body>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a href="#" class="navbar-brand">

            <img class="main-logo dark animated fadeIn" src="\mainpage\img\Changan-Logo (1).png" height="40" width="80">
            
            


        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarS"
            aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>

        <div class="navbar navbar-expand-lg bg-body-tertiary "  id="navbarS" style="font-size: 20px; padding-left: 20px;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" s>
                    <a href="{{route('front.index')}}" class="nav-link">Inicio</a>
                </li>
                
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link">login</a>
                </li>



            </ul>
        </div>
    </nav>

    
    <header class="content header" >
        <h2 class="title">{{$productos->nombre}}</h2>
        <img src="{{ asset($productos->imagen) }}" alt="">

       
    </header>
    <h2 class="title1" style="align-content: center">Modelo:{{$productos->nombre}}</h2>
    
    <section class="content sau">
        <h2 class="title">Precio</h2>
        <p class="title" >
            {{$productos->precio}}
        </p>
        
        

        
            

        </div>
    </section>

    

    <section class="content price">

       
    </section>

    
</body>
</html>