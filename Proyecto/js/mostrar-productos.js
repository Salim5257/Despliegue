$(document).ready(function () {

    /* Llamamos a todas las funciones */

    verAdidas();
    verNike();
    verPuma();
    verJordan();
    verReebok();
    verFila();
    verVans();
    
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
                            <a href="#"><button>Añadir a favoritos</button></a>
                            <div class="cart">
                                <a href="#"><button>Añadir al carrito</button></a>
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
                            <a href="#"><button>Añadir a favoritos</button></a>
                            <div class="cart">
                                <a href="#"><button>Añadir al carrito</button></a>
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
                            <a href="#"><button>Añadir a favoritos</button></a>
                            <div class="cart">
                                <a href="#"><button>Añadir al carrito</button></a>
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
                            <a href="#"><button>Añadir a favoritos</button></a>
                            <div class="cart">
                                <a href="#"><button>Añadir al carrito</button></a>
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
                            <a href="#"><button>Añadir a favoritos</button></a>
                            <div class="cart">
                                <a href="#"><button>Añadir al carrito</button></a>
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
                            <a href="#"><button>Añadir a favoritos</button></a>
                            <div class="cart">
                                <a href="#"><button>Añadir al carrito</button></a>
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
                            <a href="#"><button>Añadir a favoritos</button></a>
                            <div class="cart">
                                <a href="#"><button>Añadir al carrito</button></a>
                            </div>
                        </div>
                    </div>`
                }); //Estos son los datos a mostrar
                $('#mostrarVans').html(template); //Los datos que se muestren apareceran en la parte que contenga la id #mostrar
            }
        });
    }
})