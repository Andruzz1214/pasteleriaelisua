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
<title>Buscador de Producto</title>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.7"> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/Envision.css" type="text/css" />

<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type="text/javascript" src="js/jquery.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

<script src="js/script.responsive.js"></script> 
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="css/style.responsive.css" media="all">

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
		
<h1>Buscar Producto</h1>
<form  action="buscar_venta.php" method="POST">

	<table border='0' >
			<tr>
				<td>
				CODIGO:
				</td>
				<td>
				<input type="text" name="codigo_a" size="15" maxlength="10">
				</td>
				<td>
				<input type="submit" name="codigo" value="BUSCAR" class="boton">
				</td>
			</tr>		
			
		</table>

   

	</form>
    </div>
  </div>

</div>
</body>
</html>
<?php 
    if($_POST)
	{
      include "conexion.php";
		if(isset ($_POST['codigo'])=="BUSCAR")
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
						echo"<script>window.location.replace('ventas1.php');</script>";
			echo "<script>window.alert('EL VALOR ES NULO')</script>";
		
				}
		}
}
?>