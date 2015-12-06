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
		
<td>.::BUSQUEDA DE PROVEEDOR::.</td></tr>
<form name="ingreso_datos" action="actulizar_prove.php" method="POST">

	<table border='0' >
			
	
    <tr><td>Codigo:</td>
    <td><input type="text" name="codigo_p" maxlength="10" /></td>
	<td><input type="submit" name="codigo" value="BUSCAR" >
				</tr></tr>
	<tr><td>Nombre de la Empresa:</td>
 <td><input type="text" name="empresa" maxlength="30" /></td></tr>
  
	<tr><td>Direccion:</td>
 <td><input type="text" name="dir_p" maxlength="50" /></td></tr>
  
	<tr><td>Correo:</td>
    <td><input type="text" name="correo" maxlength="30" /></td></tr>
   
	<tr><td>Telefono:</td>
    <td> <input maxlength="12" id="tel" name="tel" ></td></tr>
	 
	<tr><td>Producto:</td>
    <td><input type="text" name="producto" maxlength="30" /></td></tr>
	
    <tr><td>Nombre del contacto:</td>
    <td><input type="text" name="nom_contacto" maxlength="30" 	/></td></tr>
	
	<tr><td>Apellido del contacto:</td>
    <td><input type="text" name="ape_contacto" maxlength="30" 	/></td></tr>
	  
	<tr><td><input type= "submit" name="guardar" value="Guardar"  id="botones"/></td>
	<td><a href="buscar_prove.php">Actualizar</a></td>
    <td><a href="buscar_prove.php">Eliminar</a></td>
	<td><a href="inventario/reporte_prove.php">Reporte</a></td>
	</td></tr>
	</table>
		
	</form>
    </div>
  </div>

</div>
</html>
<?php 
    if($_POST)
	{
      include "conexion.php";
		if($_POST['codigo']=="BUSCAR")
		{
			if(!empty($_POST['codigo_p']))
				{
			$codigo_p = $_POST["codigo_p"];
            $consulta1 = "select * from proveedor where codigo_p='$codigo_p'";
            $resultado= @mysql_query($consulta1);
			$campos = mysql_fetch_array($resultado);
			
				}
				else
				{
						echo"<script>window.location.replace('buscar_prove.php');</script>";
			echo "<script>window.alert('EL VALOR ES NULO')</script>";
		
				}
		}
}
?>
