<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

$host="localhost";
$usuario="root";
$contraseña="";
$base="prueba";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$usuarios2="SELECT * FROM usuarios2";
$resUsuarios2=$conexion->query($usuarios2);
?>

<html lang="es">

	<head>
		<title>Actualizar Registros PHP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		

	</head>

	<body>
		<header>
			<div class="alert alert-info">
			<h2>Actualizar Registros de la BD con PHP</h2>
			</div>
		</header>

		<section>
			<form method="post">
			<table class="table">

				<tr>
					<th>id</th>
					<th>usuario</th>
					<th>password</th>
					
				</tr>

				<?php

				while ($registrousuarios2 = $resUsuarios2->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

						<td hidden><input name="id[actualizar]" value="'.$registrousuarios2['id'].'" /></td>

						 <td><input name="id['.$registrousuarios2['id'].']" value="'.$registrousuarios2['id'].'" /></td>
						 <td><input name="usuario['.$registrousuarios2['id'].']" value="'.$registrousuarios2['usuario'].'" /></td>
						 <td><input name="password['.$registrousuarios2['id'].']" value="'.$registrousuarios2['password'].'" /></td>
						
						 </tr>';
				}


				?>

			</table>
			<input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
		</form>

		<?php

			if(isset($_POST['actualizar']))
			{
				foreach ($_POST['id'] as $ids) 
				{
					$id=mysqli_real_escape_string($conexion, $_POST['id'][$ids]);
					$usuario=mysqli_real_escape_string($conexion, $_POST['usuario'][$ids]);
					$password=mysqli_real_escape_string($conexion, $_POST['password'][$ids]);
					

					$actualizar=$conexion->query("UPDATE usuarios2 SET id = '$id', usuario='$usuario'and password='$password ', WHERE id='$id'");
				}

				if($actualizar==true)
				{
					echo "FUNCIONA! <a href='actualizar_registros.php'>CLICK AQUÍ</a>";
				}

				else
				{
					echo "NO FUNIONA!";
				}
			}

		?>



		</section>

		<footer>
		</footer>
	</body>

</html>


