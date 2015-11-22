<html>
<head>
	<title>Parcial II - programacion IV</title>
	<meta name="author" content="Ing. Urrutia SMIS083211 y Ing. Rivera SMIS084011" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/style2.css" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/ventanas-modales.js"></script>
	
</head>
<body>
	<div id="contenedor">
		<header>
			<h1>GRANJA MARIE</h1>
		</header>
	
		<div id="principal">
		
			<center><h2>GRANJA MARIE</h2>
				<img src="../img/home.png"/>
				<h1>Gracias por preferirnos lo esperamos nuevamente</h1>
				
			</center>
		</div>
		
	</div>



</body>
<?php


if(isset($_POST['btn_cal'])== 'Calcular')
{
	$nombre = $_POST['txt_nombre'];
	$direccion = $_POST['dir'];
	$jumbo = $_POST['jumbo'];
	$med = $_POST['med'];
	$peque = $_POST['peque'];
	$indio = $_POST['indio'];
	$gringo = $_POST['gringo'];
	$h_indio = $_POST['h_indio'];
	$h_gringo = $_POST['h_gringo'];
	$pj = 0;
	$pm = 0;
	$pp = 0;
	$pi = 0;
	$pg = 0;
	$hi = 0;
	$hg = 0;
	$subtotal = 0;
	$desc = 0;
	$regalia = "";
	$p1="";$p2="";$p3="";$p4="";$p5="";$p6="";$p7="";
}
if(isset($_POST['pjumbo'])){ $pj = $jumbo * 10; $p1 = "Pollo Indio Jumbo";}

if(isset($_POST['pmed'])){ $pm = $med * 8; $p2 = "Pollo Indio Mediano"; }

if(isset($_POST['ppque'])){ $pp = $peque * 5; $p3 = "Pollo Indio Pequeno";}

if(isset($_POST['pindio'])){ $pi = $indio * 1; $p4 = "Pollito Indio";}

if(isset($_POST['pgrin'])){ $pg = $gringo * 0.50; $p5 = "Pollito Gringo";}

if(isset($_POST['hindio'])){ $hi = $h_indio * 1; $p6 = "Huevos Indios 5 Uni";}

if(isset($_POST['hgringo'])){ $hg = $h_gringo * 1; $p7 = "Huevos Gringos 8 Uni";}

$subtotal = ($pj + $pm + $pp + $pi + $pg + $hi + $hg);

if ($subtotal >= 30 and $subtotal <= 50){ $desc = $subtotal * 0.03; }

if ($subtotal > 50 and $subtotal <= 70){ $desc = $subtotal * 0.05; }

if ($subtotal > 70){ $desc = $subtotal * 0.05; $regalia = "una gallina jumbo gratis!!!!"; }



$total = $subtotal - $desc;
$iva = $total * 0.13;
$total1 = $total + $iva;
echo "Sr.: ".$nombre."<br>";
echo "Direccion: ".$direccion."<br>";
echo "Cant.......Descripcion.....................Total"."<br>";
echo "".$jumbo."--------".$p1."-------------$".$pj."<br>";
echo "".$med."--------".$p2."----------$".$pm."<br>";
echo "".$peque."--------".$p3."-----------$".$pp."<br>";
echo "".$indio."--------".$p4."--------------------$".$pi."<br>";
echo "".$gringo."--------".$p5."-------------------$".$pg."<br>";
echo "".$h_indio."--------".$p6."------------$".$hi."<br>";
echo "".$h_gringo."--------".$p7."-----------$".$hg."<br>";
echo "Subtotal:--------------------------------- $".$subtotal ."<br>";
echo "Descuento: -------------------------------$".$desc."<br>";
echo "IVA: ---------------------------------------$".$iva."<br>";
echo "Total a pagar:------------------------------$".$total1."<br>";
echo $regalia;

?>
</html>