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
		
<td>.::MENÚ DE EMPLEADO::.</td></tr>
<form name="ingreso_datos" action="actulizar_e.php" method="POST">
<form name="ingreso" action="" method="post">
	<table>
    <tr><td>Primer nombre:</td>
    <td><input type="text" name="nombre_e" maxlength="20" /></td></tr>
	<tr><td>Segundo nombre:</td>
    <td><input type="text" name="nombre_se" maxlength="20" /></td></tr>
    <tr><td>Primer Apellido:</td>
    <td><input type="text" name="primer_ae" maxlength="20" /></td></tr>
		   <tr><td>Segundo Apellido:</td>
    <td><input type="text" name="segundo_ae" maxlength="20" /></td></tr>
    <tr><td>Fecha de Nacimiento:</td>
    <td><input type="text" name="fecha_nacimiento" maxlength="10" class="calendarSelectDate"  /></td></tr>
		 <tr><td>Dui:</td>
    <td><input type="text" name="dui_e" maxlength="20" /></td></tr>
	<tr><td>Nit:</td>
	<td><input type="text" name="nit" maxlength="20" /></td></tr>

		 <tr><td>Direccion:</td>
    <td><input type="text" name="dir_e" maxlength="50" /></td></tr>
	 <tr><td>Genero:</td>
    <td><input type="text" name="genero" maxlength="10"   /></td></tr>
	 <tr><td>Telefono:</td>
	  
		<td><a href="ingreso_nuevo.php">Nuevo	</a></td>
		<td><a href="buscar_e.php">Actualizar</a></td>
    <td><a href="buscar_e.php">Eliminar</a></td>
	<td><a href="reporte_e.php">Reporte</a></td>
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

