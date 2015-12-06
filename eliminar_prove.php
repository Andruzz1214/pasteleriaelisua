<?php 

include "conexion.php";

if($_GET){
$codigo_p=$_GET['codigo_p'];

    if(mysql_query("DELETE FROM proveedor WHERE codigo_p = '$codigo_p'")){
     echo"
	<script languaje=javascript>	
	window.alert('Los registro fue eliminado');	
	window.location.replace('buscar_prove.php');
	</script>";
    }else{
        echo "ERROR: No se ha podido eliminar el registro";
		echo mysql_error();
    }
}
?>
