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
		
<td>.::BUSQUEDA DE USUARIO::.</td></tr>
<form name="ingreso_datos" action="actulizar_usuario.php" method="POST">

	<table border='0' >
			
	
    <tr><td>Codigo:</td>
    <td><input type="text" name="codigo_a" maxlength="6" /></td>
	<td><input type="submit" name="codigo" value="BUSCAR" >
				</tr></tr>
	<tr><td>Password:</td>
 <td><input type="text" name="pass" maxlength="10"/></td></tr>
    
	<tr><td><input type= "submit" name="guardar" value="Guardar"  id="botones"/></td>
		<td><a href="buscar_usuario.php">Actualizar</a></td>
    <td><a href="buscar_usuario.php">Eliminar</a></td>
	<td><a href="inventario/reporte_usu.php">Reporte</a></td>
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
			if(!empty($_POST['codigo_a']))
				{
			$codigo = $_POST["codigo_a"];
            $consulta1 = "select * from acceso_sis where user ='$codigo'";
            $resultado= @mysql_query($consulta1);
			$campos = mysql_fetch_array($resultado);
			
				}
				else
				{
						echo"<script>window.location.replace('buscar_usuario.php');</script>";
			echo "<script>window.alert('EL VALOR ES NULO')</script>";
		
				}
		}
}
?>
