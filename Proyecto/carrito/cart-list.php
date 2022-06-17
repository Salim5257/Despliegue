<?php

include('../app/database.php');
session_start();

if ($connection) {

    /* Selecciona y muestra todos los productos en favoritos que se encuentren en la base de datos */

    $id = $_SESSION['id'];

    $query = "SELECT * FROM carrito WHERE id_usuario = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'id_usuario' => $row['id_usuario'],
            'id_producto' => $row['id_producto'],
            'producto_imagen' => $row['producto_imagen'],
            'producto_nombre' => $row['producto_nombre'],
            'producto_desc' => $row['producto_desc'],
            'producto_precio' => $row['producto_precio'],
            'id' => $row['id']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;

} else {
    echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
}

?>