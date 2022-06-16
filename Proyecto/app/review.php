<?php

include('database.php');

if ($connection) {

    session_start();
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
                <form action="#">
                    <input type="search" placeholder="Buscar productos" id="search">
                    <label for="search" class="fas fa-search"><span style="color:transparent;">ˍ</span></label>
                </form>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <ul>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#product">Productos</a></li>
                    <li><a class="active" href="#review">Reseñas</a></li>
                    <li><a href='#contact'>Contacto</a></li>
                </ul>
            </nav>

            <div class="icons">

            <form action="../index.php" method="post">
                <input type="hidden" name="correo" value="Estoy registrado">

                <div class="form-group">
                    <button type="submit" class="btn btn-primary bg-dark text-white w-100 p-3 fs-4 submit"><b>Volver al inicio</b></button>
                </div>
            </form>

            </div>
        </div>
    </header>

    <body>
        <section id="add-review">
            <form action='review-add.php' method='post'>
                <h1>Reseña</h1>
                <p>Escríbanos la reseña de su producto y su <br> valoración para ayudarnos a crecer</p><br>
                            
                <p><label for='reseña_nombre'>Nombre:</label></p>
                <input type='text' id='reseña_nombre' name='reseña_nombre' placeholder='nombre'><br><br>
                        
                <p><label for='reseña_comentario'>Comentario:</label></p>
                <textarea id='reseña_comentario' name='reseña_comentario' placeholder='escríba el comentario' maxlength='120' cols='40' rows='4'></textarea><br>
                        
                <input type='submit' value='Enviar'>
            </form>
        </section>
    </body>
    </html>

    <?php

} else {
    echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
}

?>