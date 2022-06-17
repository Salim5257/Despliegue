<?php

include ('database.php');

if ($connection) {

    /* Envío los datos del código de verificación aquí para comprobar si el código es correcto */

    if(isset($_POST['codigo'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $codigo = $_POST['codigo'];
        $codigo2 = $_POST['codigo2'];

        /* Si el código introducido por el usuario es igual al código enviado a su correo, el usuario se crea correctamente en la base de datos */

        if($codigo == $codigo2){
            $query = "INSERT INTO usuario(id_rol, nombre, apellido, dni, telefono, correo, contrasena) VALUES 
            ('2', '$nombre', '$apellido', '$dni', '$telefono', '$correo', '$contrasena')";
            $result = mysqli_query($connection, $query);
            
            if (!$result) {
                die('Query Failed.');
            }

            /* En este caso, te redirecciona a una página donde pone que te has registrado correctamente */

            echo "
                <script>
                    setTimeout(function(){
                        window.location.href='../login/registro-correcto.php';
                    },500);
                </script>
            ";
        } else {

            /* En caso de que no sea correcto, te redirecciona a una página donde pone que el código introducido no es correcto */
?>

            <html>
                <head></head>
                <body onLoad=redirigir()>
                    <script language=Javascript>
                        function redirigir(){
                            formulario.action = '../login/registro-error.php';
                            formulario.submit();
                        }
                    </script>
                    <form method="post" name="formulario">
                        <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
                        <input type="hidden" name="apellido" value="<?php echo $apellido ?>">
                        <input type="hidden" name="dni" value="<?php echo $dni ?>">
                        <input type="hidden" name="telefono" value="<?php echo $telefono ?>">
                        <input type="hidden" name="correo" value="<?php echo $correo ?>">
                        <input type="hidden" name="contrasena" value="<?php echo $contrasena ?>">
                        <input type="hidden" name="codigo2" value="<?php echo $codigo2 ?>">
                    </form>
                </body>
            </html>

<?php
        }
    }

} else {
    echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
}

?>