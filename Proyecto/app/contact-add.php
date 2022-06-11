<?php

    include('database.php');

    session_start();

    /* En caso de querer escribir un mensaje de contacto con la sesión de invitado, te redirige a la página de login */

    if(isset($_SESSION['invitado'])){
        $invitado = $_SESSION['invitado'];
        header("Location: ../login/login.php");
    } else if (isset($_SESSION['correo'])){
        $correoS = $_SESSION['correo'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        /* Si hay un correo y el mensaje se procederá a crear el contacto */

        if($correo && $mensaje){

            /* En caso de que el correo electrónico introducido y el de la sesión sean iguales, se crea correctamente el contacto */
            
            if($correo == $correoS){
                $query = "SELECT * FROM usuario WHERE correo = '$correoS'";
                $result = mysqli_query($connection, $query);

                if(mysqli_num_rows($result) > 0){
                    $query = "INSERT INTO contacto(correo, mensaje) 
                    VALUES ('$correo', '$mensaje')";
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
                                                        <h2>Bienvenido a la página de creación de contactos</h2>
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
                                                        <a href="../index.php"><button type="submit" class="btn btn-primary w-100 submit">Volver a la página principal</button></a>
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

                } else { 
                    header("Location: ../login/contact-email-error.php");
                }

            /* En caso de que no sea el mismo correo, te mandará a una página donde pondrá que el correo introducido no es válido */

            } else {
                header("Location: ../login/contact-email-error.php");
            }

        } else {
            header("Location: ../login/contact-error.php");
        }
    }

?>