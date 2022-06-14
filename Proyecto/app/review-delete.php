<?php

include('database.php');

if ($connection) {

    /* En caso de que exista el id, la reseña se elimina de la base de datos */

    if (isset($_POST['id'])) {

        $id = $_POST['id'];

        $query = "DELETE FROM reseña WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query Failed.');
        }
        echo "Reseña eliminada correctamente";
    }

} else {
      echo "<script type='text/javascript'>window.location.href = '../installer/index-install.php';</script>";
}

?>