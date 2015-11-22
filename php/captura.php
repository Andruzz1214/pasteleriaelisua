<?php
	if(isset($_POST['btn_cal'])=="Calcular")
	{
		$nombre = $_POST['txt_nombre'];
		$sueldo = $_POST['txt_sueldo'];
		$edad = $_POST['txt_edad'];
		$anos = $_POST['txt_anos'];
	
	
	}
	if ($edad >=60 & $anos<25)
	{
	$pension=$sueldo*0.2+275;
	$tipo = "Edad";
	}
	elseif ($edad <60 & $anos>=25)
	{
		$pension=$sueldo*0.4+200;
		$tipo = "Joven";
	}
	elseif ($edad >=60 & $anos>=25)
	{
		$pension=$sueldo*0.1+200;
		$tipo = "Adulto";
	}
	
	else {
		echo "";
	}
	
	echo "Su nombre es:  ".$nombre."</br>";
		echo "Su sueldo es $: ".$sueldo."</br>";
		echo "Su edad es:  ".$edad."</br>";
		echo "Años de laborar  ".$anos."</br>";
		echo "Su tipo de jubilacion es por antiguedad " . $tipo ."</br>";
		echo "su pension es de $ ".$pension."</br>";
	

	
?>