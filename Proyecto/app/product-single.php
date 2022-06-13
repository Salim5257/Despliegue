<?php

    include('database.php');

    /* Selecciona un solo usuario y recoje sus datos a través de su id */

    $id = $_POST['id'];
    $query = "SELECT * FROM producto WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query Failed');
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array (
            'id' => $row['id'],
            'producto_marca' => $row['producto_marca'],
            'producto_imagen' => $row['producto_imagen'],
            'producto_nombre' => $row['producto_nombre'],
            'producto_desc' => $row['producto_desc'],
            'producto_precio' => $row['producto_precio']
            
        );
    }

    $jsonstring = json_encode($json[0]);
    echo $jsonstring;

?>