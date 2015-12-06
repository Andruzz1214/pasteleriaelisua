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
						echo"<script>window.location.replace('buscar_venta.php');</script>";
			echo "<script>window.alert('EL VALOR ES NULO')</script>";
		
				}
		}
}
?>
<?php
mt_srand (time());
//generamos un número aleatorio
$nu = mt_rand(0,900); 
$a="VEN";
//funcion para generar codigo
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
<title>Ingresar Venta</title>
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

    <div id="content-wrap">

    <div id="main"> 
		
<h1>Menu Ventas </h1>
 <?php 
    if($_POST)
	{     		if(isset ($_POST['codigo'])=="BUSCAR"){  
				
?>
<script>
function fncSumar(){
caja=document.forms["sumar"].elements;
var numero1 = Number(caja["num1"].value);
var numero2 = Number(caja["num2"].value);

resultado=numero1*numero2;

if(!isNaN(resultado)){
caja["resultado"].value=numero1*numero2;
}

}
</script>
<form name="sumar" action="" method="POST">

	<table border='0' >
			
	   <tr><td>Codigo Venta:</td>
    <?php echo"<td><input type=text name=codigo_v value='$a$nu' ></td> ";?></tr>

	 <tr><td>Codigo producto:</td>
 <td><input type="text" name="codigo_p" value="<?=$campos['codigo_a']?>" maxlength="30"/></td></tr>
  
	<tr><td>Nombre del producto:</td>
 <td><input type="text" name="nombre_art" value="<?=$campos['nombre_art']?>" maxlength="30" /></td></tr>
  <tr><td>Descripcion:</td>
    <td> <input type="text" name="des" value="<?=$campos['des']?>" /></td></tr>

	<tr><td>Existencia:</td>
    <td> <input maxlength="4" id="tel2" name="cant3" value="<?=$campos['cant']?>" ></td></tr>
	 
    <tr><td>Precio:</td>
    <td><input type="text" name="num1" value="<?=$campos['precio']?>" maxlength="6" onKeyUp="fncSumar()"/></td></tr>
	
		<tr><td>Cantidad a Vender:</td>
 <td><input type="text" name="num2" maxlength="10" onKeyUp="fncSumar()"/></td></tr>
  
	 <tr><td>Fecha de la venta</td>
    <td><input type="text" name="fechav" maxlength="10" class="calendarSelectDate"  /></td></tr>
		
   
	<tr><td>Total a pagar:</td>
    <td><input type="text" name="resultado" maxlength="20" /></td></tr>
  	<tr><td><input type= "submit" name="guardar" value="Guardar"  id="botones"/></td>
	
</tr>
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
	if (isset($_POST['guardar'])=="Guardar"){
	$num2= ($_POST['num2']);
	$num3= ($_POST['cant3']);

	if ($num2 > $num3){
	echo "<script>window.alert('Cantidad no disponible en inventario')</script>";
echo"<script>window.location.replace('buscar_venta.php');</script>";


}			//ALMACENAMOS LOS VALORES DINAMICOS DEL FORMULARIO EN UN VARIABLES PHP
	else{
		
			if ($num2 < 1){
	echo "<script>window.alert('Cantidad ingresada debe ser mayor a 1')</script>";
echo"<script>window.location.replace('buscar_venta.php');</script>";


}			//ALMACENAMOS LOS VALORES DINAMICOS DEL FORMULARIO EN UN VARIABLES PHP
	else{
$codigo_v = strtoupper($_POST['codigo_v']); 
$codigo_p = strtoupper($_POST['codigo_p']);	
$nombre_art= strtoupper($_POST['nombre_art']);	
$des = strtoupper($_POST['des']);
$fecha = $_POST['fechav'];
$precio = $_POST['resultado'];

	$query_save = "insert into venta (codigo_v,codigo_a,nombre_art, des,cant, fecha, precio)values('$codigo_v','$codigo_p','$nombre_art','$des','$num2','$fecha','$precio')";
		@mysql_query($query_save);


	
	$ncant= $num3-$num2;
	$sql_update="update inventario set codigo_a ='$codigo_p', cant='$ncant' where codigo_a ='$codigo_p'";
	$sql_query= @mysql_query($sql_update);
	 if($sql_query)
	 {
		echo "<script>window.alert('La descarga de inventario se hizo con exito')</script>";
		
	 }
	 		echo "<script>window.alert('La venta ha sido procesada con exito')</script>";
			echo"<script>window.location.replace('buscar_venta.php');</script>";
	
	
}}		} 
?>





