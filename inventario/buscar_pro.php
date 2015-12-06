<?php
session_start();
if (empty($_SESSION['user'])){
session_destroy();
header('location:index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Ingreso Nuevo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/Envision.css" type="text/css" />

<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type="text/javascript" src="js/jquery.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

<!--  initialize the slideshow when the DOM is ready -->
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
	fx:     'scrollUp', 
    timeout: 6000, 
    delay:  -2000 // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>


</head>
<body>
<div id="wrap">
    <div id="header">
    <h1 id="logo-text">SI-IE</h1>
    <h2 id="slogan">Sistema de Informacion de Inventario & Efectivo</h2>
    <div id="header-links">
	
    </div>
  </div>
    <div id="content-wrap">
    <div id="sidebar">
      <h1>Menu</h1>
           <ul class="sidemenu">
	  <li><a href="menu.php">INICIO</a></li>
      <li><a href="cerrar_sesion.php">CERRAR SESION</a></li>
     </ul>                      
    </div>
    <div id="main"> 
		
<td>.::MENÚ DE PROVEEDOR::.</td></tr>
<form name="ingreso_" action="" method="POST">

	<table border='0' >
			
	
    <tr><td>Codigo:</td>
    <td><input type="text" name="codigo_a" maxlength="10" /></td>
				<td><input type="submit" name="buscar" value="Bucar" >
				</td></tr>
	<tr><td>Empresa:</td>
    <td><input type="text" name="" maxlength="20" /></td></tr>
	<tr><td>Direccion:</td>
    <td><input type="text" name="" maxlength="20" /></td></tr>
    <tr><td>Correo:</td>
    <td><input type="text" name="" maxlength="20" /></td></tr>
		   <tr><td>Telefono:</td>
    <td><input type="text" name="" maxlength="20" /></td></tr>
    <tr><td>Producto:</td>
    <td><input type="text" name="" maxlength="10" class="calendarSelectDate"  /></td></tr>
		 <tr><td>Nombres del Contacto:</td>
    <td><input type="text" name="" maxlength="20" /></td></tr>
	<tr><td>Apellidos del Contacto:</td>
	<td><input type="text" name="" maxlength="20" /></td></tr>
	  
	<tr><td><input type= "submit" name="guardar" value="Guardar"  id="botones"/></td>
		<td><a href="buscar_pro.php">Actualizar</a></td>
    <td><a href="buscar_pro.php">Eliminar</a></td>
	<td><a href="buscar_pro.php">Reporte</a></td>
	</td></tr>
	</table>
   
		
	</form>
    </div>
  </div>
  <div id="footer">
     <p> &copy; 2012 <strong>SI-IE SISTEMA LIBRERIA UGB</strong> &copy; DERECHOS RESERVADOS SOPORTE/RCHICAS </p>
  </div>
</div>
</html>
<?php 
    if($_POST)
	{
      include "conexion.php";
		if(isset ($_POST['codigo'])=="Buscar")
		{
			if(!empty($_POST['codigo_a']))
				{
			$codigo_a = $_POST["codigo_a"];
            $consulta1 = "select * from inventario where codigo_a='$codigo_a'";
            $resultado= @mysql_query($consulta1);
			$campos = mysql_fetch_array($resultado);
			
				}
				else
				{
						echo"<script>window.location.replace('buscar_pro.php');</script>";
			echo "<script>window.alert('EL VALOR ES NULO')</script>";
		
				}
		}
}
?>
