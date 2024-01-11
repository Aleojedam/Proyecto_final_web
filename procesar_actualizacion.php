<?php
session_start();
require_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asumiendo que recibes los datos del formulario aquí
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    

    $sql = "UPDATE formulario SET nombre = ?, apellido = ?, email = ?, telefono = ? WHERE email = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssi", $nombre, $apellido, $email, $telefono, $_SESSION['email']);

    if ($stmt->execute()) {
        header("Location: perfil.php");
        exit();
    } else {
        echo "Error al actualizar los datos.";
    }
}
?>

