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
        <form action="#">
          <input type="search" placeholder="Buscar" id="search">
          <label for="search" class="fas fa-search"><span style="color:transparent;">ˍ</span></label>
        </form>
      </div>

    </div>

    <div class="header-2">

      <nav class="navbar">
        <ul>
          <li><a href="../admin/user-admin.php">Usuarios</a></li>
          <li><a href="../admin/news-admin.php">Novedades</a></li>
          <li><a class="active" href='../admin/product-admin.php'>Productos</a></li>
          <li><a href='../admin/review-admin.php'>Reseñas</a></li>
          <li><a href='../admin/contact-admin.php'>Contacto</a></li>
        </ul>
      </nav>

      <form action="../app/login-check.php" method="post">
        <input type="hidden" name="admin" value="Soy admin">

        <div class="form-group">
          <button type="submit" class="btn btn-primary bg-dark text-white w-100 p-3 fs-4 submit"><b>Volver al inicio</b></button>
        </div>
      </form>

    </div>
  </header>

  <div class="p-4" id="border-admin">

    <!-- Lista de productos -->

    <h1><b>Lista de productos</b> <a href="print/product-print-excel.php" id="print-excel-admin">Excel <i class="fa-solid fa-file-excel"></i></a> <a href="print/user-print-pdf.php" id="print-pdf-admin">PDF <i class="fa-solid fa-file-pdf"></i></a></h1><br>

    <div id="scroll">
      <table class="table border border-primary" id="tabla-admin">
          <thead>
            <tr id="tr-admin">
              <td scope="col" class="text-white"><b>Id</b></td>
              <td scope="col" class="text-white"><b>Marca</b></td>
              <td scope="col" class="text-white"><b>Imagen</b></td>
              <td scope="col" class="text-white"><b>Nombre</b></td>
              <td scope="col" class="text-white"><b>Descripción</b></td>
              <td scope="col" class="text-white"><b>Precio</b></td>
              <td scope="col" class="bg-danger text-white"><b>Eliminar</b></td>
            </tr>
            <tbody id="tasks-prod"></tbody>
          </thead>
      </table>
    </div>

    <br>

    <div class="panel">

      <!-- Crear producto -->

      <div id="hr-vertical2">
        <h1><b>Crear producto</b></h1><br>

        <form action="../app/product-add.php" method="post" id="form-admin">
          <label for="marca">Marca:</label>
          <input type="text" name="producto_marca" id="" style="text-transform: lowercase;"><br>

          <label for="imagen">Imagen:</label>
          <input type="file" name="producto_imagen" id=""><br>

          <label for="nombre">Nombre:</label>
          <input type="text" name="producto_nombre" id=""><br>

          <label for="descripcion">Descripción:</label>
          <input type="text" name="producto_desc" id=""><br>

          <label for="precio">Precio:</label>
          <input type="text" name="producto_precio" id="">€<br>

          <input type="submit" name="enviar" value="Enviar">
        </form>
      </div>

      <!-- Editar producto -->

      <div id="editar-prod">
        <h1><b>Editar producto</b></h1>
          
        <form action="../app/product-edit.php" method="post" id="form-admin">
          <input type="hidden" name="id" id="task-prodId"><br>

          <label for="marca">Marca:</label>
          <input type="text" name="producto_marca" id="producto_marca"><br>

          <label for="imagen">Imagen:</label>
          <input type="text" name="producto_imagen" id="producto_imagen"><br>

          <label for="nombre">Nombre:</label>
          <input type="text" name="producto_nombre" id="producto_nombre"><br>

          <label for="descripcion">Descripción:</label>
          <input type="text" name="producto_desc" id="producto_desc"><br>

          <label for="precio">Precio:</label>
          <input type="text" name="producto_precio" id="producto_precio">€<br>

          <input type="submit" name="editar" value="Actualizar">
        </form>
      </div>

    </div>

  </div>

  <script src="./js/jquery.js"></script>
  <script src="./js/app-user.js"></script>
  <script src="./js/app-prod.js"></script>
</body>
</html>