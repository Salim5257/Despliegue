$(document).ready(function() {

    searchUser();
    searchNews();
    searchProd();
    searchReview();
    searchContact();

    //Usuarios

    function searchUser() {

        $('#searchUser').keyup(function() { 
            if($('#searchUser').val()) {
            let search = $('#searchUser').val();
            $.ajax({
                url: '../app/search-php/search-user.php', 
                data: {search}, 
                type: 'POST', 
                success: function (response) {
                if(!response.error) { 
                    let datos = JSON.parse(response);
                    let template = '';
                    datos.forEach(dato => {
                    template += `<tr>
                                    <td><a href='#'>${dato.nombre}</a></td>
                                </tr>`
                    });
                    $('#resultado').show(); 
                    $('#contenedor').html(template);
                }
                } 
            })
            }
        });  

        $('#searchUser').keydown(function() { 
            if($('#searchUser').val()) {
            let search = $('#searchUser').val(); 
            $.ajax({
                url: '../app/search-php/search-user.php',
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

    //Novedades

    function searchNews() {

        $('#searchNews').keyup(function() { 
            if($('#searchNews').val()) {
            let search = $('#searchNews').val();
            $.ajax({
                url: '../app/search-php/search-news.php', 
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

        $('#searchNews').keydown(function() { 
            if($('#searchNews').val()) {
            let search = $('#searchNews').val(); 
            $.ajax({
                url: '../app/search-php/search-news.php',
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

    //Productos

    function searchProd() {

        $('#searchProd').keyup(function() { 
            if($('#searchProd').val()) {
            let search = $('#searchProd').val();
            $.ajax({
                url: '../app/search-php/search-prod.php', 
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

        $('#searchProd').keydown(function() { 
            if($('#searchProd').val()) {
            let search = $('#searchProd').val(); 
            $.ajax({
                url: '../app/search-php/search-prod.php',
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

    //Reseñas

    function searchReview() {

        $('#searchReview').keyup(function() { 
            if($('#searchReview').val()) {
            let search = $('#searchReview').val();
            $.ajax({
                url: '../app/search-php/search-review.php', 
                data: {search}, 
                type: 'POST', 
                success: function (response) {
                if(!response.error) { 
                    let datos = JSON.parse(response);
                    let template = '';
                    datos.forEach(dato => {
                    template += `<tr>
                                    <td><a href='#'>${dato.reseña_nombre}</a></td>
                                </tr>`
                    });
                    $('#resultado').show(); 
                    $('#contenedor').html(template);
                }
                } 
            })
            }
        });  

        $('#searchReview').keydown(function() { 
            if($('#searchReview').val()) {
            let search = $('#searchReview').val(); 
            $.ajax({
                url: '../app/search-php/search-review.php',
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

    //Contacto

    function searchContact() {

        $('#searchContact').keyup(function() { 
            if($('#searchContact').val()) {
            let search = $('#searchContact').val();
            $.ajax({
                url: '../app/search-php/search-contact.php', 
                data: {search}, 
                type: 'POST', 
                success: function (response) {
                if(!response.error) { 
                    let datos = JSON.parse(response);
                    let template = '';
                    datos.forEach(dato => {
                    template += `<tr>
                                    <td><a href='#'>${dato.correo}</a></td>
                                </tr>`
                    });
                    $('#resultado').show(); 
                    $('#contenedor').html(template);
                }
                } 
            })
            }
        });  

        $('#searchContact').keydown(function() { 
            if($('#searchContact').val()) {
            let search = $('#searchContact').val(); 
            $.ajax({
                url: '../app/search-php/search-contact.php',
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

});