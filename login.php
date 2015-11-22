<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<title>PASTELERIA ELISUA'S</title>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Examen Parcial III de Progra IV" />
    <meta name="keywords" content="css3, circle, hover, navigation, effect, preview, thumbnails, images, slider, jquery, previous, next" />
    <meta name="author" content="Ing. Urrutia SMIS083211 y Ing. Rivera SMIS084011" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	 <link rel="stylesheet" type="text/css" href="css/style2.css" />

</head>
<body>
	<div id="contenedor">
		<header>
			
			<h1>PASTELERIA ELISUA'S</h1>
			
		</header>
		<section id="contenido">
		<section id="principal"><article><form  class ="form" method="POST" action="" >
			
			
			<fieldset><font color = "#FFFFF">
			<legend>Bienvenido Usuario</legend><br>
							<p>
					<p>Codigo Usuario</p>
					<input type="text"  name="user" id="name"  class="input2"  placeholder="Ingrese usuario" required="required"/>
				</p>
				<p>
					<p>Password</p>
					<input type="password" name="pass" id="name2" class="input2" placeholder="Ingrese password " required="required">		
				</p>
						
	</font>
	</fieldset>
	<p class="submit">
	
		<input type="submit" name="inicio" value="Entrar" />	
	</p></form></article></section>
	
	
	
	<aside>
	<font color = "#FFFFF">
		<div id="centro">
			<center><h2>PASTELERIA ELISUA'S</h2>
				<img src="img/logo_elisua.png"/>
				<h1>Lo mejor en pasteles de todo tipo para tu gusto!!!</h1>
			</center>
			</font>
		</div>
	</aside>
	</section>
	
<div id="contenedor">
<font color = "#FFFFF">
<center><p><B><u> Derechos reservados Pasteleria Elisua´s &copy 2015</u></B></p></color></center>
</font>
</div>
<br />

</body>
</html>
<?php
session_start();
if (isset($_POST['inicio'])=="Entrar")
{
	include "conexion.php";
	$user = $_POST['user'];
	
	$q1 = @mysql_query("select * from acceso_sis where user = '$_POST[user]' and pass = '".md5($_POST['pass'])."'");
	if (mysql_num_rows($q1))
	{
	$_SESSION['user'] = $_POST['user'];
	echo "<script>window.alert(\"Bienvenido $user\");</script> ";
	echo "<script>window.location.replace('menu.php');</script>";
	
	}
	else{
		echo "<script>window.alert('usuario desconocido');</script> ";
		session_destroy();
		echo "<script>window.location.replace('index.php');</script>";
		
		
		}
}

?>