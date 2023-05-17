<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];


$consulta = "SELECT* FROM usuarios2 where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");

}else{
    include("index.php");
    ?>
    <h2>ERROR DE AUTENTIFICACION</h2>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>