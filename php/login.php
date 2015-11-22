<!DOCTYPE html>
<html>
<head>

	<title>Parcial II - programacion IV</title>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Examen Parcial II de Progra IV" />
    <meta name="keywords" content="css3, circle, hover, navigation, effect, preview, thumbnails, images, slider, jquery, previous, next" />
    <meta name="author" content="Ing. Urrutia SMIS083211 y Ing. Rivera SMIS084011" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	 <link rel="stylesheet" type="text/css" href="css/style2.css" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/ventanas-modales.js"></script>
	
</head>
<body>
	<div id="contenedor">
		<header>
			
			<h1>GRANJA MARIE</h1>
				
		</header>
<?php

if (isset($_POST['evaluar'])== 'Entrar') 
{
	$usu = $_POST['usu'];
	$pass = $_POST['pass'];

}

if ($usu == 'admin' and $pass == 'parcial2') {
echo "<script languaje=javascript>
window.alert('Bienvenido');
window.location.replace('../index2.html');
</script>";
//header ("Location: index2.html");

} 

else {

echo "<script languaje=javascript>
window.alert('Usuario o password Incorecta favor verifique');
window.location.replace('../index.html');
</script>";
//header ("Location: index.html");

//$mensaje = "Nombre de usuario o contraseña incorrectos";

}

?>
<aside>
		
		<div id="centro">
			<center><h2>Bienvenidos A GRANJA MARIE</h2>
				<img src="img/home.png"/>
				<h1>Lo mejor en pollos de todo tipo y clases, naturalmente frescos!!!</h1>
			</center>
		</div>
	</aside>
	</section>
		<footer>
		
		</footer>
	</div>
</body>
</html>
