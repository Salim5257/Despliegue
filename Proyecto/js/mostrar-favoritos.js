$(document).ready(function () {

    verFavoritos();
    searchFavs();

    function verFavoritos() {
        //Usamos ajax para obtener los datos de la base de datos
        $.ajax({
            url: '../favoritos/favs-list.php', //le pasamos la url del archivo php que extrae los datos de la base de datos por medio de consultas
            type: 'GET', //Indicamos el método a utilizar, POST para enviar o GET en este caso para recibir
            success: function (response) {
                const datos = JSON.parse(response); // Analiza una cadena de texto como JSON, transformando el valor producido por el análisis a JSON
                let template = ''; //Creamos una variable template vacia, a la que añadiremos las filas de la tabla con los datos
                datos.forEach(task => {
                    template += `
                        <tr task-prodId="${task.id}" style="border-bottom: white solid 10px;">
                            <td style="justify-content: center; text-align: center; vertical-align: middle; width: 10%;">
                                <div>
                                    <img src="../images/${task.producto_imagen}" style="height: 35vh; width: 15vw; justify-content: center; text-align: center;" alt="">
                                </div>
                            </td>
                            <td style="font-size: 20px; justify-content: center; text-align: center; vertical-align: middle; color: white; width: 10%;">${task.producto_nombre}</td>
                            <td style="font-size: 20px; justify-content: center; text-align: center; vertical-align: middle; color: white; width: 30%;">${task.producto_desc}</td>
                            <td style="font-size: 20px; justify-content: center; text-align: center; vertical-align: middle; color: white; width: 10%;">${task.producto_precio} €</td>
                            <td style="justify-content: center; text-align: center; vertical-align: middle; width: 5%;">
                                <form action="../carrito/cart-add.php" method="post">
                                    <input type="hidden" name="id_producto" value="${task.id}"></input>
                                    <input type="hidden" name="producto_imagen" value="${task.producto_imagen}"></input>
                                    <input type="hidden" name="producto_nombre" value="${task.producto_nombre}"></input>
                                    <input type="hidden" name="producto_desc" value="${task.producto_desc}"></input>
                                    <input type="hidden" name="producto_precio" value="${task.producto_precio}"></input>
                                    <button type="submit" class="btn btn-success" style="font-size: 2rem; margin: 1rem;"><i class="fas fa-shopping-cart"></i></button>
                                </form>
                                <button type="submit" class="taskprod-delete btn btn-danger" style="font-size: 2rem; width: 4rem;"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>
                    `
                }); //Estos son los datos a mostrar
                $('#mostrarFavs').html(template); //Los datos que se muestren apareceran en la parte que contenga la id #mostrar
            }
        });
    }

    //Funcion que me permite eliminar un producto por su id sin necesidad de recargar la pagina.
    $(document).on('click', '.taskprod-delete', function () {
        //Muestro un alert para confirmar eliminar el producto.
        if (confirm('¿Quieres eliminar este producto?')) {
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('task-prodId');
            $.post('favs-delete.php', {id}, function (response) {
                location.reload();
                verFavoritos(response);
            });
        }
    });

    //Favs

    function searchFavs() {

        $('#searchFavs').keyup(function() { 
            if($('#searchFavs').val()) {
            let search = $('#searchFavs').val();
            $.ajax({
                url: '../app/search-php/search-favs.php', 
                data: {search}, 
                type: 'POST', 
                success: function (response) {
                if(!response.error) { 
                    let datos = JSON.parse(response);
                    let template = '';
                    datos.forEach(dato => {
                    template += `<tr>
                                    <td><a href='#'>${dato.producto_nombre}</a></td>
                                </tr>`
                    });
                    $('#resultado').show(); 
                    $('#contenedor').html(template);
                }
                } 
            })
            }
        });  

        $('#searchFavs').keydown(function() { 
            if($('#searchFavs').val()) {
            let search = $('#searchFavs').val(); 
            $.ajax({
                url: '../app/search-php/search-favs.php',
                data: {search}, 
                type: 'POST', 
                success: function (response) {
                if(!response.error) {
                    let datos = JSON.parse(response);
                    let template = '';
                    datos.forEach(dato => {
                    template += ``
                    });
                    $('#resultado').hide();
                    $('#contenedor').html(template);
                }
                } 
            })
            }
        });
    } 
})