<?php
require 'includes/funciones_directores.php';
$lista_directores = obtener_directores();
var_dump($lista_directores);
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
                    <option value="<?php echo $director['id'] ?>"><?php echo $director['nombre']; ?></option>
                    <?php 
                    }
                ?>
            </select>
            <div class="campo-form">
                <input class="verMas sub-formulario" type="submit" value="Enviar datos">
            </div>
        </form>
    </div>
</body>

</html>