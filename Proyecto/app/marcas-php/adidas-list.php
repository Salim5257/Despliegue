<?php

    include('../database.php');

    /* Recojo los datos cuya marca sea 'adidas' y las guardo en mi base de datos */

    $query = "SELECT * FROM producto WHERE producto_marca = 'adidas'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'producto_marca' => $row['producto_marca'],
            'producto_imagen' => $row['producto_imagen'],
            'producto_nombre' => $row['producto_nombre'],
            'producto_desc' => $row['producto_desc'],
            'producto_precio' => $row['producto_precio'],
            'id' => $row['id']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
    
?>