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
<title>Programacion 4 - PHP'n MySQL</title>
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
    <div id="header-links">>
    
    </div>
  </div>
    <div id="content-wrap">
    <div id="sidebar">
      <h1>Menu</h1>
           <ul class="sidemenu">
	  <li><a href="menu.php">INICIO</a></li>
	   <li><a href="buscar.php">BUSCAR ARTICULO</a></li>
	  <li><a href="notas.php">ARTICULOS</a></li>
	   <li><a href="reporte.php">REPORTE ARTICULOS</a></li>
	  <li><a href="proveedor.php">PROVEEDOR</a></li>
	  <li><a href="empleado.php">EMPLEADO</a></li>
	  <li><a href="cerrar_sesion.php">CERRAR SESION</a></li>
      
     </ul>                      
    </div>
    <div id="main"> 
	  
		<div id="slideshow" class="slideshow">
			    <img src="images/photo.jpg" alt="banner 1" />
				<img src="images/fondo.jpg" alt="banner 1" />
				<img src="images/p.jpg" alt="banner 1" />
		</div>
	
	

    </div>
  </div>
  <div id="footer">
     <p> &copy; 2012 <strong>SI-IE SISTEMA LIBRERIA UGB</strong> &copy; DERECHOS RESERVADOS SOPORTE/RCHICAS </p>
  </div>
</div>
</body>
</html>
