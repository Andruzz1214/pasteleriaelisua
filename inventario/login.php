
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Ingreso Nuevo</title>
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
     <img src="images/people.png" alt="banner 1" />
    </div>
  </div>
    <div id="content-wrap">
    <div id="sidebar">
      <h1>Menu </h1>
           <ul class="sidemenu">
	  <li><a href="index.php">INICIO</a></li>
     	
     </ul>                      
    </div>
    <div id="main"> 
	
<h1>Iniciar Sesion  </h1>
	<form name="login" method="post" action="">
 	<table>
		<tr>
        <td>
        Usuario
        </td>
		<td>
        <input name="user" type="text" />
        </td>
		</tr>
		<tr>
        <td>
        Password
        </td>
		<td>
        <input name="pass" type="password" maxlength="8" />
        </td>
        <td>
        <input name="inicio" value="Entrar" type="submit" />
        </td>
		</tr>
		
        
        	 
	</table> 
 </form>
    </div>
  </div>
  <div id="footer">
     <p> &copy; 2012 <strong>SI-IE SISTEMA LIBRERIA UGB</strong> &copy; DERECHOS RESERVADOS SOPORTE/RCHICAS </p>
  </div>
</div>
</body>
</html>
