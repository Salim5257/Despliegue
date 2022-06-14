<?php
  include ("app/database.php");
  session_start();

  /* Aquí compruebo si la sesión es 'invitado', 'admin' o un usuario registrado */

  if(isset($_SESSION['invitado'])){
    $invitado = $_SESSION['invitado'];
  } else if(isset($_SESSION['admin'])){
    $admin = $_SESSION['admin'];
  } else if(isset($_SESSION['correo'])){
    $correo = $_SESSION['correo'];

  /* En caso de que no sea ninguna de las 3 opciones, te redirige a la página de login */
  } else {
    header("Location: login/login.php");
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="fonts/font-awesome.css">
  <link rel="stylesheet" href="fonts/google-fonts.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.green.min.css">
  <link rel="stylesheet" href="css/responsive-prod.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/de65a6f925.js" crossorigin="anonymous"></script>
  <title>Salim Ahmed Mizzian</title>
</head>
<body>
  
  <!-- header section -->

  <header>

    <div class="header-1">

      <a href="../Proyecto/index.php" class="logo"> <i class="fa fa-thin fa-store"></i> <b>Foot Base</b></a>

      <div class="form-container">
        <form action="#">
          <input type="search" placeholder="Buscar productos" id="search">
          <label for="search" class="fas fa-search"><span style="color:transparent;">ˍ</span></label>
        </form>
      </div>

    </div>

    <div class="header-2">

      <nav class="navbar">
        <ul>
          <li><a class="active" href="#home">Inicio</a></li>
          <li><a href="#product">Productos</a></li>
          <li><a href="#review">Reseñas</a></li>
          <li><a href='#contact'>Contacto</a></li>
        </ul>
      </nav>

      <div class="icons">

        <?php
          /* En caso de que la sesión sea de un usuario registrado, se mostrarán los botones de favoritos, carrito y el usuario junto a un botón para cerrar sesión */
          if(isset($_SESSION['correo'])){
            echo "<a href='app/review.php' class='fas fa-star' aria-label='review'></a>";
            echo "<a href='#' class='fas fa-heart' aria-label='like button'></a><a href='#' class='fas fa-shopping-cart' aria-label='cart button'></a>";
            echo "<a href='#' id='user-session'> <i class='fas fa-user'></i> ". $_SESSION['correo'] ."</a>";
            echo "<a href='login/close_session.php' aria-label='close-session button' class='fa-solid fa-door-open' style='color: #EB4D4B;'></a>";
          /* En caso de que la sesión sea 'admin', se mostrará un botón que te redirige a la página de administrador y un botón para loguearse */
          } else if(isset($_SESSION['admin'])) {
            echo "<a href='admin/user-admin.php' aria-label='admin button'><i class='fa-solid fa-table'></i></a>";
            echo "<a href='login/login.php' aria-label='session button'><i class='fas fa-user'></i></a>";
          /* En caso de que no sea ninguna de las 2 opciones, es decir, que sea 'invitado', se mostrará unicamente un botón para loguearse */
          } else {
            echo "<a href='login/login.php' aria-label='session button'><i class='fas fa-user'></i></a>";
          }
        ?>

      </div>

    </div>

  </header>

  <!-- home section -->

  <section id="home" class="owl-carousel owl-theme home-slider">
    <?php 
      $query = "SELECT * FROM producto ORDER BY id DESC LIMIT 5";
      $result = mysqli_query($connection, $query);
      
      $i = 0;

      while(($i < 1) && ($row = mysqli_fetch_array($result))){
        ?>
        <div class="slide item active">
          
          <div class="content text-left text-md-left ps-md-5 ms-md-5">
            <h1><?php echo $row['producto_nombre']; ?></h1>
            <p><?php echo $row['producto_desc']; ?></p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3 class="price"><?php echo $row['producto_precio']; ?>€</h3>
            <?php
              /* En caso de que la sesión sea un usuario registrado se mostrará el botón para añadir al carrito del producto del header */
              if(isset($_SESSION['correo'])){
                echo "<a href='#'><button>Añadir al carrito <i class='fas fa-shopping-cart'></i></button></a>";
              } else if (isset($_SESSION['admin'])) {
                echo "<a href='#'><button>Añadir al carrito <i class='fas fa-shopping-cart'></i></button></a>";
              } else {
                echo "";
              }
            ?>
          </div>
            
          <div class="image">
            <img src="images/<?php echo $row['producto_imagen']; ?>" alt="">
          </div>

        </div>
      <?php
      $i = $i + 1;
      }

      while($row = mysqli_fetch_array($result)){
        ?>
        <div class="slide item">
          
          <div class="content text-left text-md-left ps-md-5 ms-md-5">
            <h1><?php echo $row['producto_nombre']; ?></h1>
            <p><?php echo $row['producto_desc']; ?></p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3 class="price"><?php echo $row['producto_precio']; ?>€</h3>
            <?php
              /* En caso de que la sesión sea un usuario registrado se mostrará el botón para añadir al carrito del producto del header */
              if(isset($_SESSION['correo'])){
                echo "<a href='#'><button>Añadir al carrito <i class='fas fa-shopping-cart'></i></button></a>";
              } else if (isset($_SESSION['admin'])) {
                echo "<a href='#'><button>Añadir al carrito <i class='fas fa-shopping-cart'></i></button></a>";
              } else {
                echo "";
              }
            ?>
          </div>
            
          <div class="image">
            <img src="images/<?php echo $row['producto_imagen']; ?>" alt="">
          </div>

        </div>
      <?php
      $i = $i + 1;
      }
    ?>
  </section>

  <!-- brand section -->

  <div id="brand">

    <div class="brand-slider owl-carousel owl-theme">
      <a href="#adidas"><img src="images/brand1.png" alt="adidas" class="item"></a>
      <a href="#nike"><img src="images/brand2.png" alt="nike" class="item"></a>
      <a href="#puma"><img src="images/brand3.png" alt="puma" class="item"></a>
      <a href="#jordan"><img src="images/brand4.png" alt="jordan" class="item"></a>
      <a href="#reebok"><img src="images/brand5.png" alt="reebok" class="item"></a>
      <a href="#fila"><img src="images/brand6.png" alt="fila" class="item"></a>
      <a href="#vans"><img src="images/brand7.png" alt="vans" class="item"></a>
    </div>

  </div>

  <hr>

  <!-- product section -->

  <section id="product">

    <h1 class="heading"><b>Productos</b></h1>

    <!-- adidas -->

    <div class="product-container">

      <h2 class="title" id="adidas"><b>Adidas</b></h2>

      <div class="product-slider owl-carousel owl-theme" id="mostrarAdidas">
      
      </div>

    </div>

    <!-- nike -->

    <div class="product-container">

      <h2 class="title" id="nike"><b>Nike</b></h2>
        
      <div class="product-slider owl-carousel owl-theme" id="mostrarNike">

      </div>

    </div>

    <!-- puma -->

    <div class="product-container">

      <h2 class="title" id="puma"><b>Puma</b></h2>
        
      <div class="product-slider owl-carousel owl-theme" id="mostrarPuma">

      </div>

    </div>

    <!-- jordan -->

    <div class="product-container">

      <h2 class="title" id="jordan"><b>Jordan</b></h2>
        
      <div class="product-slider owl-carousel owl-theme" id="mostrarJordan">
        
      </div>

    </div>

    <!-- reebok -->

    <div class="product-container">

      <h2 class="title" id="reebok"><b>Reebok</b></h2>
        
      <div class="product-slider owl-carousel owl-theme" id="mostrarReebok">

      </div>

    </div>

    <!-- fila -->

    <div class="product-container">

      <h2 class="title" id="fila"><b>Fila</b></h2>
        
      <div class="product-slider owl-carousel owl-theme" id="mostrarFila">

      </div>

    </div>

    <!-- vans -->

    <div class="product-container">

      <h2 class="title" id="vans"><b>Vans</b></h2>
        
      <div class="product-slider owl-carousel owl-theme" id="mostrarVans">

      </div>

    </div>

  </section>

  <div class='separ' style='padding: 5rem;'></div>

  <!-- review section -->

  <section id="review">

    <div class="heading"><b>Reseñas de nuestros clientes</b></div>

    <div class="box-container">

      <div class="owl-carousel owl-theme review-slider">
        <?php 
          $query = "SELECT * FROM reseña";
          $result = mysqli_query($connection, $query);
          
          $i = 0;

          while(($i < 1) && ($row = mysqli_fetch_array($result))){
        ?>
            <div class="box item active">
              <div class="comment">
                  <p><i class="fas fa-quote-left"></i><?php echo $row['reseña_comentario']; ?><i class="fas fa-quote-right"></i></p>
                  <h3><?php echo $row['reseña_nombre']; ?></h3>
              </div>
      
              <div class="image">
                  <img src="images/user.png" alt="">
              </div>
            </div>
        <?php
              $i = $i + 1;
          }
        ?>

        <?php 
            while($row = mysqli_fetch_array($result)){
        ?>
              <div class="box item">
                <div class="comment">
                    <p><i class="fas fa-quote-left"></i><?php echo $row['reseña_comentario']; ?><i class="fas fa-quote-right"></i></p>
                    <h3><?php echo $row['reseña_nombre']; ?></h3>
                </div>
        
                <div class="image">
                  <img src="images/user.png" alt="">
                </div>
              </div>
                <?php
                $i = $i + 1;
            }
        ?>
      </div>

    </div>

  </section>

  <!-- contact section -->

  <section id='contact'>
    <form action='app/contact-add.php' method='post'>
      <h1>Contacto</h1>
      <p>Escríbenos aquí el asunto que quiera tratar <br>y trataremos de responderle lo más pronto posible</p><br>
                  
      <p><label for='correo'>Correo electrónico:</label></p>
      <input type='text' id='correo' name='correo' placeholder='email@gmail.com'><br><br>
            
      <p><label for='mensaje'>Mensaje:</label></p>
      <textarea id='mensaje' name='mensaje' placeholder='introduzca un mensaje' cols='40' rows='4'></textarea><br>
            
      <input type='submit' value='Enviar'>
    </form>
  </section>

  <!-- footer section -->

  <section id="footer" class="container-fluid">

    <div class="row">

      <div class="col-md-4 text-center brand-info">
        <a href="index.php" class="logo"><i class="fa fa-thin fa-store"></i><h3>Foot Base</h3></a>
        <p>footbase.shop@gmail.com<br>
        Teléfono: 611 610 101<br>
        Provincia: Melilla</p>
      </div>

      <div class="col-md-4 text-center links">
        <h3>Menú</h3>
        <div class="nav-links">
          <a href="#home">Inicio</a>
          <a href="#product">Productos</a>
          <a href="#review">Reseña</a>
          <a href='#contact'>Contacto</a>
        </div>
      </div>

      <div class="col-md-3 text-center follow-us">
        <h3>Redes Sociales</h3>
        <div class="follow-us-links">
          <a href="#">Facebook</a>
          <a href="#">Twitter</a>
          <a href="#">Instagram</a>
          <a href="#">Pinterest</a>
        </div>
      </div>

    </div>

    <div class="credit text-center">
      &copy; copyright @ 2022 by <span>Salim Ahmed Mizzian</span>
    </div>

  </section>
  
  <script src="js/jquery.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mostrar-productos.js"></script>
  <script src="js/mostrar-review.js"></script>
  <script src="js/script.js"></script>
</body>
</html>