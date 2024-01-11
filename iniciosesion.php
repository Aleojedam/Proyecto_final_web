<?php
session_start();
require_once("conexion.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($db_name) {
        $db_name = trim($db_name);
        $db_name = stripslashes($db_name);
        $db_name = htmlspecialchars($db_name);
        return $$db_name;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email) || empty($password)) {
        header("location: formularioInicio.php?error=El Usuario y la Clave son Requeridos");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conexion->prepare("SELECT * FROM formulario WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $hashedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['rol'] = $row['rol'];
        header("location: formularioInicio.php");
        exit();
    } else {
        header("location: formularioInicio.php?error=El Usuario o la contraseña son incorrectas");
        exit();
    }
} else {
    header("location: formularioInicio.php");
    exit();
}
?>
