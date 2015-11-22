<?php
session_start();
if (empty($_SESSION['user'])){
session_destroy();
header('location:../index.php');
}
?>

<html>
<head>
	<title>Parcial III - programacion IV</title>
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
			<h1>CONFITERIA JEF </h1>
			<nav>
				<ul class="menu">
					<li><a href="menu.php">Inicio</a></li>
					<li><a href="buscar.php" class="clsVentanaIFrame clsBoton" rel="Busqueda de producto" >Buscar Producto</a></li>
					<li><a href="producto.php" class="clsVentanaIFrame clsBoton" rel="Ingreso de producto" >Compras</a></li>
					<li><a href="venta.php" class="clsVentanaIFrame clsBoton" rel="Registro de ventas" >Ventas</a></li>
					<li><a href="ingreso_nuevo.php" class="clsVentanaIFrame clsBoton" rel="Ingreso, busqueda o modificacion de empleados" >Empleado</a></li>
					<li><a href="proveedor.php" class="clsVentanaIFrame clsBoton" rel="Ingreso, busqueda o modificacion de proveedores" >Proveedor</a></li>			
						<li><a href="nuevo_usuario.php" class="clsVentanaIFrame clsBoton" rel="Agregar Usuario" >Agregar Usuario</a></li>			
				<li><a href="cerrar_sesion.php">Salir</a></li>
				<?php echo "Usuario: ". $_SESSION['user']; ?>
				</ul>
			</nav>
		</header>
	
		<div id="principal">
			
			<center><h2>BIENVENIDO CONFITERIA JEF</h2>
				<img src="img/logo_jef.png"/>
				<h1>Lo mejor en dulces de todo tipo y clases para tu gusto!!!!!!</h1>
				
			</center>
		</div>
	
	
		
	</div>
<form>	
<br><br><center><img src= "img/cake1.jpg" /></center></br></br><p><center><br>Especialidad del MES DE JUNIO <br> "CAKE JEF" <br>PASTEL DULCE DE LECHE, RELLENO DE CHOCOLATE BLANCO Y BANADO CON CHOCOLATE MONTOLIVO<br>
<br></br>
<center><br>Programador: JUAN JOSE URRUTIA CASTRO  SMIS083211.<br /><br>Programador: SIBIA ELISUA COREAS CAMPOS  SMIS063611<br /> <br> Programador: FELIX ESAU RIVERA CAMPOS  SMIS084011 </center></p></br></span>
</p>
</script><br />
</form>

<div id="contenedor">
<center><p><B><u>Derechos reservados Juan Jose Urrutia &copyRigth; 2013</u></B></p></center>
</div>
<br />

</body>
</html>