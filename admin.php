<?php
require 'includes/funciones_peliculas.php';
$consulta = obtener_peliculas();
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\estilos.css">
    <title>Cine</title>
</head>

<body>
    <div class="container"></div>
    <header>

    </header>
    <main>
        <h1>Administracion</h1>
        <table class="tabla-peliculas">
            <thead>
              <th>ID</th>
              <th>TITULO</th>
              <th>PRECIO</th>
              <th>MODIFICAR</th>
              <th>ELIMINAR</th>
            </thead>
            <?php 
            while($datos = mysqli_fetch_assoc($consulta)):?>
             <tr id="fila<?php echo $pelicula['id'];?>">
                <td><?php echo htmlspecialchars($datos['id'])?></td>
                 <td><?php echo htmlspecialchars($datos['titulo'])?></td>
                 <td class ="precio"> <b><?php echo htmlspecialchars($datos['precio'])?> €</b></td>
                 <td class="td-icono"><button class="btn-eliminar" data-nombre = "<?php echo $datos['titulo'];?>" data-id = <?php echo $datos['id'];?>><b>Eliminar</b></button></td>
                 <td><button 
                 class="btn-modificar" 
                 data-nombre = <?php echo $datos['titulo'];?>
                 data-id ="<?php echo $datos['id'];?>" 
                 <b>Modificar</b></button></td>
            </tr>
               
            <?php endwhile;?>
        </table>
            <!-- <section class="pelicula">
                <p>Star Wars II: La Guerra de los Clones</p>
                <p>10.00 €</p>
                <button>Ver mas</button>
            </section>            
            <section class="pelicula">
                <p>Star Wars III: La Venganza de los Sith</p>
                <p>10.00 €</p>
                <button>Ver mas</button>
            </section>
            <section class="pelicula">
                <p>Star Wars IV: Una Nueva Esperanza</p>
                <p>10.00 €</p>
                <button>Ver mas</button>
            </section>
            <section class="pelicula">
                <p>Star Wars V: La Guerra de las Galaxias</p>
                <p>10.00 €</p>
                <button>Ver mas</button>
            </section>
            <section class="pelicula">
                <p>Star Wars VI: El Retorno del Jedi</p>
                <p>10.00 €</p>
                <button>Ver mas</button>
            </section> 
            <section class="pelicula">
                <p>Star Wars V: La Guerra de las Galaxias</p>
                <p>10.00 €</p>
                <button>Ver mas</button>
            </section>
            <section class="pelicula">
                <p>Star Wars V: La Guerra de las Galaxias</p>
                <p>10.00 €</p>
                <button>Ver mas</button>
            </section>
            <section class="pelicula">
                <p>Star Wars V: La Guerra de las Galaxias</p>
                <p>10.00 €</p>
                <button>Ver mas</button>
            </section> -->
        </div>

    </main>
    <footer>


    </footer>
    <script src="js/admin.js"></script>
</body>

</html>
<!-- $datos['id']?>><b>Eliminar</b></button></td>
                 <td><button><b>Modificar</b></button></td> -->