<?php

include 'config.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO solicita (nombre, apellido, correo_electronico, telefono) VALUES ('$nombre', '$apellido', '$correo', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>
