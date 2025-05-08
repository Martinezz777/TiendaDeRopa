<?php
// Configuración de conexión a la base de datos
$host = "localhost";
$usuario = "root"; // Cambia esto si usas otro usuario
$clave = ""; // Deja vacío si no tienes contraseña
$base_datos = "martinezz_db";

// Conectar a la base de datos
$conn = new mysqli($host, $usuario, $clave, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];



// Insertar datos en la base de datos
$sql = "INSERT INTO clientes (Nombre, email, Telefono, Direccion) VALUES ('$nombre', '$email', '$telefono', '$direccion')";

if ($conn->query($sql) === TRUE) {
    echo "Registro guardado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>