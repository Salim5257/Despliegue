<?php

    include('../../app/database.php');

    /* Lista de cabeceras que me permiten crear un pdf para la lista de contactos */

    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment;filename='contact-print-pdf.xls'");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Pragma: public");

    /* Recojo los datos de contacto y los guardo en mi base de datos */

    $query = "SELECT * FROM contacto";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'correo' => $row['correo'],
            'mensaje' => $row['mensaje'],
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
            <th style="background-color: blue; color: white;">Correo</th>
            <th style="background-color: blue; color: white;">Mensaje</th>
        </tr>
        <tbody> 
            <?php foreach($json as $user){ ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['correo']; ?></td>
                    <td><?php echo $user['mensaje']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>