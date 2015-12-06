<?php 

include "conexion.php";

if($_GET){
$codigo_a=$_GET['codigo_a'];

    if(mysql_query("DELETE FROM venta WHERE codigo_a = '$codigo_a'")){
     echo"
	<script languaje=javascript>	
	window.alert('Los registro fue eliminado');	
	window.location.replace('buscar_venta.php');
	</script>";
    }else{
        echo "ERROR: No se ha podido eliminar el registro";
		echo mysql_error();
    }
}
?>
