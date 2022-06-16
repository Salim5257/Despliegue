<?php

include('../app/database.php');

if ($connection) {

  /* Recojo todos los datos del registro y el código */

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $codigo2 = $_POST['codigo2'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css"/>
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
                <h2>Bienvenido a la página de verificación</h2>
                <p>¿Ya tienes cuenta?</p>
                <a href="login.php" class="btn btn-white btn-outline-white">Inicia sesión</a>
              </div>
            </div>

            <div class="login-wrap p-4 p-lg-5">

              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Verificación</h3>
                </div>
                <div class="w-100">
                  <p class="social-media d-flex justify-content-end">
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
                  </p>
                </div>
              </div>

              <form action="../app/code-check.php" method="post">

                <div class="form-group mb-3">
                  <label class="label" for="codigo">Introduzca el código de 6 dígitos</label>
                  <input type="text" class="form-control" name="codigo" placeholder="123456">
                </div>

                <!-- Recojo todos los datos del registro y los dejo en oculto para que no se muestren -->

                <input type="hidden" name="codigo2" value="<?php echo $codigo2 ?>">

                <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
                <input type="hidden" name="apellido" value="<?php echo $apellido ?>">
                <input type="hidden" name="dni" value="<?php echo $dni ?>">
                <input type="hidden" name="telefono" value="<?php echo $telefono ?>">
                <input type="hidden" name="correo" value="<?php echo $correo ?>">
                <input type="hidden" name="contrasena" value="<?php echo $contrasena ?>">

                <div class="form-group">
                  <button type="submit" class="btn btn-primary w-100 submit">Enviar código</button>
                </div>

                <br>

                <div class="form-group d-md-flex">

                  <div class="w-50 text-md-right">
                    <a href="registro.php" style="color: black;">Volver al Registro</a>
                  </div>
                </div>

              </form>

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
      echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
}

?>
