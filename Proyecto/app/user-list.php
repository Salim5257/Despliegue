<?php

    include('database.php');

    /* Selecciona y muestra todos los usuarios que se encuentren en la base de datos */

    $query = "SELECT * FROM usuario";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido'],
            'dni' => $row['dni'],
            'telefono' => $row['telefono'],
            'correo' => $row['correo'],
            'contrasena' => $row['contrasena'],
            'id' => $row['id']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
    
?>