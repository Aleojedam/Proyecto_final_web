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
function InsertarBD($titulo,$enlace,$foto){
    global $conexion;
    $sql = "INSERT INTO noticias (titulo,enlace,foto) VALUES ('$titulo','$enlace','$foto')";

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

$ruta = SubirArchivo($foto);

InsertarBD($titulo, $enlace, $ruta);
require_once("index.php");
mysqli_close($conexion);








?>