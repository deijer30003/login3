<?php

include("conexion.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
 if(isset($_POST['enviar'])){

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];



$sql="update usuarios2 set usuario='".$usuario."',password='".$password."' where id='".$id."' ";
$resultado=mysqli_query($conexion,$sql);

if ($resultado) {
   echo" <script  languaje='JavaScript'>
   alert('los datos se actualizaron correctamente');
   location.assign('inde.php');
   
   </script>
   ";
} else {
    echo" <script  languaje='JavaScript'>
    alert('los datos no se actualizaron');
    location.assign('inde.php');
    
    </script>
    ";
}
mysqli_close($conexion);



 }else{
$id=$_GET['id'];
$sql="select * from usuarios2 where id='".$id."' ";
$resultado=mysqli_query($conexion,$sql);

$fila=mysqli_fetch_assoc($resultado);
$usuario=$fila["usuario"];
$password=$fila["password"];

mysqli_close($conexion);
?>

    <h1>editar formulario</h1>
    <form action="" method="post">
<label for="<?=$_SERVER['PHP_SELF']?>">usuario:</label>
<input type="text" name="usuario" value="<?php echo $usuario;  ?>">
<br>

<input type="hidden" name="id"
 value="<?php echo $id;  ?>">

<label for="">password:</label>
<input type="text" name="password" value="<?php echo $password;  ?>"><br>


<input type="submit" value="ACTUALIZAR" name="enviar">
<a href="inde.php">regresar</a>
    </form>
    <?php
    }
    
    ?>
</body>
</html>