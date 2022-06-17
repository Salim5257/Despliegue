<?php

include('../app/database.php');
session_start();

if ($connection) {

  if(isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == '1') {
    $id_rol = $_SESSION['id_rol'];
  } else {
    header('Location: ../login/login.php');
  }

  ?>

  <!DOCTYPE html>
  <html lang="es">
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
    <link rel="stylesheet" href="../admin/css/style.css">
    <script src="https://kit.fontawesome.com/de65a6f925.js" crossorigin="anonymous"></script>
    <title>Salim Ahmed Mizzian</title>
  </head>
  <body>

    <!-- header section -->
    <header>
      <div class="header-1">

        <a href="../index.php" class="logo"> <i class="fa fa-thin fa-store"></i> <b>Foot Base Administration</b></a>

        <div class="form-container">
          <form action="../app/search-php/search-user.php">
            <input type="search" placeholder="Buscar" id="searchUser">
            <label for="searchUser" class="fas fa-search"><span style="color:transparent;">ˍ</span></label>
          </form>
          <div id="resultado">
            <div>
              <ul id="contenedor"></ul>
            </div>
          </div>
        </div>

      </div>

      <div class="header-2">

        <nav class="navbar">
          <ul>
            <li><a class="active" href="../admin/user-admin.php">Usuarios</a></li>
            <li><a href="../admin/news-admin.php">Novedades</a></li>
            <li><a href='../admin/product-admin.php'>Productos</a></li>
            <li><a href='../admin/review-admin.php'>Reseñas</a></li>
            <li><a href='../admin/contact-admin.php'>Contacto</a></li>
          </ul>
        </nav>

        <div class="form-group">
          <a href="../index.php"><button type="submit" class="btn btn-primary bg-dark text-white w-100 p-3 fs-4 submit"><b>Volver al inicio</b></button></a>
        </div>

      </div>
    </header>

    <div class="p-4" id="border-admin">

      <!-- Lista de usuarios -->

      <h1><b>Lista de usuarios</b><a href="print/user-print-excel.php" id="print-excel-admin">Excel <i class="fa-solid fa-file-excel"></i></a> <a href="print/user-print-pdf.php" id="print-pdf-admin">PDF <i class="fa-solid fa-file-pdf"></i></a></h1><br>
      <div id="scroll">
        <table class="table border border-primary" id="tabla-admin">
            <thead>
              <tr id="tr-admin">
                <td scope="col" class="text-white"><b>Id</b></td>
                <td scope="col" class="text-white"><b>Nombre</b></td>
                <td scope="col" class="text-white"><b>Apellido</b></td>
                <td scope="col" class="text-white"><b>DNI</b></td>
                <td scope="col" class="text-white"><b>Teléfono</b></td>
                <td scope="col" class="text-white"><b>Correo electrónico</b></td>
                <td scope="col" class="text-white"><b>Contraseña</b></td>
                <td scope="col" class="bg-danger text-white"><b>Eliminar</b></td>
              </tr>
              <tbody id="tasks"></tbody>
            </thead>
        </table>
      </div>

      <br>

      <!-- Editar usuario -->

      <div id="hr-vertical1">
        <h1><b>Editar usuario</b></h1>
          
        <form action="../app/user-edit.php" method="post" id="form-admin">
          <input type="hidden" name="id" id="taskId"><br>

          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" id="nombre" maxlength="30"><br>

          <label for="apellido">Apellido:</label>
          <input type="text" name="apellido" id="apellido" maxlength="30"><br>

          <label for="dni">DNI:</label>
          <input type="text" name="dni" id="dni" maxlength="9"><br>

          <label for="telefono">Teléfono:</label>
          <input type="text" name="telefono" id="telefono" maxlength="12"><br>

          <label for="correo">Correo:</label>
          <input type="text" name="correo" id="correo" maxlength="30"><br>

          <label for="contrasena">Contraseña:</label>
          <input type="text" name="contrasena" id="contrasena" maxlength="20"><br>

          <input type="submit" name="actualizar" value="Actualizar">
        </form>
      </div>

    </div>

    <script src="./js/jquery.js"></script>
    <script src="./js/app-user.js"></script>
    <script src="./js/app-prod.js"></script>
    <script src="./js/search.js"></script>
  </body>
  </html>

  <?php

} else {
      echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
}

?>