<?php

function obtenerPeliculas(){
    $res = file_get_contents('https://api.themoviedb.org/3/movie/top_rated?api_key=17b2a132c4f394e6b1f4fd86bb080027');
    return json_decode($res, true);
}

function obtenerPeliculasPopulares(){
    $res = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=17b2a132c4f394e6b1f4fd86bb080027');
    return json_decode($res, true);
}

function obtenerPelicula($id){
    $pelicula = file_get_contents('https://api.themoviedb.org/3/movie/'. $id .'?api_key=17b2a132c4f394e6b1f4fd86bb080027&language=es-ES');

    return json_decode($pelicula, true);
}

?>