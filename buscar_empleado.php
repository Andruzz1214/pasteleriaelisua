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
<title>Buscar Producto</title>
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

    <div id="content-wrap">
   
    <div id="main"> 
		
<td>.::BUSQUEDA DE EMPLEADOS::.</td></tr>
<form name="ingreso_datos" action="actulizar_empleado.php" method="POST">

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
    <td><input type="text" name="dui_e" maxlength="20" /></td>
	<td>
				<input type="submit" name="codigo" value="BUSCAR" class="boton">
				</td></tr>
	
	<tr><td>Nit:</td>
	<td><input type="text" name="nit" maxlength="20" /></td></tr>
	<tr><td>Estado Civil:</td>
	<td><input type="text" name="estado" maxlength="20" /></td></tr>

		 <tr><td>Direccion:</td>
    <td><input type="text" name="dir_e" maxlength="20" /></td></tr>
	 <tr><td>Genero:</td>
    <td><input type="text" name="genero" maxlength="10"   /></td></tr>
	 <tr><td>Telefono:</td>
    <td><input type="text" name="telefono" maxlength="10"  /></td></tr>
	<tr><td><input type= "submit" name="codigo" value="BUSCAR"  id="botones"/></td>
    <td><input type= "reset" name="limpiar" value="Limpiar" id="botones"/></td></tr>
	</table>
   <div id="calendarDiv"></div>

		
	</form>
    </div>
  </div>

</div>
</html>
<?php 
    if($_POST)
	{
      include "conexion.php";
		if (isset($_POST['codigo'])=="BUSCAR")
		{
			if(!empty($_POST['dui_e']))
				{
			$dui_e = $_POST["dui_e"];
            $consulta1 = "select * from empleado where dui_e='$dui_e'";
            $resultado= @mysql_query($consulta1);
			$campos = mysql_fetch_array($resultado);
			
				}
				else
				{
						echo"<script>window.location.replace('buscar_empleado.php');</script>";
			echo "<script>window.alert('EL VALOR ES NULO')</script>";
		
				}
		}
}
?>
