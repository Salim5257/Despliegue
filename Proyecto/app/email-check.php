<?php

    include('database.php');

    /* Variables para la verificación por correo electrónico */

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    /* Recojo los datos de registro y los envio aquí */

    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
    }

    /* Si el correo electrónico y el dni no figuran en la base de datos se crea */

    $newemail = false;
    $query = "SELECT * FROM usuario WHERE correo = '$correo' OR dni = '$dni'";
    $result = mysqli_query($connection, $query);

    mysqli_close($connection);

    /* Si el correo no está repetido te envía un código de 6 dígitos generado al azar al correo electrónico */

    if(mysqli_fetch_row($result) == 0){
        $newemail = true;

        require '../email-verif/vendor/autoload.php';

        $email = new PHPMailer(true);

        $codigo = rand(100000,999999);

        /* Aquí le digo a donde quiero que lo envie y bajo que correo */

        try {
            $email->SMTPDebug = SMTP::DEBUG_SERVER;
            $email->isSMTP();
            $email->Host = 'smtp.gmail.com';
            $email->SMTPAuth = true;
            $email->Username = 'footbase.shop@gmail.com';
            $email->Password = 'isqpqcvwcapawwjg';
            $email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $email->Port = 25;
            $email->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            /* Escribo el mensaje que quiero que le llegue al usuario junto al código de verificación */

            $email->setFrom('footbase.shop@gmail.com', 'Foot Base');
            $email->addAddress($correo, 'Receptor');

            $email->isHTML(true);
            $email->Subject = 'Verificacion de registro';
            $email->Body = "Tu codigo de verificacion de registro es: '$codigo'";
            $email->send();
?>

    <!-- Finalmente te envía a una página para introducir el código de verificación -->
            <html>
                <head></head>
                <body onLoad=redirigir()>
                    <script language=Javascript>
                        function redirigir(){
                            formulario.action = '../login/verificacion.php';
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
                        <input type="hidden" name="codigo2" value="<?php echo $codigo ?>">
                    </form>
                </body>
            </html>

<?php


        } catch(Exception $exc) {
            echo "Error: " .$email-> ErrorInfo;
        }
    
    /* En caso de que el correo electrónico o el dni existan en la base de datos, te mandará a una página señalandote el error */
        
    } else {
        echo "
                <script>
                    setTimeout(function(){
                        window.location.href='../login/email-error.php';
                    },500);
                </script>
            ";
    }


?>
