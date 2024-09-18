<?php

function obtener_peliculas(){
    // importar conexion
    require 'database.php';

    // preparar la consulta
    $sql ="SELECT * FROM pelicula;";

    // realizar la consulta
    $resultado = mysqli_query($conexion, $sql);
    return $resultado;
    
    // devuelve los datos con este elemento
    // $datos = mysqli_fetch_assoc($resultado);    
    // echo'<pre>';
    // var_dump($datos);
    // echo'</pre>';

}
// Crear
function obtener_pelicula_por_id(){


}
function crear_Pelicula($titulo, $precio, $director){
//Importar conexion 
    require 'database.php';

// crear pelicula
$sql = "INSERT INTO pelicula (titulo, precio, id_director) VALUES ('$titulo', $precio, $director)";
$resultado = mysqli_query($conexion, $sql);
return $resultado;
}


// function setPelicula(){
//     require 'database.php';

//     $sql = "INSERT INTO pelicula (titulo, precio, id_director) VALUES ('Torrente Mision en Marbella', 300, 1)";
    
//     $resultado = mysqli_query($conexion, $sql);
// }

function modificar_pelicula(){


}