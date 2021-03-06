<?php
    
    session_start();
    include('database.php');

    if ($connection) {
    
        /* Recoje los datos de la reseña y los guarda aquí */

        if (isset($_POST['reseña_nombre'])) {
            $reseña_comentario = $_POST['reseña_comentario'];
            $reseña_nombreS = $_SESSION['nombre'];
            $reseña_nombre = $_POST['reseña_nombre'];
            $id_usuario = $_SESSION['id'];

            /* Si hay un nombre y el comentario se procederá a crear la reseña */

            if($reseña_nombre && $reseña_comentario){

                /* En caso de que el nombre introducido y el de la sesión sean iguales, se crea correctamente la reseña */

                if($reseña_nombre == $reseña_nombreS){
                    $query = "SELECT * FROM reseña WHERE reseña_nombre = '$reseña_nombreS'";
                    $result = mysqli_query($connection, $query);

                    if(mysqli_fetch_row($result) < 0){
                        header("Location: ../login/review-name-error.php");
                    } else { 
                        $query = "INSERT INTO reseña(id_usuario, reseña_comentario, reseña_nombre) 
                        VALUES ('$id_usuario', '$reseña_comentario', '$reseña_nombre')";
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
                                                            <h2>Bienvenido a la página de creación de reseñas</h2>
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
                                                            <h3>Se han creado correctamente los datos</h3>
                                                        </div>
                                                        <br>
                                                            
                                                        <div class="form-group">
                                                            <a href="../index.php"><button type="submit" class="btn btn-primary w-100 submit">Volver a la página de inicio</button></a>
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
                        }
                    }

                /* En caso de que no sea el mismo nombre, te mandará a una página donde pondrá que el nombre introducido no es válido */

                } else {
                    header("Location: ../login/review-name-error.php");
                }

            } else {
                header("Location: ../login/review-error.php");
            }
        }

    } else {
        echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
    }

?>