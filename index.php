<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    
    <title>Movies App</title>
</head>
<body>
    <!---  Navbar --->
    
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-logo" href="index.php">MoviesApp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">SERIES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    

    <main class="">
        <div class="pelicula-principal d-flex align-items-end">
            <div class="container">
                <h3 class="titulo text-white display-4 mb-4 fw-bold">Interestellar</h3>
                <p class="descripcion text-white">
                Un grupo de científicos y exploradores, encabezados por Cooper, se embarcan en un viaje espacial para encontrar un lugar con las condiciones necesarias para reemplazar a la Tierra y comenzar una nueva vida allí.
                </p>
            </div>
        </div>
        <div class="peliculas-recomendadas container">
            <div class="titulo">
                <h3 class="text-white">Mejor Calificadas</h3>
            </div>
            <div class="contenedor-principal">
                
                <button role="button" id="flecha-izq" class="flecha-izq"><i class="fas fa-angle-left"></i></button>
                
                <div class="contenedor-carousel">
                    <div class="carousel">
                            <?php 
                            include_once 'api-peliculas/peliculas.php';
                            $peliculas = obtenerPeliculas();
    
                            for($i = 0; $i<14; $i++){
                                
                                echo '<div class="pelicula">
                                <a href="pelicula.php?id='.$peliculas['results'][$i]['id'].'"><img src="https://image.tmdb.org/t/p/w185/'. $peliculas['results'][$i]['poster_path'] .'" alt=""></a>
                                <div class="titulo-pelicula">'. $peliculas['results'][$i]['original_title'] .'</div>
                                </div>';
                            }
                            ?>
                    </div>
                </div>

                <button role="button" id="flecha-der" class="flecha-der"><i class="fas fa-angle-right"></i></button>
            </div>

        </div>

        <div class="peliculas-recomendadas container">
            <div class="titulo">
                <h3 class="text-white">Más Vistas</h3>
            </div>
            <div class="contenedor-principal">
                
                <button role="button" id="flecha-izq" class="flecha-izq"><i class="fas fa-angle-left"></i></button>
                
                <div class="contenedor-carousel">
                    <div class="carousel">
                            <?php 
                            include_once 'api-peliculas/peliculas.php';
                            $peliculas = obtenerPeliculasPopulares();
    
                            for($i = 0; $i<14; $i++){
                                
                                echo '<div class="pelicula">
                                <a href="pelicula.php"><img src="https://image.tmdb.org/t/p/w185/'. $peliculas['results'][$i]['poster_path'] .'" alt=""></a>
                                <div class="titulo-pelicula">'. $peliculas['results'][$i]['original_title'] .'</div>
                                </div>';
                            }
                            ?>
                    </div>
                </div>

                <button role="button" id="flecha-der" class="flecha-der"><i class="fas fa-angle-right"></i></button>
            </div>

        </div>

    </main>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>