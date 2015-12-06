
<?php
session_start();
if (empty($_SESSION['user'])){
session_destroy();
header('location:index.php');
}
?>
<?php
require_once('class.ezpdf.php');
$pdf= new Cezpdf('LETTER');
$pdf->selectFont('fonts/Helvetica.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);
$conexion = mysql_connect("Localhost", "root", "");
mysql_select_db("inventario", $conexion);
$queEmp = "SELECT codigo_alu, nombre_alu, primer_apellido, fecha_ingreso  FROM alumnos ";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);


	$CODIGO_ALU=trim (strtoupper ($_POST ['codigo_alu']));
	$NOMBRE_COMPLETO=trim (strtoupper ($_POST ['nombre_alu']));
	$NOMBRE_COMPLETO=trim (strtoupper ($_POST ['primer_apellido']));
	$FECHA=trim ($_POST ['fecha_ingreso']);
$txttit ="<b><u>REPORTE GENERAL DE PROGRA 4</u></b>\n";
$txttit.="Ejemplo de PDF CON PHP \n";
$txttit.="PARCIAL PROGRA 4 \n";
$txttit.="--------------------------------------------------\n";

$pdf->ezText($txttit, 16, array ('justification'=>'center'));
$pdf->ezText("<u>codigo del amuno: $CODIGO_ALU </u>\n", 12, array ('justification'=>'center'));
$pdf->ezText("Nombre Completo del Alumno:<u>$NOMBRE_COMPLETO</u>",10);
$pdf->ezText("Primer Apellido:<u>$PRIMER_APELLIDO</u>",10);
$pdf->ezText("Fecha de Ingreso:<u>$FECHA</u>",10);
$pdf->ezText("\n\n\n",10);
$pdf->ezSetDy(-150);

ob_end_clean();
$pdf->ezStream();

?>