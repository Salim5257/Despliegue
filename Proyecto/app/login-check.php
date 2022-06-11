<?php

    /* Destruimos la sesión en caso de que existiera */

    session_start();
    session_destroy();

    include('database.php');

    /* Si el usuario clickea en el botón de 'entrar como invitado', se le redirigirá a la página principal bajo la sesión de invitado */

    if(isset($_POST['invitado'])){
        session_start();
        $invitado = $_POST['invitado'];
        $_SESSION['invitado'] = $invitado;

        header("Location: ../index.php");
        exit;

        echo $invitado;

    /* Si se loguea con el correo electrónico y contraseña de un administrador, se le redirigirá a la página principal bajo la sesión de admin */

    } else if(isset($_POST['admin'])) {
        session_start();
        $admin = $_POST['admin'];
        $_SESSION['admin'] = $admin;

        header("Location: ../index.php");
        exit;

        echo $admin;
    
    } else {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        /* Si el correo y la contraseña resultan ser estos, se le redirigirá a la página de administrador */

        if($correo == 'adminbase@gmail.com' && $contrasena == 'admin123'){
            header("refresh:0;url=../admin/user-admin.php");

        /* En caso contrario, se recojerá los datos y se comproborá si el usuario está en la base de datos */

        }else if($correo && $contrasena){
            session_start();
            
            $query = "SELECT * FROM usuario WHERE correo = '$correo' and contrasena = '$contrasena'";

            $result = mysqli_query($connection, $query);

            $row = mysqli_num_rows($result);

            $_SESSION['correo'] = $correo;

            /* Si no está te devuelve a la página de login */

            if($row){
                header("refresh:0;url=../index.php");
                exit;
            } else {
                echo "Datos incorrectos";
                echo "
                    <script>
                        setTimeout(function(){
                            window.location.href='../login/login.php';
                        },500);
                    </script>";
            }
        } else {
            echo "Datos incorrectos";
                echo "
                    <script>
                        setTimeout(function(){
                            window.location.href='../login/login.php';
                        },500);
                    </script>";
        }

        mysqli_close($connection);
    }
?>
<br>
<a href="../login/login.php">Volver al Inicio</a>