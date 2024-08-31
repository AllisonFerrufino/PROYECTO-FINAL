<?php
// Datos de la conexión
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "alliefer27";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre']; // Corregido para coincidir con el formulario
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Insertar los datos en la tabla
$sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a otra página en caso de éxito
    header("Location: gracias.html");
    exit(); // Asegura que no se ejecute más código después de la redirección
} else {
   header("Location: error.html");
}

// Cerrar la conexión
$conn->close();
?>
