<?php 

include "conexion.php";

if($_GET){
$codigo_a=$_GET['user'];

    if(mysql_query("DELETE FROM acceso_sis WHERE user = '$codigo_a'")){
     echo"
	<script languaje=javascript>	
	window.alert('Los registro fue eliminado');	
	window.location.replace('buscar_usuario.php');
	</script>";
    }else{
        echo "ERROR: No se ha podido eliminar el registro";
		echo mysql_error();
    }
}
?>
