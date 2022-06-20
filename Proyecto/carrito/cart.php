<?php

include('../app/database.php');
session_start();
$id_usuario = $_SESSION['id'];

if ($connection) {

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../fonts/font-awesome.css">
        <link rel="stylesheet" href="../fonts/google-fonts.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/owl.theme.green.min.css">
        <link rel="stylesheet" href="../css/responsive-prod.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://kit.fontawesome.com/de65a6f925.js" crossorigin="anonymous"></script>
        <title>Salim Ahmed Mizzian</title>
    </head>

    <!-- header section -->
    <header>
        <div class="header-1">
            <a href="../index.php" class="logo"> <i class="fa fa-thin fa-store"></i> <b>Foot Base</b></a>

            <div class="form-container">
                <form action="../app/search-php/search-cart.php">
                    <input type="search" placeholder="Buscar productos" id="searchCart">
                    <label for="searchCart" class="fas fa-search"><span style="color:transparent;">ˍ</span></label>
                </form>
                <div id="resultado">
                    <div>
                        <ul id="contenedor"></ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <ul>
                    <li><a href="../index.php#home">Inicio</a></li>
                    <li><a href="../index.php#product">Productos</a></li>
                    <li><a href="../index.php#review">Reseñas</a></li>
                    <li><a href='../index.php#contact'>Contacto</a></li>
                    <li><a class="active" href='../carrito/cart.php'>Carrito</a></li>
                </ul>
            </nav>

            <div class="icons">

                <?php
                    /* En caso de que la sesión sea 'admin', se mostrará un botón que te redirige a la página de administrador y un botón para loguearse */
                    if(isset($_SESSION['admin'])) {
                    echo "<a href='admin/user-admin.php' aria-label='admin button'><i class='fa-solid fa-table'></i></a>";
                    echo "<a href='login/login.php' aria-label='session button'><i class='fas fa-user'></i></a>";
                    /* En caso de que la sesión sea de un usuario registrado, se mostrarán los botones de favoritos, carrito y el usuario junto a un botón para cerrar sesión */
                    } else if(isset($_SESSION['correo'])){
                    echo "<a href='../app/review.php' class='fas fa-star' aria-label='review'></a>";
                    echo "<a href='../favoritos/favoritos.php' class='fas fa-heart' aria-label='like button'></a><a href='cart.php' class='fas fa-shopping-cart' aria-label='cart button'></a>";
                    echo "<a href='#' id='user-session'> <i class='fas fa-user'></i> ". $_SESSION['correo'] ."</a>";
                    echo "<a href='../login/close_session.php' aria-label='close-session button' class='fa-solid fa-door-open' style='color: #EB4D4B;'></a>";
                    /* En caso de que no sea ninguna de las 2 opciones, es decir, que sea 'invitado', se mostrará unicamente un botón para loguearse */
                    } else {
                    echo "<a href='login/login.php' aria-label='session button'><i class='fas fa-user'></i></a>";
                    }
                ?>

            </div>
            
        </div>
    </header>

    <body>
        <section>
            <div style="padding: 2rem;"> 

                <?php
                $query ="SELECT * FROM carrito WHERE id_usuario = '$id_usuario'";
                $result = mysqli_query($connection, $query);
                
                if(mysqli_fetch_row($result) > 0){
                    ?>

                    <table class="table" style="background-color: #333;">
                        <thead style="background-color: #6c29b9;">
                        <tr style="font-size: 20px; justify-content: center;">
                            <td scope="col" class="text-white" style="justify-content: center; text-align: center;"><b>Imagen</b></td>
                            <td scope="col" class="text-white" style="justify-content: center; text-align: center;"><b>Nombre</b></td>
                            <td scope="col" class="text-white" style="justify-content: center; text-align: center;"><b>Descripción</b></td>
                            <td scope="col" class="text-white" style="justify-content: center; text-align: center;"><b>Precio</b></td>
                            <td scope="col" class="text-white" style="justify-content: center; text-align: center;"><b></b></td>
                        </tr>
                        <tbody id="mostrarCart"></tbody>
                        </thead>
                    </table>

                    <?php 
                    $query ="SELECT producto_precio FROM carrito WHERE id_usuario = '$id_usuario'";
                    $result = mysqli_query($connection, $query);
                    $total = mysqli_fetch_assoc($result);

                    $suma = 0; 

                    do {
                        $suma += $total['producto_precio'];
                    } while ($total=mysqli_fetch_assoc($result));

                    mysqli_free_result($result);
                    ?>

                        <div> 
                            <table class="table">
                                <thead style="background-color: red;">
                                <tr style="font-size: 25px;">
                                    <form action="cart-pay.php" method="post">
                                        <td scope="col" class="text-white"><b><button type="submit" class="btn btn-dark text-white" style="font-size: 25px; font-weight: bold;">Continuar con la compra</button></b></td>
                                    </form>
                                    <td scope="col" class="text-white" style="justify-content: end; text-align: right; vertical-align: middle;"><b>Precio Total: <?php echo $suma ?> €</b></td>
                                </tr>
                                <tbody id=""></tbody>
                                </thead>
                            </table>
                        </div>

                    <?php
                } else {
                    ?>

                        <div> 
                            <table class="table">
                                <thead style="background-color: red;">
                                <tr style="font-size: 25px;">
                                    <td scope="col" class="text-white"><b>Aún no hay artículos en el carrito</b></td>
                                </tr>
                                <tbody id=""></tbody>
                                </thead>
                            </table>
                        </div>

                    <?php
                }
                    ?>
            </div>
        </section>

        <script src="../js/jquery.js"></script>
        <script src="../js/mostrar-carrito.js"></script>
    </body>
    </html>

    <?php

} else {
    echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
}

?>