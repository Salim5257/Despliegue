<?php

include('../database.php');

if ($connection) {
    $search = $_POST['search'];
    $query = "SELECT * from usuario WHERE nombre LIKE '$search%'";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query Failed'. mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido'],
            'dni' => $row['dni'],
            'telefono' => $row['telefono'],
            'correo' => $row['correo'],
            'contrasena' => $row['contrasena']
        );
    }
            $jsonstring = json_encode($json);
            echo $jsonstring;
            mysqli_close($connection);

} else {
    echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
}

?>