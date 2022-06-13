<?php

    include('../../app/database.php');

    ob_start(); //Soluciona el error de headers already sent
    use Dompdf\Dompdf;

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
            <th style="background-color: blue; color: white;">Comentario</th>
            <th style="background-color: blue; color: white;">Nombre</th>
        </tr>
        <tbody> 
            <?php foreach($json as $user){ ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['reseña_comentario']; ?></td>
                    <td><?php echo $user['reseña_nombre']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

<?php
    require("pdf/dompdf/autoload.inc.php");
    $dompdf = new DOMPDF();
    $dompdf->loadHtml(ob_get_clean());
    $dompdf->render();
    $pdf = $dompdf->output();
    $filename = 'review-print-pdf.pdf';
    $dompdf->stream($filename, array("Attachment" => 0));
?>  