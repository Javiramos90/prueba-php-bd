<?php
require 'includes/funciones_directores.php';
session_start();
$lista_directores = obtener_directores();
// var_dump($lista_directores);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Registrar nueva pelicula</h1>
        <form class="formulario-creacion" action="includes/control_peliculas.php" method="post">
            <input type="hidden" name="metodo" value="crear">
            <div class="campo-form">
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" required>
            </div>
            <div class="campo-form">
                <label for="precio">Precio:</label>
                <input type="text" name="precio" required>
            </div>
            <select name="directores">
                <option value="">Selecciona un director</option>
                <?php
                    while($director = mysqli_fetch_assoc($lista_directores)){ ?>
                    <option value="<?php echo $director['id'] ?>"><?php echo $director['nombre'] . " " .  $director['apellido']; ?></option>
                    <?php 
                    }
                ?>
            </select>
            <div class="campo-form">
                <a href="admin.php" class="nuevoRegistro">Atras</a>
                <input class="verMas sub-formulario" type="submit" value="Enviar datos">
            </div>
        </form>
        <?php
        if(isset($_SESSION['mensaje'])){
            echo"<p>".$_SESSION['mensaje'] . "</p>";
            unset($_SESSION["mensaje"]); //Limpiar el mensaje despues de mostrarlos
        }
        if (isset($_SESSION['datos_insertados'])){
            echo "<h2>Ultima Pelicula Guardada</h2>";
            echo"<ul>";
            foreach($_SESSION['datos_insertados'] as $campo => $valor){
                echo "<li>". ucfirst($campo) .":". htmlspecialchars($valor) ."</li>";
        }        
        echo"</ul>";
        unset($_SESSION["datos_insertados"]);
    }
        ?>
    </div>
</body>

</html>