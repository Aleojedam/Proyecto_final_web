<?php
require_once("conexion.php");

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
function ModificarBD($titulo,$enlace,$foto,$titulo_n){
    global $conexion;
    $sql = "UPDATE noticias SET titulo = '$titulo_n' , enlace = '$enlace' , foto = '$foto' WHERE titulo = '$titulo'; ";

    $resultado = $conexion->query($sql);
    if ($resultado)
        return True;
    else{
        return False;
    }
}

#recuperacion de datos del formulario
$titulo = $_POST["titulo"];
$enlace = $_POST["link"];
$foto = $_FILES["foto"];
$titulo_n = $_POST["titulo_n"];

$ruta = SubirArchivo($foto);

ModificarBD($titulo, $enlace, $ruta,$titulo_n);
require_once("index.php");
mysqli_close($conexion);








?>