<?php
include ('class.ezpdf.php');
$pdf= new Cezpdf ('LETTER');
$pdf->selectFont('fonts/Helvetica.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("inventario", $conexion);
$queEmp = "SELECT * FROM venta where codigo_v = codigo_v order by codigo_v asc";//  agregar la tabla que vas a imprimir
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
				'codigo_v'=>'<b>Codigo de Venta</b>',
				'codigo_a'=>'<b>Codigo de producto</b>',
				'nombre_art'=>'<b>Nombre del producto</b>',
				'des'=>'<b>Descripcion</b>',
				'cant'=>'<b>Cantidad</b>',
				'fecha'=>'<b>Fecha </b>',
				'precio'=>'<b>Precio</b>',
				
				
				
			);
$options = array(
				'shadeCol'=>array(3,3,3),
				'xOrientation'=>'center',
				'width'=>580
			);
$txttit = "<b>Pasteleria Elisua´s</b>\n";
$txttit.= "Reporte de Ventas \n";

$pdf->ezText($txttit, 12, array ('justification'=>'center'));
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezText( "Pasteleria Elisua´s CopyRight 2015 \n");
$pdf->ezStream();

?>
