<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agregar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
if (isset($_POST['enviar'])) {
   $usuario=$_POST['usuario'];
   $password=$_POST['password'];

   include("conexion.php");

   $sql="insert into usuarios2(usuario,password)values('".$usuario."','".$password."')";
   $resultado=mysqli_query($conexion,$sql);

   if($resultado){
    echo"<script languaje='JavaScript'>
    alert('los datos fueron ingresados correctamente');
    location.assign('inde.php');
    </script> ";
   }else{
    echo"<script languaje='JavaScript'>
    alert('los datos no fueron ingresados');
    location.assign('inde.php');
    </script> ";

   }
   mysqli_close($conexion);

} else {
    


?>
    <h1>agregar nuevos usuarios</h1>
    <form action="<?=$_SERVER¨['PHP_SELF']   ?>" method="post">
        <label>usuario:</label>
        <input type="text" name="usuario">
        <br>
        <label>password:</label>
        <input type="text" name="password"><br>
        <input type="submit" name="enviar" value="Agregar">
        <a href="index.php">regresar</a>
    </form>
    <?php
    }
    ?>
</body>
</html>