$(document).ready(function () {

    /* Llamamos a todas las funciones */

    verAdidas();
    verNike();
    verPuma();
    verJordan();
    verReebok();
    verFila();
    verVans();
    searchIndex();
    
    function verAdidas() {
        //Usamos ajax para obtener los datos de la base de datos
        $.ajax({
            url: 'app/marcas-php/adidas-list.php', //le pasamos la url del archivo php que extrae los datos de la base de datos por medio de consultas
            type: 'GET', //Indicamos el método a utilizar, POST para enviar o GET en este caso para recibir
            success: function (response) {
                const datos = JSON.parse(response); // Analiza una cadena de texto como JSON, transformando el valor producido por el análisis a JSON
                let template = ''; //Creamos una variable template vacia, a la que añadiremos las filas de la tabla con los datos
                datos.forEach(element => {
                    template += `
                    <div class="product-card item">
                        <div class="image">
                            <img src="images/${element.producto_imagen}" alt="" style="background-color: rgb(240, 240, 240);">
                        </div>

                        <div class="content" style="margin-top: 1rem;">
                            <h3>${element.producto_nombre}</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">${element.producto_precio}€</div>
                        </div>

                        <div class="info">
                            <h4>Detalles</h4>
                            <p>${element.producto_desc}</p>
                            <form action="favoritos/favs-add.php" method="post">
                                <input type="hidden" name="id_producto" value="${element.id}"></input>
                                <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                <button type="submit">Añadir a favoritos</button>
                            </form>
                            <div class="cart">
                                <form action="carrito/cart-add.php" method="post">
                                    <input type="hidden" name="id_producto" value="${element.id}"></input>
                                    <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                    <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                    <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                    <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                    <button type="submit">Añadir al carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>`
                }); //Estos son los datos a mostrar
                $('#mostrarAdidas').html(template); //Los datos que se muestren apareceran en la parte que contenga la id #mostrar
            }
        });
    }

    function verNike() {
        //Usamos ajax para obtener los datos de la base de datos
        $.ajax({
            url: 'app/marcas-php/nike-list.php', //le pasamos la url del archivo php que extrae los datos de la base de datos por medio de consultas
            type: 'GET', //Indicamos el método a utilizar, POST para enviar o GET en este caso para recibir
            success: function (response) {
                const datos = JSON.parse(response); // Analiza una cadena de texto como JSON, transformando el valor producido por el análisis a JSON
                let template = ''; //Creamos una variable template vacia, a la que añadiremos las filas de la tabla con los datos
                datos.forEach(element => {
                    template += `
                    <div class="product-card item">
                        <div class="image">
                            <img src="images/${element.producto_imagen}" alt="" style="background-color: rgb(240, 240, 240);">
                        </div>

                        <div class="content" style="margin-top: 1rem;">
                            <h3>${element.producto_nombre}</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">${element.producto_precio}€</div>
                        </div>

                        <div class="info">
                            <h4>Detalles</h4>
                            <p>${element.producto_desc}</p>
                            <form action="favoritos/favs-add.php" method="post">
                                <input type="hidden" name="id_producto" value="${element.id}"></input>
                                <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                <button type="submit">Añadir a favoritos</button>
                            </form>
                            <div class="cart">
                                <form action="carrito/cart-add.php" method="post">
                                    <input type="hidden" name="id_producto" value="${element.id}"></input>
                                    <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                    <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                    <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                    <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                    <button type="submit">Añadir al carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>`
                }); //Estos son los datos a mostrar
                $('#mostrarNike').html(template); //Los datos que se muestren apareceran en la parte que contenga la id #mostrar
            }
        });
    }

    function verPuma() {
        //Usamos ajax para obtener los datos de la base de datos
        $.ajax({
            url: 'app/marcas-php/puma-list.php', //le pasamos la url del archivo php que extrae los datos de la base de datos por medio de consultas
            type: 'GET', //Indicamos el método a utilizar, POST para enviar o GET en este caso para recibir
            success: function (response) {
                const datos = JSON.parse(response); // Analiza una cadena de texto como JSON, transformando el valor producido por el análisis a JSON
                let template = ''; //Creamos una variable template vacia, a la que añadiremos las filas de la tabla con los datos
                datos.forEach(element => {
                    template += `
                    <div class="product-card item">
                        <div class="image">
                            <img src="images/${element.producto_imagen}" alt="" style="background-color: rgb(240, 240, 240);">
                        </div>

                        <div class="content" style="margin-top: 1rem;">
                            <h3>${element.producto_nombre}</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">${element.producto_precio}€</div>
                        </div>

                        <div class="info">
                            <h4>Detalles</h4>
                            <p>${element.producto_desc}</p>
                            <form action="favoritos/favs-add.php" method="post">
                                <input type="hidden" name="id_producto" value="${element.id}"></input>
                                <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                <button type="submit">Añadir a favoritos</button>
                            </form>
                            <div class="cart">
                                <form action="carrito/cart-add.php" method="post">
                                    <input type="hidden" name="id_producto" value="${element.id}"></input>
                                    <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                    <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                    <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                    <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                    <button type="submit">Añadir al carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>`
                }); //Estos son los datos a mostrar
                $('#mostrarPuma').html(template); //Los datos que se muestren apareceran en la parte que contenga la id #mostrar
            }
        });
    }

    function verJordan() {
        //Usamos ajax para obtener los datos de la base de datos
        $.ajax({
            url: 'app/marcas-php/jordan-list.php', //le pasamos la url del archivo php que extrae los datos de la base de datos por medio de consultas
            type: 'GET', //Indicamos el método a utilizar, POST para enviar o GET en este caso para recibir
            success: function (response) {
                const datos = JSON.parse(response); // Analiza una cadena de texto como JSON, transformando el valor producido por el análisis a JSON
                let template = ''; //Creamos una variable template vacia, a la que añadiremos las filas de la tabla con los datos
                datos.forEach(element => {
                    template += `
                    <div class="product-card item">
                        <div class="image">
                            <img src="images/${element.producto_imagen}" alt="" style="background-color: rgb(240, 240, 240);">
                        </div>

                        <div class="content" style="margin-top: 1rem;">
                            <h3>${element.producto_nombre}</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">${element.producto_precio}€</div>
                        </div>

                        <div class="info">
                            <h4>Detalles</h4>
                            <p>${element.producto_desc}</p>
                            <form action="favoritos/favs-add.php" method="post">
                                <input type="hidden" name="id_producto" value="${element.id}"></input>
                                <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                <button type="submit">Añadir a favoritos</button>
                            </form>
                            <div class="cart">
                                <form action="carrito/cart-add.php" method="post">
                                    <input type="hidden" name="id_producto" value="${element.id}"></input>
                                    <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                    <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                    <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                    <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                    <button type="submit">Añadir al carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>`
                }); //Estos son los datos a mostrar
                $('#mostrarJordan').html(template); //Los datos que se muestren apareceran en la parte que contenga la id #mostrar
            }
        });
    }

    function verReebok() {
        //Usamos ajax para obtener los datos de la base de datos
        $.ajax({
            url: 'app/marcas-php/reebok-list.php', //le pasamos la url del archivo php que extrae los datos de la base de datos por medio de consultas
            type: 'GET', //Indicamos el método a utilizar, POST para enviar o GET en este caso para recibir
            success: function (response) {
                const datos = JSON.parse(response); // Analiza una cadena de texto como JSON, transformando el valor producido por el análisis a JSON
                let template = ''; //Creamos una variable template vacia, a la que añadiremos las filas de la tabla con los datos
                datos.forEach(element => {
                    template += `
                    <div class="product-card item">
                        <div class="image">
                            <img src="images/${element.producto_imagen}" alt="" style="background-color: rgb(240, 240, 240);">
                        </div>

                        <div class="content" style="margin-top: 1rem;">
                            <h3>${element.producto_nombre}</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">${element.producto_precio}€</div>
                        </div>

                        <div class="info">
                            <h4>Detalles</h4>
                            <p>${element.producto_desc}</p>
                            <form action="favoritos/favs-add.php" method="post">
                                <input type="hidden" name="id_producto" value="${element.id}"></input>
                                <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                <button type="submit">Añadir a favoritos</button>
                            </form>
                            <div class="cart">
                                <form action="carrito/cart-add.php" method="post">
                                    <input type="hidden" name="id_producto" value="${element.id}"></input>
                                    <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                    <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                    <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                    <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                    <button type="submit">Añadir al carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>`
                }); //Estos son los datos a mostrar
                $('#mostrarReebok').html(template); //Los datos que se muestren apareceran en la parte que contenga la id #mostrar
            }
        });
    }

    function verFila() {
        //Usamos ajax para obtener los datos de la base de datos
        $.ajax({
            url: 'app/marcas-php/fila-list.php', //le pasamos la url del archivo php que extrae los datos de la base de datos por medio de consultas
            type: 'GET', //Indicamos el método a utilizar, POST para enviar o GET en este caso para recibir
            success: function (response) {
                const datos = JSON.parse(response); // Analiza una cadena de texto como JSON, transformando el valor producido por el análisis a JSON
                let template = ''; //Creamos una variable template vacia, a la que añadiremos las filas de la tabla con los datos
                datos.forEach(element => {
                    template += `
                    <div class="product-card item">
                        <div class="image">
                            <img src="images/${element.producto_imagen}" alt="" style="background-color: rgb(240, 240, 240);">
                        </div>

                        <div class="content" style="margin-top: 1rem;">
                            <h3>${element.producto_nombre}</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">${element.producto_precio}€</div>
                        </div>

                        <div class="info">
                            <h4>Detalles</h4>
                            <p>${element.producto_desc}</p>
                            <form action="favoritos/favs-add.php" method="post">
                                <input type="hidden" name="id_producto" value="${element.id}"></input>
                                <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                <button type="submit">Añadir a favoritos</button>
                            </form>
                            <div class="cart">
                                <form action="carrito/cart-add.php" method="post">
                                    <input type="hidden" name="id_producto" value="${element.id}"></input>
                                    <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                    <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                    <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                    <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                    <button type="submit">Añadir al carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>`
                }); //Estos son los datos a mostrar
                $('#mostrarFila').html(template); //Los datos que se muestren apareceran en la parte que contenga la id #mostrar
            }
        });
    }

    function verVans() {
        //Usamos ajax para obtener los datos de la base de datos
        $.ajax({
            url: 'app/marcas-php/vans-list.php', //le pasamos la url del archivo php que extrae los datos de la base de datos por medio de consultas
            type: 'GET', //Indicamos el método a utilizar, POST para enviar o GET en este caso para recibir
            success: function (response) {
                const datos = JSON.parse(response); // Analiza una cadena de texto como JSON, transformando el valor producido por el análisis a JSON
                let template = ''; //Creamos una variable template vacia, a la que añadiremos las filas de la tabla con los datos
                datos.forEach(element => {
                    template += `
                    <div class="product-card item">
                        <div class="image">
                            <img src="images/${element.producto_imagen}" alt="" style="background-color: rgb(240, 240, 240);">
                        </div>

                        <div class="content" style="margin-top: 1rem;">
                            <h3>${element.producto_nombre}</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">${element.producto_precio}€</div>
                        </div>

                        <div class="info">
                            <h4>Detalles</h4>
                            <p>${element.producto_desc}</p>
                            <form action="favoritos/favs-add.php" method="post">
                                <input type="hidden" name="id_producto" value="${element.id}"></input>
                                <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                <button type="submit">Añadir a favoritos</button>
                            </form>
                            <div class="cart">
                                <form action="carrito/cart-add.php" method="post">
                                    <input type="hidden" name="id_producto" value="${element.id}"></input>
                                    <input type="hidden" name="producto_imagen" value="${element.producto_imagen}"></input>
                                    <input type="hidden" name="producto_nombre" value="${element.producto_nombre}"></input>
                                    <input type="hidden" name="producto_desc" value="${element.producto_desc}"></input>
                                    <input type="hidden" name="producto_precio" value="${element.producto_precio}"></input>
                                    <button type="submit">Añadir al carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>`
                }); //Estos son los datos a mostrar
                $('#mostrarVans').html(template); //Los datos que se muestren apareceran en la parte que contenga la id #mostrar
            }
        });
    }

    //Index

    function searchIndex() {

        $('#searchIndex').keyup(function() { 
            if($('#searchIndex').val()) {
            let search = $('#searchIndex').val();
            $.ajax({
                url: 'app/search-php/search-index.php', 
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

        $('#searchIndex').keydown(function() { 
            if($('#searchIndex').val()) {
            let search = $('#searchIndex').val(); 
            $.ajax({
                url: 'app/search-php/search-index.php',
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