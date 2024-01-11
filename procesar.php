<?php
require_once("conexion.php");
$fecha_actual = new DateTime();

function ValidarRut($rut, $digitoVerificador) {
    $rut = preg_replace('/[\.\-]/', '', $rut);
    
    if (!ctype_digit($rut) || strlen($rut) < 7) {
        return false;
    }
    $rutReverso = strrev($rut);
    $suma = 0;
    $multiplicador = 2;

    for ($i = 0; $i < strlen($rutReverso); $i++) {
        $suma += intval($rutReverso[$i]) * $multiplicador;

        $multiplicador = ($multiplicador == 7) ? 2 : $multiplicador + 1;
    }

    $digitoEsperado = 11 - ($suma % 11);

    $digitoEsperado = ($digitoEsperado == 11) ? 0 : (($digitoEsperado == 10) ? 'K' : $digitoEsperado);

    return strtoupper($digitoVerificador) === strtoupper(strval($digitoEsperado));
}
function SubirArchivo($archivo){
    $aNombre = $archivo["name"];
    $directorio = "img/";
    $destino = $directorio . basename($aNombre);

    if(move_uploaded_file($archivo["tmp_name"], $destino)){
        return $destino;
    }
    else{
        return "";
    } 
}
function InsertarBD($nombre,$apellido,$rut,$identificador,$archivo, $email, $password,$telefono){
    global $conexion;
    $sql = "INSERT INTO formulario (nombre,apellido,rut,n_identificador,foto,email,password,telefono) VALUES ('$nombre','$apellido','$rut','$identificador','$archivo','$email','$password','$telefono')";

    $resultado = $conexion->query($sql);
    if ($resultado)
        return True;
    else{
        return False;
    }
}

#recuperacion de datos del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido_p"];
$rut = $_POST["rut"];
$identificador = $_POST["identificador"];
$telefono = $_POST["telefono"];
$foto = $_FILES["foto"];
$email = $_POST["email"];
$password = $_POST["password"];

$ruta = SubirArchivo($foto);

InsertarBD($nombre, $apellido, $rut, $identificador, $ruta, $email, $password, $telefono);
require_once("index.php");
mysqli_close($conexion);

?>