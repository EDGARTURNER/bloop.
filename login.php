<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="estilo1.css">
    <link rel="stylesheet" href="estilo2.css">
</head>
<body class="tema1">
 
  <ul>
      

<li >   <a href="index.php" ><img src="icono3.png" alt="" title="Inicio" class="icono1" ></a>    </li>
<li class="index1">Inicio</li>

<li class="derechabarra"><a href="libros.php">Libros</a></li>
<li class="derechabarra"><a href="galeria.php">Galeria</a></li>
<li class="derechabarra"><a href="contacto.php">Contacto</a></li>

<li class="derechabarra"><a href="sugerenias.php">Sugerencias</a></li>
<li class="derechabarra"><a href="login.php">Inicio de sesion</a></li>

  </ul>

  <form action="" method="post">
		Nombre: <br>
		<input type="text" name="nombre_u"> <br>
		Password: <br>
		<input type="password" name="password">
		<br>
		<input type="submit" name="login" value="Ingresar">
	</form>


	<?php 
		if(isset($_POST["login"])){
			require_once("Admin/usuario.php");
			$obj = new Usuario();
			$nom = $_POST["nombre_u"];
			$pass = $_POST["password"];
			$bandera = $obj->validar($nom,$pass);
			if($bandera==true){
				header("Location: Admin/index.php");
			}else{
				echo "<p>Revisar usuario y/o contraseña</p>";
			}
		}
	 ?>



</body>
 
</html>