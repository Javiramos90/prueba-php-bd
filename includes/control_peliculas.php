<?php
require 'funciones_peliculas.php';

if (isset($_POST)) {
    $titulo = $_POST ['titulo'];
    $precio = $_POST ['precio'];
    $director = $_POST ['directores'];

    $respuesta = crear_Pelicula("$titulo", $precio, $director);
    if ($respuesta) {
        echo 'Registro Creado';
    }else {
        echo 'Error:' . mysqli_connect_errno();
    }
}
// echo"<pre>"; 
// var_dump($_POST);
// echo"</pre>";