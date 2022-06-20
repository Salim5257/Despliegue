<?php

include('../app/database.php');
session_start();

if ($connection) {

    /* Recoje los datos del usuario y los guarda aquí */

    if (isset($_POST['producto_nombre'])) {
        $id_usuario = $_SESSION['id'];
        $id_producto = $_POST['id_producto'];
        $producto_imagen = $_POST['producto_imagen'];
        $producto_nombre = $_POST['producto_nombre'];
        $producto_desc = $_POST['producto_desc'];
        $producto_precio = $_POST['producto_precio'];

        /* En caso de estar todos los campos, crea el usuario y lo guarda en la base de datos */
        
        $query = "INSERT INTO carrito(id_usuario, id_producto, producto_imagen, producto_nombre, producto_desc, producto_precio) VALUES 
        ('$id_usuario', '$id_producto', '$producto_imagen', '$producto_nombre', '$producto_desc', '$producto_precio')";
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die('Query Failed.');
        }
        header('Location: cart.php');
    }

} else {
    echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
}

?>