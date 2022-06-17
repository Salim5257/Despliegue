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
                    <li><a class="active" href='../carrito/cart-pay.php'>Pago</a></li>
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
                    echo "<a href='cart.php' id='user-session'> <i class='fas fa-user'></i> ". $_SESSION['correo'] ."</a>";
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
            <div style="padding: 3rem;">
                <div class="form-group mb-3" style="border: black solid 2px; padding: 2rem;">
                    <h1 style="margin-bottom: 4rem; font-size: 30px; color: #2980b9;"><b>Métodos de pago</b><hr></h1>

                    <h1 style="margin-bottom: 2rem;"><b>Tarjeta de crédito:</b> <img src="../images/visa.png" alt="" width="35px" height="33px"> <img src="../images/mastercard.png" alt="" width="43px" height="25px"> <img src="../images/american-express.png" alt="" width="37px" height="25px"></h1>

                    <form action="paid.php" method="post">
                        <div class="form-group mb-3" style="font-size: 15px;">
                            <label for="nombreTarjeta" class="form-label"><b>Nombre del titular:</b></label>
                            <input name="nombreTarjeta" type="text" class="form-control" style="font-size: 15px;" placeholder="Nombre del titular de la cuenta" required maxlength="30" minlength="2">
                        </div>

                        <div class="form-group mb-3" style="font-size: 15px;">
                            <label for="numeroTarjeta" class="form-label"><b>Número de la tarjeta:</b></label>
                            <input name="numeroTarjeta" type="text" class="form-control" style="font-size: 15px;" placeholder="1111-2222-3333-4444" required maxlength="19" minlength="19">
                        </div>

                        <div class="form-group mb-3" style="font-size: 15px;">
                            <label for="fechaExpiracion" class="form-label"><b>Fecha de expiración:</b></label>
                            <input name="fechaExpiracion" type="text" class="form-control" style="font-size: 15px;" placeholder="01/01" required maxlength="5" minlength="5">
                        </div>

                        <div class="form-group mb-3" style="font-size: 15px;">
                            <label for="codigoSeguridad" class="form-label"><b>Código de seguridad (CVV):</b></label>
                            <input name="codigoSeguridad" type="text" class="form-control" style="font-size: 15px;" placeholder="123" required maxlength="3" minlength="3">
                        </div>

                        <div class="form-group mt-3" style="margin-bottom: 4rem;">
                            <button type="submit" class="form-control" onmouseover="this.style.color='red';" onmouseout="this.style.color='black';" style="width: 20%; border: #2980b9 solid 2px; font-size: 15px;"><i class='fa fa-credit-card'></i> Efectuar Pago</button>
                        </div>
                    </form>

                    <h1 style="margin-bottom: 2rem;"><b>Paypal:</b> <img src="../images/paypal.png" alt="" width="65px" height="40px"> </h1>
                    <form action="#">
                        <input type="submit" class="btn btn-primary" style="font-size: 30px; border-radius: 50%; font-style: italic; width: 15vw; height: 7vh;" value="Pagar con Paypal">
                    </form>
                </div>
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