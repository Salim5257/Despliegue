$(document).ready(function() {

    let edit = false;
    console.log('jQuery is Working');
    fetchTasks();
    fetchTasksReview();
    fetchTasksContact();

    /* USUARIO */

    //Funcion que llama a los datos que estan registrados en mi base de datos.
    function fetchTasks() {
        $.ajax({
            url: '../app/user-list.php',
            type: 'GET',
            success: function (response) {
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                        <tr taskId="${task.id}">
                            <td><a href="#editar-user" class="task-item">${task.id}</td></a>
                            <td>${task.nombre}</td>
                            <td>${task.apellido}</td>
                            <td>${task.dni}</td>
                            <td>${task.telefono}</td>
                            <td>${task.correo}</td>
                            <td>${task.contrasena}</td>
                            <td>
                                <input type="button" class="task-delete btn btn-danger" style="font-size: 2rem;" value="Borrar">
                            </td>
                        </tr>
                    `
                });
                $('#tasks').html(template);
            }
        });
    }

    //Funcion que me permite eliminar un usuario por su id sin necesidad de recargar la pagina.
    $(document).on('click', '.task-delete', function () {
        //Muestro un alert para confirmar eliminar el usuario.
        if (confirm('¿Quieres eliminar este usuario?')) {
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('taskId');
            $.post('../app/user-delete.php', {id}, function (response) {
                fetchTasks();
            });
        }
    });

    //Funcion que me permite editar un usuario sin necesidad de recargar la pagina.
    $(document).on('click', '.task-item', function () {
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('taskId');
        $.post('../app/user-single.php', {id}, function (response) {
            const task = JSON.parse(response);
            $('#nombre').val(task.nombre);
            $('#apellido').val(task.apellido);
            $('#dni').val(task.dni);
            $('#telefono').val(task.telefono);
            $('#correo').val(task.correo);
            $('#contrasena').val(task.contrasena);
            $('#taskId').val(task.id);
            edit = true;
        })
    });

    /* RESEÑAS */

    //Funcion que llama a los datos que estan registrados en mi base de datos.
    function fetchTasksReview() {
        $.ajax({
            url: '../app/review-list.php',
            type: 'GET',
            success: function (response) {
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                        <tr task-reviewId="${task.id}">
                            <td>
                                <a href="#editar-review" class="taskreview-item">${task.id}</a>
                            </td>
                            <td>${task.reseña_comentario}</td>
                            <td>${task.reseña_nombre}</td>
                            <td>${task.reseña_imagen}</td>
                            <td>
                                <input type="button" class="taskreview-delete btn btn-danger" style="font-size: 2rem;" value="Borrar">
                            </td>
                        </tr>
                    `
                });
                $('#tasks-review').html(template);
            }
        });
    }

    //Funcion que me permite eliminar una reseña por su id sin necesidad de recargar la pagina.
    $(document).on('click', '.taskreview-delete', function () {
        //Muestro un alert para confirmar eliminar la reseña.
        if (confirm('¿Quieres eliminar esta reseña?')) {
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('task-reviewId');
            $.post('../app/review-delete.php', {id}, function (response) {
                fetchTasksReview();
            });
        }
    });

    //Funcion que me permite editar una reseña sin necesidad de recargar la pagina.
    $(document).on('click', '.taskreview-item', function () {
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('task-reviewId');
        $.post('../app/review-single.php', {id}, function (response) {
            const task = JSON.parse(response);
            $('#reseña_comentario').val(task.reseña_comentario);
            $('#reseña_nombre').val(task.reseña_nombre);
            $('#reseña_imagen').val(task.reseña_imagen);
            $('#task-reviewId').val(task.id);
            edit = true;
        })
    });

    /* CONTACTO */

    //Funcion que llama a los datos que estan registrados en mi base de datos.
    function fetchTasksContact() {
        $.ajax({
            url: '../app/contact-list.php',
            type: 'GET',
            success: function (response) {
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                        <tr task-contactId="${task.id}" style="font-weight: normal;">
                            <td>${task.id}</td>
                            <td>${task.correo}</td>
                            <td>${task.mensaje}</td>
                            <td>
                                <input type="button" class="taskcontact-delete btn btn-success" style="font-size: 2rem;" value="Ok">
                            </td>
                        </tr>
                    `
                });
                $('#tasks-contact').html(template);
            }
        });
    }

    //Funcion que me permite eliminar un contacto por su id sin necesidad de recargar la pagina.
    $(document).on('click', '.taskcontact-delete', function () {
        //Muestro un alert para confirmar eliminar el contacto.
        if (confirm('¿Quieres eliminar este contacto?')) {
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('task-contactId');
            $.post('../app/contact-delete.php', {id}, function (response) {
                fetchTasksContact();
            });
        }
    });
});