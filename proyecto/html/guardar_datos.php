<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Datos de conexión a la base de datos
$servername = "127.0.0.1"; // Cambiar si la base de datos está en otro servidor
$username = "user"; // Nombre de usuario de MySQL
$password = "password"; // Contraseña de MySQL
$database = "mydatabase"; // Nombre de la base de datos a la que deseas conectarte
$port = 3307; // Puerto de MySQL (opcional, si es diferente al predeterminado)

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos";
}
// Variables con los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = @$_POST['correo'];
$telefono = $_POST['telefono'];

// Consulta SQL para insertar los datos en la tabla 'solicita'
$sql = "INSERT INTO solicita (nombre, apellido, correo_electronico, telefono) VALUES ('$nombre', '$apellido', '$correo', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Variables con los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $codigo_postal = $_POST['codigo_postal'];
    $telefono = $_POST['telefono'];
    $gmail = $_POST['gmail'];
    $dni = $_POST['dni'];

    // Consulta SQL para insertar los datos en la tabla 'contacto'
    $sql = "INSERT INTO contacto (nombre, apellido, direccion, codigo_postal, telefono, gmail, dni) 
            VALUES ('$nombre', '$apellido', '$direccion', '$codigo_postal', '$telefono', '$gmail', '$dni')";

    if ($conn->query($sql) === TRUE) {
        echo "Los datos se han guardado correctamente";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }



// No es necesario cerrar la conexión aquí si no vas a realizar ninguna operación adicional
$conn->close();
?>



