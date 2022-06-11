<?php

    include('../../app/database.php');

    /* Lista de cabeceras que me permiten crear una hoja excel para la lista de reseñas */

    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment;filename='review-print-excel.xls'");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Pragma: public");

    /* Recojo los datos de reseña y los guardo en mi base de datos */

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
            'reseña_imagen' => $row['reseña_imagen'],
            'id' => $row['id']
        );
    }
?>

<!-- Le doy forma de tabla al excel -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <table>
        <tr>
            <th style="background-color: blue; color: white;">Id</th>
            <th style="background-color: blue; color: white;">Comentario</th>
            <th style="background-color: blue; color: white;">Nombre</th>
            <th style="background-color: blue; color: white;">Imagen</th>
        </tr>
        <tbody> 
            <?php foreach($json as $user){ ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['reseña_comentario']; ?></td>
                    <td><?php echo $user['reseña_nombre']; ?></td>
                    <td><?php echo $user['reseña_imagen']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>