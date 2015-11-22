<?php
session_start();
if (empty($_SESSION['user'])){
session_destroy();
header('location:index.php');
}
?>
<?php
mt_srand (time());
//generamos un número aleatorio
$nu = mt_rand(0,900); 
$a="DUL";
//funcion para generar codigo
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/Envision.css" type="text/css" />

	<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="calendar.js"></script>
		<link href="calendar.css" rel="stylesheet" >

<script src="calendar.js"></script>
		<link href="calendar.css" rel="stylesheet" >

</head>
<body>
	<div id="pedido"> <td>.::MENU DE ARTICULOS::.</td></tr>
	<form name="ingreso" action="" method="post">
	
	<table>
    <tr><td>Codigo Articulo:</td>
    <?php echo"<td><input type=text name=codigo_a value='$a$nu' ></td> ";?></tr>
	
	 <tr><td>Fecha de Ingreso:</td>
    <td><input type="text" name="fecha" maxlength="10" class="calendarSelectDate" placeholder="" required="required"  /></td></tr>
		
	<tr><td>Codigo Proveedor:</td>
 <td><input type="text" name="codigo_p" maxlength="10" placeholder="" required="required" /></td></tr>
  
	<tr><td>Nombre Articulo:</td>
 <td><input type="text" name="nombre_art" maxlength="10" placeholder="" required="required" /></td></tr>
  
   
	<tr><td>Marca:</td>
    <td><input type="text" name="marca" maxlength="20" placeholder="" required="required" /></td></tr>
   
	<tr><td>Descripcion:</td>
    <td> <input maxlength="50" id="des" name="des" placeholder="" required="required" ></td></tr>
	 
	
	<tr><td>Cantidad:</td>
    <td><input type="text" name="cant" maxlength="20" placeholder="" required="required" /></td></tr>
    <tr><td>Precio:</td>
    <td><input type="text" name="precio" maxlength="10" placeholder="" required="required"	/></td></tr>
	  <br></br>
	<tr><td><input type= "submit" name="guardar" value="Guardar"  id="botones"/></td>
	<td><a href="buscar_notas.php">Actualizar</a></td>
    <td><a href="buscar_notas.php">Eliminar</a></td>
	<td><a href="inventario/reporte.php">Reporte</a></td>
	</td></tr>
	</table>
      <div id="calendarDiv"></div>
		
	</form></div>


			
	</fieldset>
	
</body>
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
