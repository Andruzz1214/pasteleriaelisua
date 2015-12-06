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
$a="USU";
//funcion para generar codigo
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="css/Envision.css" type="text/css" />

<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type="text/javascript" src="js/jquery.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>



</head>
<body>
<div id="wrap">

    <div id="content-wrap">
   
    <div id="main"> 

	<td>.::NUEVO USUARIO::.</td></tr>
	<form name="ingreso_datos" action="" method="post">
	
	<table border = '0'>
	
    <tr><td>Codigo Acceso:</td>
    <?php echo"<td><input type=text name=codigo_a value='$a$nu' ></td> ";?></tr>
	<br>	
	<tr><td>Password:</td>
 <td><input type="password" name="pass" maxlength="10" placeholder="" required="required" /></td></tr>
  
	  <br></br>
	<tr><td><input type= "submit" name="guardar" value="Guardar"  id="botones"/></td>
	<td><a href="buscar_usuario.php">Actualizar</a></td>
    <td><a href="buscar_usuario.php">Eliminar</a></td>
	<td><a href="inventario/reporte_usu.php">Reporte</a></td>
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
$pass = ($_POST['pass']); 
		
//VALIDACION DE MI NUEVO REGISTRO
	$consulta = "select user from acceso_sis where user='$codigo'";
	$buscar= @mysql_query($consulta);
	$repetido = @mysql_fetch_row($buscar);
	if ($repetido){
          echo "<script>window.alert('ESTE CODIGO YA EXISTE EN NUESTRA BASE DE DATOS')</script>";
		  //echo"<script>window.history.back();/script>";
          } 
	else{
    	$query_save = "insert into acceso_sis (user,pass)values('$codigo','".md5("$pass")."')";
		@mysql_query($query_save);
		echo "<script>window.alert('El Usuario con codigo $codigo fue agregado EXITOSAMENTE')</script>";
		
		}

}
?>
