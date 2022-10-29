<?php 
    include_once 'api-peliculas/peliculas.php'; 
    $pelicula = obtenerPelicula($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/movie.css">
    <title><?php echo $pelicula['original_title']; ?></title>
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

    <main class="container">
        <section class="row bg-dark">
            <div class="col-12 col-sm-4">
                <img src="https://image.tmdb.org/t/p/w342/<?php echo $pelicula['poster_path']; ?>" alt="">
            </div>
            <div class="col-12 col-sm-8 text-white my-auto">
                <h2 class="fw-bold mb-5"><?php echo $pelicula['original_title']; ?></h2>
                <p class="mb-5 mw-80"><?php echo $pelicula['overview']; ?></p>
                <p class="generos"><?php 
                $i = 0;
                foreach($pelicula['genres'] as $genero){
                    if($i++ > 0) echo ', ';
                    echo $genero['name'];
                } ?></p>
                <p><span class="fw-bold">Fecha de Lanzamiento: </span><?php echo$pelicula['release_date']; ?></p>
                <p><span class="fw-bold">Producido por: </span><?php 
                $i = 0;
                foreach($pelicula['production_companies'] as $comp){
                    if($i++ > 0) echo ', ';
                    echo $comp['name'] . ' ';
                } ?></p>
            </div>
        </section>
    </main>

        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>