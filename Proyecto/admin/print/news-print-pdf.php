<?php

    include('../../app/database.php');

    /* Lista de cabeceras que me permiten crear un pdf para la lista de novedades */

    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment;filename='news-print-pdf.xls'");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Pragma: public");

    /* Recojo los datos de novedades y los guardo en mi base de datos */

    $query = "SELECT * FROM producto ORDER BY id DESC LIMIT 5";
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
?>

<!-- Le doy forma de tabla al pdf -->
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
            <th style="background-color: blue; color: white;">Marca</th>
            <th style="background-color: blue; color: white;">Imagen</th>
            <th style="background-color: blue; color: white;">Nombre</th>
            <th style="background-color: blue; color: white;">Descripción</th>
            <th style="background-color: blue; color: white;">Precio</th>
        </tr>
        <tbody> 
            <?php foreach($json as $user){ ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['producto_marca']; ?></td>
                    <td><?php echo $user['producto_imagen']; ?></td>
                    <td><?php echo $user['producto_nombre']; ?></td>
                    <td><?php echo $user['producto_desc']; ?></td>
                    <td><?php echo $user['producto_precio']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>