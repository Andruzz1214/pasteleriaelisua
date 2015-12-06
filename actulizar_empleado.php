<?php 
    if($_POST)
	{
      include "conexion.php";
		if(isset ($_POST['codigo'])=="BUSCAR")
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
		
<h1>Menu Empleado </h1>
 <?php 
    if($_POST)
	{     		if(isset ($_POST['codigo'])=="BUSCAR"){  
				
?>
<form name="ingreso_datos" action="" method="POST">

	<table border='0' >
   
	<tr><td>Primer Nombre:</td>
    <td><input type="text" name="nombre_e1" maxlength="20" value="<?=$campos['nombre_e1']?>" /></td></tr>
    
	<tr><td>Segundo Nombre:</td>
    <td> <input type="text" name="nombre_e2" value="<?=$campos['nombre_e2']?>" /></td></tr>
	    <tr><td>Primer Apellido:</td>
    <td><input type="text" name="primer_ae" maxlength="20" value="<?=$campos['primer_ae']?>" /></td></tr>
		   <tr><td>Segundo Apellido:</td>
    <td><input type="text" name="segundo_ae" maxlength="20" value="<?=$campos['segundo_ae']?>" /></td></tr>
    <tr><td>Fecha de Nacimiento:</td>
    <td><input type="text" name="fecha_nacimiento" maxlength="10" class="calendarSelectDate" value="<?=$campos['fecha_nacimiento']?>" /></td></tr>
		 <tr><td>Dui:</td>
    <td><input type="text" name="dui_e" maxlength="20" value="<?=$campos['dui_e']?>" /></td>
</tr>
	
	<tr><td>Nit:</td>
	<td><input type="text" name="nit" maxlength="20" value="<?=$campos['nit']?>" /></td></tr>
	<tr><td>Estado Civil:</td>
	<td><input type="text" name="estado" maxlength="20" value="<?=$campos['estado']?>" /></td></tr>

		 <tr><td>Direccion:</td>
    <td><input type="text" name="dir_e" maxlength="50" value="<?=$campos['dir_e']?>" /></td></tr>
	 <tr><td>Genero:</td>
    <td><input type="text" name="genero" maxlength="10"  value="<?=$campos['genero']?>" /></td></tr>
	 <tr><td>Telefono:</td>
    <td><input type="text" name="telefono" maxlength="10" value="<?=$campos['telefono']?>" /></td></tr>

	
	  
	<tr><td><a href="ingreso_nuevo.php">GUARDAR</a></td>
<td><input type="submit" name="update" value="ACTUALIZAR" class="boton"></td>
    <td><?php echo"<input type=button value=ELIMINAR class=boton onclick=\"if(window.confirm('¿CONFIRMA ELIMINAR EL REGISTRO?'))location.replace('eliminar.php?dui_e=$dui_e');\">";?></td></tr>
	</table>
   
   <div id="calendarDiv"></div>   
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

$nombre1 = strtoupper($_POST['nombre_e1']);
$nombre2 = strtoupper($_POST['nombre_e2']);
$apellido1 = strtoupper($_POST['primer_ae']);
$apellido2 = strtoupper($_POST['segundo_ae']);
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$dui = $_POST['dui_e'];
$nit = $_POST['nit'];
$estado = strtoupper($_POST['estado']);
$dir = strtoupper($_POST['dir_e']);
$genero= strtoupper($_POST['genero']);
$telefono = $_POST['telefono'];	
		
		
$sql_update="update empleado set  nombre_e1='$nombre1',nombre_e2='$nombre2',primer_ae='$apellido1',segundo_ae='$apellido2',fecha_nacimiento='$fecha_nacimiento', dui_e='$dui',nit='$nit' , estado ='$estado', dir_e ='$dir',genero ='$genero',telefono ='$telefono' where dui_e ='$dui'";
	$sql_query= @mysql_query($sql_update);
	 if($sql_query)
	 {
		echo "<script>window.alert('LOS DATOS FUERON ACTUALIZADOS CORRECTAMENTE')</script>";
		echo"<script>window.location.replace('buscar_empleado.php');</script>";
	 }
	 else
	 {
		echo "<script>window.alert('LOS DATOS NO FUERON ACTUALIZADOS CORRECTAMENTE')</script>";
		echo mysql_error();
		
	 }	
}	
?> 

