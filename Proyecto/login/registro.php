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
                                <h2>Bienvenido a la página de registro</h2>
                                <p>¿Ya tienes cuenta?</p>
                                <a href="./login.php" class="btn btn-white btn-outline-white">Inicia sesión</a>
                            </div>
                        </div>

                        <div class="login-wrap p-4 p-lg-5">

                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Regístrese</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span><span style="color:transparent;">.</span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span><span style="color:transparent;">.</span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span><span style="color:transparent;">.</span></a>
                                    </p>
                                </div>
                            </div>

                            <form action="../app/email-check.php" method="post" class="signin-form needs-validation" novalidate>

                                <div class="form-group">
                                    <label class="label" for="nombre">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="John" required maxlength="30" pattern="[A-Za-z]{1,30}">
                                    <div class="valid-feedback">Campo OK</div>
                                    <div class="invalid-feedback">Introduzca su nombre</div>
                                </div>

                                <div class="form-group">
                                    <label class="label" for="apellido">Apellido</label>
                                    <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Doe" required maxlength="30" pattern="[A-Za-z]{1,30}">
                                    <div class="valid-feedback">Campo OK</div>
                                    <div class="invalid-feedback">Introduzca su apellido</div>
                                </div>

                                <div class="form-group">
                                    <label class="label" for="dni">DNI</label>
                                    <input type="text" name="dni" class="form-control" id="dni" placeholder="12345678A" required maxlength="9" pattern="[0-9]{8}[a-zA-Z]{1}">
                                    <div class="valid-feedback">Campo OK</div>
                                    <div class="invalid-feedback">Introduzca su DNI</div>
                                </div>

                                <div class="form-group">
                                    <label class="label" for="telefono">Teléfono</label>
                                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="34-123456789" required maxlength="12" pattern="[0-9]{2}-[0-9]{9}">
                                    <div class="valid-feedback">Campo OK</div>
                                    <div class="invalid-feedback">Introduzca su teléfono</div>
                                </div>


                                <div class="form-group">
                                    <label class="label" for="correo">Correo electrónico</label>
                                    <input type="text" name="correo" class="form-control" id="correo" placeholder="ejemplo@hotmail.com" required maxlength="30" pattern="[a-zA-Z0-9_.]+@+[a-zA-Z]+.[a-z]{1,30}">
                                    <div class="valid-feedback">Campo OK</div>
                                    <div class="invalid-feedback">Introduzca su correo</div>
                                </div>

                                <div class="form-group">
                                    <label class="label" for="contrasena">Contraseña</label>
                                    <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="deberá comprender entre 7-20 caracteres" required maxlength="12" pattern="[A-Za-z0-9!_.?$]{7,20}">
                                    <div class="valid-feedback">Campo OK</div>
                                    <div class="invalid-feedback">Introduzca su contraseña</div>
                                </div>

                                <br>

                                <div class="form-group">
                                    <a href="#"><button type="submit" class="btn btn-primary w-100 submit">Enviar</button></a>
                                </div>

                                <br>

                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-md-right">
                                        <a href="../index.php" style="color: black;">Volver al Inicio</a>
                                    </div>
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
