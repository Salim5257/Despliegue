<?php

include('database.php');

if ($connection) {

    /* Selecciona una sola reseña y recoje sus datos a través de su id */

    $id = $_POST['id'];
    $query = "SELECT * FROM reseña WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query Failed');
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array (
            'reseña_comentario' => $row['reseña_comentario'],
            'reseña_nombre' => $row['reseña_nombre'],
            'id' => $row['id']
        );
    }

    $jsonstring = json_encode($json[0]);
    echo $jsonstring;

} else {
      echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
}

?>