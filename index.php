<?php
require 'includes/funciones.php';
$consulta = obtener_peliculas();
$insetar =  setPelicula();
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
        <h1>Peliculas</h1>
        <div class="listado-peliculas">
            <?php 
            while ($datos = mysqli_fetch_assoc($consulta)):?>
            <section class="pelicula">
                <p><?php echo htmlspecialchars($datos['titulo'])?></p>
                <p class ="precio"> <b><?php echo htmlspecialchars($datos['precio'])?> €</b></p>
                <button>Ver mas</button>
            </section>
            <?php endwhile;?>
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
</body>

</html>