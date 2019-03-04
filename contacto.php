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

  <div class="contenedor">

        <form action="" class="sombra" method="post">
<div class="formh">
<h1 class="formt">C<span>onctacto</span></h1>
</div>




<label for="nombre" class="form-label">Nombres:</label>
    <input type="text" id="nombre" class="form-input" placeholder="Escribe tu Nombre...">


    
<label for="apellidos" class="form-label">Apellidos:</label>
<input type="text" id="apellidos" class="form-input" placeholder="Escribe tus Apellidos...">


<label for="direccion" class="form-label">Direccion:</label>
    <input type="text" id="direccion" class="form-input" placeholder="Escribe tu Direccion...">



<label for="correo" class="form-label">Email:</label>
    <input type="text" id="correo" class="form-input" placeholder="Escribe tu correo...">

    <label for="mensaje" class="form-label">Mensaje:</label>
    <textarea  class="form-textarea" id="mensaje" placeholder="Aqui escribe tu mensaje..."></textarea>

<input type="submit" class="btn-submit" value="Enviar Consulta">


        </form>
    </div>

    
</body>
</html>