<?php
  $id=$_GET['id'];
  include("conexion.php");


  $sql="delete from usuarios2 where id='".$id."'";
  $resultado=mysqli_query($conexion,$sql);


if ($resultado) {
    echo"
    <script  languaje='JavaScript' >
    alert('los datos se eliminaron correctamente');
    location.assign('inde.php');
    
    </script>";
} else {
    echo"
    <script  languaje='JavaScript' >
    alert('los datos no se eliminaron');
    location.assign('inde.php');
    
    </script>";
}




?>