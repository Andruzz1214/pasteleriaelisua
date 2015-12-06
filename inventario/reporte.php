<?php
include ('class.ezpdf.php');
$pdf= new Cezpdf ('LETTER');
$pdf->selectFont('fonts/Helvetica.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("inventario", $conexion);
$queEmp = "SELECT * FROM inventario where codigo_a = codigo_a order by codigo_a asc";//  agregar la tabla que vas a imprimir
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
				'codigo_a'=>'<b>Codigo Articulo</b>',
				'fecha'=>'<b>Fecha de Compra </b>',
				'codigo_p'=>'<b>Cod_Proveedor</b>',
				'nombre_art'=>'<b>Nombre del Articulo </b>',
				'marca'=>'<b>Marca</b>',
				'des'=>'<b>Descripcion </b>',
				'cant'=>'<b>Cantidad</b>',
				'precio'=>'<b>Precio</b>',
				
				
			);
$options = array(
				'shadeCol'=>array(3,3,3),
				'xOrientation'=>'center',
				'width'=>580
			);
$txttit = "<b>PASTELERIA ELISUA'S </b>\n";
$txttit.= "Reporte de Inventario de Productos \n";

$pdf->ezText($txttit, 12, array ('justification'=>'center'));
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezText( "Pasteleria Elisua´s CopyRight 2015 \n");
$pdf->ezStream();

?>
