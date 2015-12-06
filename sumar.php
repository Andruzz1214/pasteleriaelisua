<?php

 if(isset($_POST['btn_cal']) == 'Caluldar')
 {
	
	 $n1 = $_POST['txt_n1'];
	 $n2 = $_POST['txt_n2'];

	 switch ($precio=$_POST['operaciones']) {
					
					case "suma":
						$ptotal = ($n1 + $n2);
						break;
					case "resta":
						$ptotal = $n1 - $n2;
						break;
					case "multi":
						$ptotal = $n1 * $n2;
						break;
					case "divi":
						$ptotal = $n1 / $n2;
						break;
	
		
	}
		echo "<script languaje=javascript>
				window.alert('Operacion Realizada');
				window.location.replace('index.html');
			</script>";
	
	} else {
		echo "<script languaje=javascript>
				window.alert('Error en la Operacion');
				window.location.replace('index.html');
			</script>";
	}
	

?>