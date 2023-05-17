<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista usuarios</title>
    <script type="text/javascript" >
        function confirmar(){
            return confirm('¿estas seguro?,se eliminaran los datos permanentemente');
        }
            
       
    </script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    
    include("conexion.php");
    $sql="select * from usuarios2";
    $resultado=mysqli_query($conexion,$sql);
    ?>
    <h1>lista de usuarios</h1>
    
    <br>
    <br>
    <table>
        <thead>

        
            <tr>
                <th>id</th>
                <th>usuario</th>
                <th>password</th>
            </tr>
            <tbody>
                <?php
                while($filas=mysqli_fetch_assoc($resultado)){
                
                ?>
            <tr>
                <td><?php   echo $filas['id']  ?></td>
                <td><?php   echo $filas['usuario']  ?></td>
                <td><?php   echo $filas['password']  ?></td>
                <td>
                <?php   echo " <a href='editar.php?id=".$filas['id']."'>editar</a>  " ?>
                -
                <?php   echo " <a href='eliminar.php?id=".$filas['id']."' onclick='return confirm()' >eliminar</a>  " ?>
                </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </thead>
    </table>
    <?php
    mysqli_close($conexion);
    ?>
    <a href="index.php">regresar</a>
</body>
</html>