let botones_eliminar = document.querySelectorAll('.btn-eliminar');
let botones_modificar = document.querySelectorAll('.btn-modificar')

botones_eliminar.forEach(boton => {
    boton.addEventListener('click', event=> {
        if(confirm('¿Seguro que quieres eliminar la pelicula?')){
        let botonSeleccionado = event.currentTarget;
        let id = botonSeleccionado.getAttribute('data-id');
        let titulo = botonSeleccionado.getAttribute('data-nombre');
        if(confirm(`¿Seguro que quieres eliminar ${titulo}?`))
        fetch('includes/control_peliculas.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'id=' + id + '&metodo=delete' 
            
        })
        .then(response => response.json())
        .then(data => {
            if(data.success){
                alert('Registro eliminado');
                // eleminar fila de la tabla
                const fila = document.getElementById('fila-${id}')
                if(fila){
                    fila.remove();
                    // alert('fila eliminada');
                }
            }else{
                alert('Error al eliminar:' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ocurrio un error al eliminar');
        });
    }
    
    })

});

botones_modificar.forEach(boton => {
    boton.addEventListener('click', event => {
        let botonSeleccionado = event.currentTarget;
        let id = botonSeleccionado.getAttribute('data-id');
        console.log('modificar', id);
        fetch('includes/control_peliculas.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'id=' + id + '&metodo=modificar' 
    })
    .then(response => response.json())
    .then(data => {
        if(data.success){
            alert('Registro modificado');
            // eleminar fila de la tabla
            const fila = document.getElementById('fila-${id}')
            if(fila){
                fila.remove();
                // alert('fila eliminada');
            }
        }else{
            alert('Error al modificar:' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrio un error al modificar');
    });
}

)})

