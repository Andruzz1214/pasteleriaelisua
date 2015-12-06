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
<title>Reporte Inventario/title>
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
    <h1 id="logo-text">PARCIAL III PROGRAMACION IV</h1>
    <h2 id="slogan">UGB 2012</h2>
    <div id="header-links">
     
    </div>
  </div>
    <div id="content-wrap">
    <div id="sidebar">
      <h1>Menu</h1>
           <ul class="sidemenu">
	  <li><a href="menu.php">INICIO</a></li>
      <li><a href="cerrar_sesion.php">CERRRAR SESION</a></li>
     </ul>                      
    </div>
    <div id="main"> 
		
<h1>Nuevo Ingreso</h1>
<form name="ingreso_datos" action="reporte.php" method="POST">

	<table border='0' >
			<tr>
				<td>
				CODIGO:
				</td>
				<td>
				<input type="text" name="codigo" size="15" maxlength="10">
				</td>
				<td>
				<input type="submit" name="reporte" value="REPORTE" class="boton">
				</td>
			</tr>		
			
		</table>

   

	</form>
    </div>
  </div>
  <div id="footer">
     <p> &copy; 2012 <strong>PARCIAL 1 - PROGRAMACION 4</strong> |  | </p>
  </div>
</div>
</body>
</html>
