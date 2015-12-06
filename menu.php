<?php
session_start();
if (empty($_SESSION['user'])){
session_destroy();
header('location:index.php');
}
?>

<html>
<head>
<title>PASTELERIA ELISUA'S</title>
	<meta charset="UTF-8" />
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Examen Parcial III de Progra IV" />
    <meta name="keywords" content="css3, circle, hover, navigation, effect, preview, thumbnails, images, slider, jquery, previous, next" />
    <meta name="author" content="Ing. Urrutia SMIS083211 y Ing. Rivera SMIS084011" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	 <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/ventanas-modales.js"></script>
		
</head>
<body>
	<div id="contenedor">
		<header>
			<h1>PASTELERIA ELISUA'S </h1>
			<nav>
				<ul class="menu">
					<li><a href="menu.php">Inicio</a></li>
						<li><a href="notas.php" class="clsVentanaIFrame clsBoton" rel="Busqueda de producto" >Ingresar</a></li>
					<li><a href="buscar.php" class="clsVentanaIFrame clsBoton" rel="Busqueda de producto" >Buscar Producto</a></li>
									<li><a href="buscar_venta.php" class="clsVentanaIFrame clsBoton" rel="Registro de ventas" >Ventas</a></li>
					
					<li><a href="proveedor.php" class="clsVentanaIFrame clsBoton" rel="Ingreso, busqueda o modificacion de proveedores" >Proveedor</a></li>			
						<li><a href="nuevo_usuario.php" class="clsVentanaIFrame clsBoton" rel="Agregar Usuario" >Agregar Usuario</a></li>			
				<li><a href="cerrar_sesion.php">Salir</a></li>
				<?php echo "Usuario: ". $_SESSION['user']; ?>
				</ul>
			</nav>
		</header>

		<div id="principal">
			
			<fieldset><font color = "#FFFFF">
			<center><h2></h2>
				<img src="img/logo_elisua.png"/>
				<h1>Lo mejor en dulces de todo tipo y clases para tu gusto!!!!!!</h1>
				
			</center>	</font>
		</div>
	
	
	</div>

	
	
		
	</div>


<div id="contenedor">
<font color = "#FFFFF">
<center><p><B><u> Derechos reservados Pasteleria Elisua´s &copy 2015</u></B></p></color></center>
</font>
</div>
<br />

</body>
</html>