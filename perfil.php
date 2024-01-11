<?php


session_start();

require_once("conexion.php");
$email = $_SESSION ['email'];


$sql = "SELECT id, nombre, apellido, email, rut,foto,telefono, password FROM formulario WHERE email = '".$email."'";
    $resultado = $conexion->query($sql);

while ($data = $resultado->fetch_assoc()){

    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $email = $data['email'];
    $telefono = $data['telefono']; 
    $foto = $data['foto'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-image: url('img/pokemon1.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .form {
        background-color: rgba(255, 255, 255, 0.8);

        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 450px;
        padding: 20px;
        border-radius: 20px;
        position: relative;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .title {
        font-size: 28px;
        color: royalblue;
        font-weight: 600;
        letter-spacing: -1px;
        position: relative;
        display: flex;
        align-items: center;
        padding-left: 30px;
    }

    .title::before,
    .title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 0px;
        background-color: royalblue;
    }

    .title::before {
        width: 18px;
        height: 18px;
        background-color: royalblue;
    }

    .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
    }

    .message,
    .signin {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
    }

    .signin {
        text-align: center;
    }

    .signin a {
        color: royalblue;
    }

    .signin a:hover {
        text-decoration: underline royalblue;
    }

    .flex {
        display: flex;
        width: 100%;
        gap: 6px;
    }

    .form label {
        position: auto;
    }

    .form label .input {
        width: 100%;
        padding: 10px 10px 20px 10px;
        outline: 0;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 10px;
    }

    .form label .input+span {
        position: absolute;
        left: 10px;
        top: 15px;
        color: grey;
        font-size: 0.9em;
        cursor: text;
        transition: 0.3s ease;
    }

    .form label .input:placeholder-shown+span {
        top: 15px;
        font-size: 0.9em;
    }

    .form label .input:focus+span,
    .form label .input:valid+span {
        top: 30px;
        font-size: 0.7em;
        font-weight: 600;
    }

    .form label .input:valid+span {
        color: green;
    }

    .submit {
        border: none;
        outline: none;
        background-color: royalblue;
        padding: 10px;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        transform: .3s ease;
    }

    .submit:hover {
        background-color: rgb(56, 90, 194);
    }

    @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }

        to {
            transform: scale(1.8);
            opacity: 0;
        }
    }

    .pic {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 40%;
    }
    </style>
    <script>
    function habilitarEdicion() {
        document.getElementById("nombre").disabled = false;
        document.getElementById("apellido").disabled = false;
        document.getElementById("email").disabled = false;
        document.getElementById("telefono").disabled = false;
    }
   
    </script>

</head>


<body>
<form class="form" action="procesar_actualizacion.php" method="post" enctype="multipart/form-data">
        <p class="title">Mi Perfil</p>
        <h2 class="message"><b>Datos del perfil:</b></h2>

        <img src="<?php echo htmlspecialchars($foto); ?>" alt="Foto de perfil" id="imagen_perfil" class="pic">
     


        <label for="nombre"><b>Nombre</b></label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" disabled>

        <label for="apellido"><b>Apellido</b></label>
        <input type="text" name="apellido" id="apellido" value="<?php echo $apellido; ?>" disabled>

        <label for="email"><b>Email</b></label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" disabled>

        <label for="telefono"><b>Teléfono</b></label>
        <input type="number" name="telefono" id="telefono" value="<?php echo $telefono; ?>" disabled>

        <button type="button" onclick="habilitarEdicion()"><b>Modificar</b></button>
        <button type="submit" class="submit">Guardar Cambios</button>
        <a href="index.php" class="submit" style="text-decoration: none; color: white; text-align: center; display: inline-block;">Inicio</a>
    </form>
</body>

</html>