<?php 

include "conexion.php";

if($_GET){
$codigo_alu=$_GET['codigo_alu'];

    if(mysql_query("DELETE FROM alumnos WHERE codigo_alu = '$codigo_alu'")){
     echo"
	<script languaje=javascript>	
	window.alert('EL REGISTRO FUE ELIMINADO');	
	window.location.replace('buscar.php');
	</script>";
    }else{
        echo "ERROR: No se ha podido eliminar el registro";
		echo mysql_error();
    }
}
?>
