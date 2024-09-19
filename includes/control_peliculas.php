<?php
session_start();

require 'funciones_peliculas.php';

$metodo = '';


if(isset($_POST) && isset($_POST['metodo']) && $_POST['metodo'] ){
    $metodo = $_POST['metodo'];
}

if ($metodo === 'crear') {
    $titulo = $_POST ['titulo'];
    $precio = $_POST ['precio'];
    $director = $_POST ['directores'];

    $respuesta = crear_Pelicula("$titulo", $precio, $director);
    
    if ($respuesta) {
       $_SESSION['mensaje'] = "Los datos se insertaron correctamente";
       $_SESSION['datos_insertados'] = [
        'titulo'=> $titulo,
        'precio'=> $precio,
        'director'=> $director
       ];
    }else {
    $_SESSION['mensaje'] = 'Error:' . mysqli_connect_errno();
    }

header('Location: ../crearPelicula.php');
exit();
}

// var_dump($_REQUEST);

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
// // Lee el contenido raw del body
// $input = file_get_contents('php://input');

// // Parsea los datos
// parse_str($input, $data);

if($metodo === 'delete'){
    $id = $_POST['id']; 
    // llama a eliminar pelicula
    $respuesta = eliminar_pelicula($id);
    if ($respuesta){
        // la pelicula ha sido eliminada
        echo json_encode(['success' => true, 'message'=> 'pelicula eliminada']);
    }else{
        // la base de datos nos devuelve un error
        echo json_encode(['success' => false, 'message'=> 'Datos invalidos']);
    }
    }else{
        // no vienen los datos necesarios
        echo json_encode(['success' => false, 'message'=> 'Metodo no permitido']);
    }



    if($metodo === 'modificar'){
        $id = $_POST['id'];
    /**
     * llamar a crear peliculas
     * pasarle el id de la pelicula a modificar
     */
        header("Location: ../crearPelicula.php?id=$id");
        exit();
    }








// echo"<pre>"; 
// var_dump($_POST);
// echo"</pre>";