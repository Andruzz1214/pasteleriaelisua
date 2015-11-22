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
$a="PROV";
//funcion para generar codigo
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/Envision.css" type="text/css" />

<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type="text/javascript" src="js/jquery.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>


<script src="calendar.js"></script>
		<link href="calendar.css" rel="stylesheet" >

</head>
<body>
<div id="wrap">

    <div id="content-wrap">
 
    <div id="main"> 

	<div id="pedido"> <td>.::INGRESO DE PROVEEDORES::.</td></tr>
	<form name="ingreso" action="" method="post">
	
	<table border = '0'>
    <tr><td>Codigo Proveedor:</td>
    <?php echo"<td><input type=text name=codigo_p value='$a$nu' ></td> ";?></tr>
		
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
		<br>
		<td><td><a href="inventario/reporte_prove.php">Reporte</a></td></td>
	
	</td></tr>
	</table>
      <div id="calendarDiv"></div>
		
	</form></div>

    </div>
  

			
	</fieldset>
	
</body>
</html>

<?php
include "conexion.php";

if (isset($_POST['guardar'])=="Guardar")
{
$codigo = strtoupper($_POST['codigo_p']); 
$empresa = strtoupper($_POST['empresa']);
$dir= strtoupper($_POST['dir_p']);
$correo = strtoupper($_POST['correo']);
$tel = ($_POST['tel']);
$producto = strtoupper($_POST['producto']);
$nom_contacto = strtoupper($_POST['nom_contacto']);
$ape_contacto = strtoupper($_POST['ape_contacto']);
		
//VALIDACION DE MI NUEVO REGISTRO
	$consulta = "select codigo_p from proveedor where codigo_p='$codigo'";
	$buscar= @mysql_query($consulta);
	$repetido = @mysql_fetch_row($buscar);
	if ($repetido){
          echo "<script>window.alert('ESTE CODIGO YA EXISTE EN NUESTRA BASE DE DATOS')</script>";
		  //echo"<script>window.history.back();/script>";
          } 
	else{
    	$query_save = "insert into proveedor (codigo_p,empresa,dir_p,correo_p,tel_p,producto,nom_contacto,ape_contacto)values('$codigo','$empresa','$dir','$correo','$tel','$producto','$nom_contacto','$ape_contacto')";
		@mysql_query($query_save);
		echo "<script>window.alert('El Articulo fue agregado exitosamente')</script>";
		
		}

}
?>
