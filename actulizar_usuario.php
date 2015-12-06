<?php 
    if($_POST)
	{
      include "conexion.php";
		if(isset ($_POST['codigo'])=="BUSCAR")
		{
			if(!empty($_POST['codigo_a']))
				{
			$codigo_a = $_POST["codigo_a"];
            $consulta1 = "select * from acceso_sis where user='$codigo_a'";
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

    <div id="content-wrap">

    <div id="main"> 
		
<h1>Menu Proveedor </h1>
 <?php 
    if($_POST)
	{     		if(isset ($_POST['codigo'])=="BUSCAR"){  
				
?>
<form name="ingreso_datos" action="" method="POST">

	<table border='0' >
			
	
    <tr><td>Codigo:</td>
    <td><input type="text" name="codigo_a" value="<?=$campos['user']?>" maxlength="10" /></td>
				<input type="submit" name="codigo" value="BUSCAR" class="boton">
				</td></tr>
	 <tr><td>Password:</td>
 <td><input type="password" name="pass" value="<?=$campos['pass']?>" maxlength="10"/></td></tr>
	
	  
	<tr><td><a href="nuevo_usuario.php">GUARDAR</a></td>
<td><input type="submit" name="update" value="ACTUALIZAR" class="boton"></td>
    <td><?php echo"<input type=button value=ELIMINAR class=boton onclick=\"if(window.confirm('¿CONFIRMA ELIMINAR EL REGISTRO?'))location.replace('eliminar_usuario.php?user=$codigo_a');\">";?></td></tr>
	</table>
   
  
	</form>
	<?php 
			}
}
?>
   
<?php  
	//hay que vincular mi pagina web dinamica con el file php conexion
	include "conexion.php";
	//VALIDAMOS SI FUE PRESIONADO EL BOTON ACTUALIZAR
	if (isset($_POST['update'])=="ACTUALIZAR")

{
		//ALMACENAMOS LOS VALORES DINAMICOS DEL FORMULARIO EN UN VARIABLES PHP
$codigo = strtoupper($_POST['codigo_a']);
$pass = ($_POST['pass']); 

$sql_update="update acceso_sis set pass ='".md5("$pass")."' where user = '$codigo'";
	$sql_query= @mysql_query($sql_update);
	 if($sql_query)
	 {
		echo "<script>window.alert('LOS DATOS FUERON ACTUALIZADOS CORRECTAMENTE')</script>";
		echo"<script>window.location.replace('buscar_usuario.php');</script>";
	 }
	 else
	 {
		echo "<script>window.alert('LOS DATOS NO FUERON ACTUALIZADOS CORRECTAMENTE')</script>";
		echo mysql_error();
		
	 }	
}	
?>