<?php 

include "conexion.php";

if($_GET){
$dui_e=$_GET['dui_e'];

    if(mysql_query("DELETE FROM empleado WHERE dui_e = '$dui_e'")){
     echo"
	<script languaje=javascript>	
	window.alert('EL REGISTRO FUE ELIMINADO');	
	window.location.replace('buscar_empleado.php');
	</script>";
    }else{
        echo "ERROR: No se ha podido eliminar el registro";
		echo mysql_error();
    }
}
?>
