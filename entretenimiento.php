<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Entretenimiento con webvera, diseño y desarrollo web</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="description" content="Diseño y desarrollo web con php, mysql, javascript, css y html5. Expertos en wordpress" />
<link rel="stylesheet" href="estilos.css">
<script src="scripts.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">
var flashes = new Array ('<PARAM NAME=movie VALUE="abstracto.swf"> <PARAM NAME=quality VALUE=high> <PARAM NAME=bgcolor VALUE=#FFFFFF> <EMBED src="abstracto.swf" quality=high bgcolor=#FFFFFF  WIDTH="800" HEIGHT="800" NAME="abstracto" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>', ' <PARAM NAME=movie VALUE="50x15.swf"> <PARAM NAME=quality VALUE=high> <PARAM NAME=bgcolor VALUE=#FFFFFF> <EMBED src="50x15.swf" quality=high bgcolor=#FFFFFF  WIDTH="550" HEIGHT="400" NAME="50x15" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>','<br><span style="font-size:16px; color:#DFF2F9;">1 Pincha en el punto azul central<br>2 pulsa la tecla "5"<br>para mover el coche azul: "L": acelerar, flechas de cursor izquierda y derecha para girar, flecha arriba: marcha atrás, flecha abajo: frenar;<br>para mover el coche rojo: "A": acelerar, "S": frenar, "Q": marcha atras, "V": gira a derecha, "C": gira a la izquierda.<br>Nadie dijo que fuera fácil. ¡Disfrútalo!<br><PARAM NAME=movie VALUE="cochefu4.swf"> <PARAM NAME=quality VALUE=high> <PARAM NAME=bgcolor VALUE=#FFFFFF> <EMBED src="cochefu4-1.swf"  WIDTH="800" HEIGHT="600" hspace="0" vspace="0" ALIGN="top" quality=high bgcolor=#FFFFFF TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>','<PARAM NAME=movie VALUE="laberinto.swf"> <PARAM NAME=quality VALUE=high> <PARAM NAME=bgcolor VALUE=#000000> <EMBED src="laberinto.swf" quality=high bgcolor=#000000  WIDTH="550" HEIGHT="450" NAME="laberinto" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>','<PARAM NAME=movie VALUE="parEso.swf"> <PARAM NAME=quality VALUE=high> <PARAM NAME=bgcolor VALUE=#FFFFFF> <EMBED src="parEso.swf" quality=high bgcolor=#FFFFFF  WIDTH=614 HEIGHT=600 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>');

function cambiaFlash(qf){
	document.getElementById('flash1').innerHTML = flashes[qf];
	if(3 == qf){
	document.getElementById('flash1').firstChild.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.focus();
	}
	if(0 == qf || 4 == qf){
		console.log('smoothScrollTo(window.scrollY, 200, 750);');
		smoothScrollTo(window.scrollY, 200, 750);
	}
}
</script>
</head>

<body>
<div class="frame" style="height:150vh">
<?php include('salida.php'); ?>
 
<div class="content">
<div id="cont-contacto">
<div id="left-contacto" >Entretenimiento<br /><br /><span style="font-size:16px">Aqui dejo una muestra de juegos que hice en Flash cuando flash era casi la única opción que había para hacer gráficos animados con programación.<br /><br />Ya ha llovido, ya....</span></div>
<div id="right-contacto" >
<div style="font-size:16px; margin-bottom:10px;"><a onclick="cambiaFlash(0)" class="blanco">Abstractor</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a onclick="cambiaFlash(1);" class="blanco">50x15</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a onclick="cambiaFlash(2);" class="blanco">Carreras de coches</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a onclick="cambiaFlash(3);" class="blanco">Laberinto</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a onclick="cambiaFlash(4);" class="blanco">Parchís Esotérico</a>&nbsp;&nbsp;</div>
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="800" HEIGHT="800" id="flash1" ALIGN="" style="position:absolute; z-index:12">
 
</OBJECT>
</div>
</div>

<?php include('menus.php'); ?>

   </div>
</body>
</html>
