<?php 

include "conexion.php";

if($_GET){
$codigo_a=$_GET['codigo_a'];

    if(mysql_query("DELETE FROM inventario WHERE codigo_a = '$codigo_a'")){
     echo"
	<script languaje=javascript>	
	window.alert('Las registro fue eliminado');	
	window.location.replace('notas.php');
	</script>";
    }else{
        echo "ERROR: No se ha podido eliminar el registro";
		echo mysql_error();
    }
}
?>
