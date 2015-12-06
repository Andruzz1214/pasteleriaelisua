
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Programacion 4 - PHP'n MySQL</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/Envision.css" type="text/css" />

<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type="text/javascript" src="js/jquery.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

<!--  initialize the slideshow when the DOM is ready -->
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
	fx:     'scrollUp', 
    timeout: 6000, 
    delay:  -2000 // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>
</head>
<body>
<div id="wrap">
  <div id="header">
    <h1 id="logo-text">SI-IE</h1>
    <h2 id="slogan">Sistema de Informacion de Inventario & Efectivo</h2>
    <div id="header-links">
	
    </div>
  </div>
    <div id="content-wrap">
    <div id="sidebar">
      <h1>Menu</h1>
           <ul class="sidemenu">
	        <li><a href="login.php">INICIAR SESION</a></li>
     
     </ul>                      
    </div>
    <div id="main"> 
	  
		<div id="slideshow" class="slideshow">
		
		          <div id = "bottom">
				   <img src="images/logo.png" alt="banner 1" /><img src="images/123.png" alt="banner 1" />
                    <div id = "testimonials">
                        <h2>Mision</h2>
                        <div class = "content">
                            <blockquote>
                            <p>.::Ofrecer un gran servicio de ventas  artículos varios y servicios de fotocopia de alta calidad y conformidad a través de un excelente equipo de trabajo con el fin de satisfacer las necesidades de nuestros  clientes, practicando valores al servirles y mejorando la atención continuamente::. </p>
                           
                           
                           </blockquote>
                           
                             <h2>Vision</h2>
                     
                            <blockquote>
                            <p>.::Esta microempresa es de ser la primera opción de los clientes actuales y futuros, satisfaciendo sus necesidades y requerimientos. Además ser reconocidos en el ámbito universitario por la calidad de nuestros servicios, atención y mantenernos líderes de la competitividad en el mercado de la fotocopiadora::. </p>
                           
                           
                           </blockquote>
                               <h2>Metas</h2>
                     
                            <blockquote>
                                </br>.::Fortalecer el stock en artículos bibliográficos, tecnológicos y de oficina  mediante la adquisición de materiales solicitados por los docentes y alumnos::.</br>
  </blockquote>   <h2></h2><blockquote>
.::Buscar un lugar más amplio para poder ofrecer un mejor servicio y suministrar con más artículos el local::.</br>
  </blockquote>  <h2></h2> <blockquote>
.::Tener listado actualizado de proveedores con costos bajos y con una buena atención::.
                           
                           
                           </blockquote>
                             </div>
                    </div>
			    
		</div>
	</div>
	

    </div>
  </div>
  <div id="footer">
     <p> &copy; 2012 <strong>SI-IE SISTEMA LIBRERIA UGB</strong> &copy; DERECHOS RESERVADOS SOPORTE/RCHICAS </p>
  </div>
</div>
</body>
</html>
