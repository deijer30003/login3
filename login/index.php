<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style login.css">

</head>
<body>
    
<form action="validar.php" method="post">


<div class="containerPrincipal">

<div class="form-group">

<h1>SISTEMA LOGIN</h1>
<br>
<br>
<p>Usuario <input type="text"placeholder="ingrese su usuario" class="form-control"name="usuario" > </p>
<p>Contraseña<input type="password"placeholder="ingrese su contraseña"class="form-control" name="password" > </p>


<button id="boton" class="boton">inicie sesion</button>
<a href="agregar.php">registrese</a>
<br>
<a href="inde.php">edite o elimine los usuarios de su BD</a>
    </div>
</div>


</form>


</body>
</html>