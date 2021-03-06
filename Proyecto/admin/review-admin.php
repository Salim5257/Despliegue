<?php

include('../app/database.php');

if ($connection) {

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
          <form action="../app/search-php/search-review.php">
            <input type="search" placeholder="Buscar" id="searchReview">
            <label for="searchReview" class="fas fa-search"><span style="color:transparent;">ˍ</span></label>
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
            <li><a href="../admin/user-admin.php">Usuarios</a></li>
            <li><a href="../admin/news-admin.php">Novedades</a></li>
            <li><a href='../admin/product-admin.php'>Productos</a></li>
            <li><a class="active" href='../admin/review-admin.php'>Reseñas</a></li>
            <li><a href='../admin/contact-admin.php'>Contacto</a></li>
          </ul>
        </nav>

        <div class="form-group">
          <a href="../index.php"><button type="submit" class="btn btn-primary bg-dark text-white w-100 p-3 fs-4 submit"><b>Volver al inicio</b></button></a>
        </div>

      </div>
    </header>

    <div class="p-4" id="border-admin">

      <!-- Lista de reseñas -->

      <h1><b>Lista de reseñas</b> <a href="print/review-print-excel.php" id="print-excel-admin">Excel <i class="fa-solid fa-file-excel"></i></a> <a href="print/review-print-pdf.php" id="print-pdf-admin">PDF <i class="fa-solid fa-file-pdf"></i></a></h1><br>

      <div id="scroll">
        <table class="table border border-primary" id="tabla-admin">
            <thead>
              <tr id="tr-admin">
                <td scope="col" class="text-white"><b>Id</b></td>
                <td scope="col" class="text-white"><b>Comentario</b></td>
                <td scope="col" class="text-white"><b>Nombre</b></td>
                <td scope="col" class="bg-danger text-white"><b>Eliminar</b></td>
              </tr>
              <tbody id="tasks-review"></tbody>
            </thead>
        </table>
      </div>

      <br>

      <div class="panel">

        <!-- Editar reseña -->

        <div id="hr-vertical1">
          <div id="editar-review">
            <h1><b>Editar reseña</b></h1>
              
            <form action="../app/review-edit.php" method="post" id="form-admin">
              <input type="hidden" name="id" id="task-reviewId"><br>

              <label for="marca">Comentario:</label>
              <input type="text" name="reseña_comentario" id="reseña_comentario"><br>

              <label for="imagen">Nombre:</label>
              <input type="text" name="reseña_nombre" id="reseña_nombre"><br>

              <input type="submit" name="editar" value="Actualizar">
            </form>
          </div>
        </div>

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