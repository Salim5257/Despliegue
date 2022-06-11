<?php

    include('database.php');

    /* Se recojen los datos del usuario */

    $id = $_POST['id'];
    $reseña_comentario = $_POST['reseña_comentario'];
    $reseña_nombre = $_POST['reseña_nombre'];
    $reseña_imagen = $_POST['reseña_imagen'];

    /* Se actualizan según los datos que le queramos cambiar */

    $query = "UPDATE reseña SET reseña_comentario = '$reseña_comentario', reseña_nombre = '$reseña_nombre', reseña_imagen = '$reseña_imagen' WHERE id = '$id'";

    $result = mysqli_query($connection, $query);

    if($result) {

        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../login/css/style.css"/>
        <title>Salim Ahmed Mizzian</title>
        </head>
        <body>
            <section class="ftco-section">

                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section"><b>Foot Base</b></h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10">
                            <div class="wrap d-md-flex">

                                <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                                    <div class="text w-100">
                                        <h2>Bienvenido a la página de edición de reseñas</h2>
                                    </div>
                                </div>

                                <div class="login-wrap p-4 p-lg-5">
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <h3 class="mb-4" style="font-weight: bold;">Éxito</h3>
                                        </div>
                                        <div class="w-100">
                                            <p class="social-media d-flex justify-content-end">
                                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <h3>Se han actualizado correctamente los datos</h3>
                                    </div>
                                    <br>
                                        
                                    <div class="form-group">
                                        <a href="../admin/review-admin.php"><button type="submit" class="btn btn-primary w-100 submit">Volver a la página de administrador</button></a>
                                    </div>
                                    <br>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </section>
        </body>
        </html>

    <?php
    } else {
        header("Location: ../admin/review-admin.php");
    }

?>