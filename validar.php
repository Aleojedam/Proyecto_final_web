<?php


$email =$_POST ['email'];
$password=$_POST['password'];

session_start();

$_SESSION ['email']=$email;

require_once("conexion.php");

$consulta="SELECT * FROM formulario where email='$email' and password ='$password'";
$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas){
    header ("location:index.php");
}else{
    ?>
    <?php
    include("formularioInicio.php");
    ?>
    <h1 class ="bad">Error en la autentificacion</h1>
    <?php


}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>