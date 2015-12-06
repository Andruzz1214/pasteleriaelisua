<?php 
    if($_POST)
	{
      include "conexion.php";
		if(isset ($_POST['codigo'])=="BUSCAR")
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
    <td><input type="text" name="codigo_p" value="<?=$campos['codigo_p']?>" maxlength="10" /></td>
				<input type="submit" name="codigo" value="BUSCAR" class="boton">
				</td></tr>
	 <tr><td>Nombre de la Empresa:</td>
 <td><input type="text" name="empresa" value="<?=$campos['empresa']?>" maxlength="30" /></td></tr>
  
	<tr><td>Direccion:</td>
 <td><input type="text" name="dir_p" value="<?=$campos['dir_p']?>" maxlength="50" /></td></tr>
  
	<tr><td>Correo:</td>
    <td><input type="text" name="correo" value="<?=$campos['correo_p']?>" maxlength="30" /></td></tr>
   
	<tr><td>Telefono:</td>
    <td> <input maxlength="12" id="tel" value="<?=$campos['tel_p']?>" name="tel" ></td></tr>
	 
	<tr><td>Producto:</td>
    <td><input type="text" name="producto" value="<?=$campos['producto']?>" maxlength="30" /></td></tr>
	
    <tr><td>Nombre del contacto:</td>
    <td><input type="text" name="nom_contacto" value="<?=$campos['nom_contacto']?>" maxlength="30" 	/></td></tr>
	
	<tr><td>Apellido del contacto:</td>
    <td><input type="text" name="ape_contacto" value="<?=$campos['ape_contacto']?>" maxlength="30" 	/></td></tr>
	
	  
	<tr><td><a href="proveedor.php">GUARDAR</a></td>
<td><input type="submit" name="update" value="ACTUALIZAR" class="boton"></td>
    <td><?php echo"<input type=button value=ELIMINAR class=boton onclick=\"if(window.confirm('¿CONFIRMA ELIMINAR EL REGISTRO?'))location.replace('eliminar_prove.php?codigo_p=$codigo_p');\">";?></td></tr>
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
$codigo = strtoupper($_POST['codigo_p']); 
$empresa = strtoupper($_POST['empresa']);
$dir= strtoupper($_POST['dir_p']);
$correo = strtoupper($_POST['correo']);
$tel = $_POST['tel'];
$producto = strtoupper($_POST['producto']);
$nom_contacto = strtoupper($_POST['nom_contacto']);
$ape_contacto = strtoupper($_POST['ape_contacto']);
$sql_update="update proveedor set codigo_p ='$codigo', empresa ='$empresa',dir_p='$dir',correo_p='$correo',tel_p='$tel',producto='$producto', nom_contacto='$nom_contacto',ape_contacto='$ape_contacto' where codigo_p ='$codigo'";
	$sql_query= @mysql_query($sql_update);
	 if($sql_query)
	 {
		echo "<script>window.alert('LOS DATOS FUERON ACTUALIZADOS CORRECTAMENTE')</script>";
		echo"<script>window.location.replace('buscar_prove.php');</script>";
	 }
	 else
	 {
		echo "<script>window.alert('LOS DATOS NO FUERON ACTUALIZADOS CORRECTAMENTE')</script>";
		echo mysql_error();
		
	 }	
}	
?>