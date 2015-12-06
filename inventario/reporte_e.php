<?php
include ('class.ezpdf.php');
$pdf= new Cezpdf ('LETTER');
$pdf->selectFont('fonts/Helvetica.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("inventario", $conexion);
$queEmp = "SELECT * FROM empleado where dui_e = dui_e order by dui_e asc";//  agregar la tabla que vas a imprimir
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
// son todos los campos de la tabla-nombre de como se imprime 
$titles = array(
				'num'=>'<b>N°</b>',
				'nombre_e1'=>'<b>1°Nombre</b>',
				'nombre_e2'=>'<b>2°Nombre </b>',
				'primer_ae'=>'<b>1°Apellido</b>',
				'segundo_ae'=>'<b>2°Apellido </b>',
				'fecha_nacimiento'=>'<b>Fecha de nacimiento</b>',
				'dui_e'=>'<b>Numero de DUI </b>',
				'nit'=>'<b>Numero de NIT</b>',
				'estado'=>'<b>Estado Civil</b>',
				'dir_e'=>'<b>Direccion</b>',
				'genero'=>'<b>Genero</b>',
				'telefono'=>'<b>Telefono</b>',
				
				
			);
$options = array(
				'shadeCol'=>array(3,3,3),
				'xOrientation'=>'center',
				'width'=>580
			);
$txttit = "<b>Pasteleria Elisua´s</b>\n";
$txttit.= "Reporte de Empleados \n";

$pdf->ezText($txttit, 12, array ('justification'=>'center'));
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezText( "Pasteleria Elisua´s CopyRight 2015 \n");
$pdf->ezStream();

?>
