<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["usuario"])or empty($_POST["password"])) {
        echo '<div class="alerta">uno de los campos esta vacio</div>';
    } else {
       $usuario=$_POST["usuario"];
       $password=$_POST["password"];
       
       $sql=$conexion->query("insert into usuarios2(usuario,password)values('$usuariop','$password')");
       if ($sql==1) {
        echo '<div class="success">usuario registrado correctamente</div>';
       } else {
        echo '<div class="alerta">error al registrar</div>';
       }
       
    }

   
   
    
}

?>