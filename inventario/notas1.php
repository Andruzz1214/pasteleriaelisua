<?php
session_start();
if (empty($_SESSION['user'])){
session_destroy();
header('location:index.php');
}
?>
<?php
mt_srand (time());
//generamos un n�mero aleatorio
$nu = mt_rand(0,900); 
$a="ART";
//funcion para generar codigo
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
<script src="calendar.js"></script>
		<link href="calendar.css" rel="stylesheet" >

<script src="calendar.js"></script>
		<link href="calendar.css" rel="stylesheet" >

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
 <td>.::MEN� DE ARTICULOS::.</td></tr>
	<form name="ingreso" action="" method="post">
	
	<table>
    <tr><td>Codigo Articulo:</td>
    <?php echo"<td><input type=text name=codigo_a value='$a$nu' ></td> ";?></tr>
	
	 <tr><td>Fecha de Ingreso:</td>
    <td><input type="text" name="fecha" maxlength="10" class="calendarSelectDate"  /></td></tr>
		
	<tr><td>Codigo Proveedor:</td>
 <td><input type="text" name="codigo_p" maxlength="10" /></td></tr>
  
	<tr><td>Nombre Articulo:</td>
 <td><input type="text" name="nombre_art" maxlength="10" /></td></tr>
  
   
	<tr><td>Marca:</td>
    <td><input type="text" name="marca" maxlength="20" /></td></tr>
   
	<tr><td>Descripcion:</td>
    <td> <input maxlength="50" id="des" name="des" ></td></tr>
	 
	
	<tr><td>Cantidad:</td>
    <td><input type="text" name="cant" maxlength="20" /></td></tr>
    <tr><td>Precio:</td>
    <td><input type="text" name="precio" maxlength="10" 	/></td></tr>
	  
	<tr><td><input type= "submit" name="guardar" value="Guardar"  id="botones"/></td>
		<td><a href="buscar_notas.php">Actualizar</a></td>
    <td><a href="buscar_notas.php">Eliminar</a></td>
	<td><a href="buscar_notas.php">Reporte</a></td>
	</td></tr>
	</table>
      <div id="calendarDiv"></div>
		
	</form>
    </div>
  </div>
  <div id="footer">
     <p> &copy; 2012 <strong>SI-IE SISTEMA LIBRERIA UGB</strong> &copy; DERECHOS RESERVADOS SOPORTE/RCHICAS </p>
  </div>
</div>
</html>
<?php
include "conexion.php";

if (isset($_POST['guardar'])=="Guardar")
{
$codigo = strtoupper($_POST['codigo_a']);
$fecha= $_POST['fecha']; 
$codigo_p = strtoupper($_POST['codigo_p']);
$nombre_art= strtoupper($_POST['nombre_art']);
$marca = strtoupper($_POST['marca']);
$des = strtoupper($_POST['des']);
$cant = $_POST['cant'];
$precio = $_POST['precio'];
		
//VALIDACION DE MI NUEVO REGISTRO
	$consulta = "select codigo_a from inventario where codigo_a='$codigo'";
	$buscar= @mysql_query($consulta);
	$repetido = @mysql_fetch_row($buscar);
	if ($repetido){
          echo "<script>window.alert('ESTE CODIGO YA EXISTE EN NUESTRA BASE DE DATOS')</script>";
		  //echo"<script>window.history.back();/script>";
          } 
	else{
    	$query_save = "insert into inventario (codigo_a,fecha,codigo_p,nombre_art,marca,des,cant, precio)values('$codigo','$fecha','$codigo_p','$nombre_art','$marca','$des','$cant','$precio')";
		@mysql_query($query_save);
		echo "<script>window.alert('El Articulo fue agregado exitosamente')</script>";
		
		}

}
?>
