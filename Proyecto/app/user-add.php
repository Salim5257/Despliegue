<?php

    include('database.php');

    /* Recoje los datos del usuario y los guarda aquí */

    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        /* En caso de estar todos los campos, crea el usuario y lo guarda en la base de datos */
        
        $query = "INSERT INTO usuario(nombre, apellido, dni, telefono, correo, contrasena) VALUES 
        ('$nombre', '$apellido', '$dni', '$telefono', '$correo', '$contrasena')";
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die('Query Failed.');
        }
        echo 'Usuario añadido correctamente';
    }

?>