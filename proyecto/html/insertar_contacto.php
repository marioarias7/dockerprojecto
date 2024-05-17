<?php

include 'config.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$codigo_postal = $_POST['codigo_postal'];
$telefono = $_POST['telefono'];
$gmail = $_POST['gmail'];
$dni = $_POST['dni'];

$sql = "INSERT INTO contacto (nombre, apellido, direccion, codigo_postal, telefono, gmail, dni) 
        VALUES ('$nombre', '$apellido', '$direccion', '$codigo_postal', '$telefono', '$gmail', '$dni')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>
