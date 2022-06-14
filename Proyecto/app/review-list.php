<?php

    include('database.php');

    /* Selecciona y muestra todos las reseñas que se encuentren en la base de datos */

    $query = "SELECT * FROM reseña";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'reseña_comentario' => $row['reseña_comentario'],
            'reseña_nombre' => $row['reseña_nombre'],
            'id' => $row['id']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
    
?>