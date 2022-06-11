<?php

    include('database.php');

    /* En caso de que exista el id, el producto se elimina de la base de datos */

    if (isset($_POST['id'])) {

        $id = $_POST['id'];

        $query = "DELETE FROM producto WHERE id = $id";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query Failed.');
        }

        echo "Producto eliminado correctamente";
    }
?>