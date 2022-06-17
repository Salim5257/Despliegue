$(document).ready(function() {

    let edit = false;
    console.log('jQuery is Working');
    fetchTasksProd();
    fetchTasksNews();

    //Funcion que llama a los datos que estan registrados en mi base de datos.
    function fetchTasksProd() {
        $.ajax({
            url: '../app/product-list.php',
            type: 'GET',
            success: function (response) {
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                        <tr task-prodId="${task.id}">
                            <td>
                                <a href="#editar-prod" class="taskprod-item">${task.id}</a>
                            </td>
                            <td>${task.producto_marca}</td>
                            <td>${task.producto_imagen}</td>
                            <td>${task.producto_nombre}</td>
                            <td>${task.producto_desc}</td>
                            <td>${task.producto_precio}</td>
                            <td>
                                <input type="button" class="taskprod-delete btn btn-danger" style="font-size: 2rem;" value="Borrar">
                            </td>
                        </tr>
                    `
                });
                $('#tasks-prod').html(template);
            }
        });
    }

    //Funcion que me permite eliminar un producto por su id sin necesidad de recargar la pagina.
    $(document).on('click', '.taskprod-delete', function () {
        //Muestro un alert para confirmar eliminar el producto.
        if (confirm('¿Quieres eliminar este producto?')) {
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('task-prodId');
            $.post('../app/product-delete.php', { id }, function (response) {
                fetchTasksProd(response);
            });
        }
    });

    //Funcion que me permite editar un producto sin necesidad de recargar la pagina.
    $(document).on('click', '.taskprod-item', function () {
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('task-prodId');
        $.post('../app/product-single.php', {id}, function (response) {
            const task = JSON.parse(response);
            $('#producto_marca').val(task.producto_marca);
            $('#producto_imagen').val(task.producto_imagen);
            $('#producto_nombre').val(task.producto_nombre);
            $('#producto_desc').val(task.producto_desc);
            $('#producto_precio').val(task.producto_precio);
            $('#task-prodId').val(task.id);
            edit = true;
        })
    });

    //Funcion que llama a los datos que estan registrados en mi base de datos.
    function fetchTasksNews() {
        $.ajax({
            url: '../app/news-list.php',
            type: 'GET',
            success: function (response) {
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                        <tr task-prodId="${task.id}">
                            <td>
                                <a href="#editar-prod" class="taskprod-item">${task.id}</a>
                            </td>
                            <td>${task.producto_marca}</td>
                            <td>${task.producto_imagen}</td>
                            <td>${task.producto_nombre}</td>
                            <td>${task.producto_desc}</td>
                            <td>${task.producto_precio}</td>
                            <td>
                                <input type="button" class="taskprod-delete btn btn-danger" style="font-size: 2rem;" value="Borrar">
                            </td>
                        </tr>
                    `
                });
                $('#tasks-new').html(template);
            }
        });
    }

});