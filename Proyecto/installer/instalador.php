<?php
    session_start();

    $usuariodb = $_POST['usuariodb'];
    $contrasenadb = $_POST['contrasenadb'];
    $db = $_POST['db'];
    $_SESSION['db'] = $db;

    $connection = mysqli_connect(
      'localhost', $usuariodb, $contrasenadb
    );

    if($connection){
      
      $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$db'";
      $result = mysqli_query($connection, $query);

      if (mysqli_fetch_row($result) == 0) {

        try {
            shell_exec("/var/www/html/Despliegue/Proyecto/installer/instalador.sh $usuariodb $contrasenadb $db");
        } catch (\Throwable $th){
            throw $th;
        }

        $nombreArchivo = "database.php";
        $nombreArchivo2 = $nombreArchivo;
        $nuevoArchivo = fopen("../app/$nombreArchivo2", 'w');

        $codigo = "
            <?php
                \$connection = mysqli_connect(
                    'localhost', '$usuariodb', '$contrasenadb', '$db'
                );
            ?>";

        fwrite($nuevoArchivo,$codigo);
        fclose($nuevoArchivo);
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
                      <h2>Instalación completada</h2>
                    </div>
                  </div>

                  <div class="login-wrap p-4 p-lg-5">

                    <div class="d-flex">
                      <div class="w-100">
                        <h3 class="mb-4" style="font-weight: bold;">Acceso aceptado</h3>
                      </div>
                      <div class="w-100">
                        <p class="social-media d-flex justify-content-end">
                          <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                          <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                          <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
                        </p>
                      </div>
                    </div>

                    <form action="acceso.php" method="post" class="signin-form needs-validation" novalidate>
                      <div class="form-group mb-3">
                        <label class="label" for="correo">Correo electrónico</label>
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="correo administrador" required maxlength="30" pattern="[a-zA-Z0-9_.]+@+[a-zA-Z]+.[a-z]{1,30}">
                        <div class="valid-feedback">Campo OK</div>
                        <div class="invalid-feedback">Introduzca su correo</div>
                      </div>

                      <div class="form-group mb-3">
                        <label class="label" for="correo">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="contraseña administrador" required maxlength="12" pattern="[A-Za-z0-9!_.?$]{7,20}">
                        <div class="valid-feedback">Campo OK</div>
                        <div class="invalid-feedback">Introduzca su contraseña</div>
                      </div>

                      <div class="form-group">
                          <a href="#"><button type="submit" class="btn btn-primary w-100 submit">Enviar</button></a>
                      </div>
                    </form>

                  </div>

                </div>
              </div>
            </div>

          </div>

        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
          'use strict'
      
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.querySelectorAll('.needs-validation')
      
          // Loop over them and prevent submission
          Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }
      
              form.classList.add('was-validated')
            }, false)
          })
        })()
        </script>
        <script type="text/javascript">(function(){window['__CF$cv$params']={r:'6db06682fb215fe3',m:'YuZ.qtIOM6EZKiH6Xc93zzNZZPg6DCoASbKV0N1673w-1644444339-0-AYSHEDPBmJo28Tyv5kktxxsnn9x2ix586V5K76RCNlp1dlQKq/g6AZrl/UP2N8YRLiFCprgg+n6xEL5SWhm2eSA+NbTkFElvK+D8I5Yi8x/IEbuq6oJrO9yoU/dGHdjH7OcSf9kRhgr6NtCSH/bKqWFk9RKbh4c5A5GBtmeuh/CoPwVOzBa5Sem5eXCgFA4Ikg==',s:[0x62563277c7,0x9a3ef57bd7],}})();</script>
      </body>
      </html>
  <?php
    } else {
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
                  <h2>Bienvenido a la página de comprobación de instalación</h2>
                </div>
              </div>

              <div class="login-wrap p-4 p-lg-5">

                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4" style="font-weight: bold;">Hay un error</h3>
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
                      <h3>La base de datos ya existe</h3>
                  </div>

                  <br>

                  <div class="form-group">
                      <a href="../installer/index-install.php"><button type="submit" class="btn btn-primary w-100 submit">Volver a la página de instalación</button></a>
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
                  <h2>Bienvenido a la página de comprobación de instalación</h2>
                </div>
              </div>

              <div class="login-wrap p-4 p-lg-5">

                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4" style="font-weight: bold;">Hay un error</h3>
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
                      <h3>Los datos introducidos no son correctos</h3>
                  </div>

                  <br>

                  <div class="form-group">
                      <a href="../installer/index-install.php"><button type="submit" class="btn btn-primary w-100 submit">Volver a la página de instalación</button></a>
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
?>