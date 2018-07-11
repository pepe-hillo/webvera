<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>diseño y desarrollo web | webvera</title>
<meta name="description" content="Diseño y desarrollo web con php, mysql, javascript, css y html5. Expertos en wordpress" />
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" href="estilos.css">
<script src="scripts.js"></script>
</head>

<body id="body" onmousewheel="return false">
<div class="frame">
<?php include('salida.php'); ?>
    
<div class="content">
	<div class="cont_text">
        <div style="width:270px; float:left; ">
            Hacemos webs<br /><span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sencillas, fialbles, efectivas...</span></div>
    </div>
	<div class="cont_text" style="left:-370px">
        <div style="width:270px; float:left; ">
            Diseño gráfico<br /><span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carteles, folletos, imagen...</span>        </div>
    </div>
    
    <div class="imagenPF" onMouseOver="blenda(this)" onMouseOut="desblenda(this)"></div><!--<div class="imagenPF2" onMouseOver="blenda(this)" onMouseOut="desblenda(this)" onClick="enlaza('trabajos')"></div>-->
    <div class="imagenPF" onMouseOver="blenda(this)" onMouseOut="desblenda(this)"></div><!--<div class="imagenPF2" onMouseOver="blenda(this)" onMouseOut="desblenda(this)" onClick="enlaza('trabajos#disenio')"></div>-->
    <!--<div style="margin:200vh 10vh 0; position:relative; z-index:10">-->
    <div class="cont_text" style="margin-top:280vh; position:relative; z-index:10; color:#333333">Creamos nuestro propio código<br /><span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;php, javascript, css, html...</span>
    <div style="font-size:16px;"><br />Nos ponemos en la piel de nuestros clientes buscando las soluciones más adecuadas a cada caso.<br />Nos anticipamos a lo que buscan los usuarios finales, ofreciendo una experiencia satisfactoria que ayude a vender más.<br />
Creamos el código personalizado para cada necesidad. Evitando dependencias de terceros. Sin más complicaciones.
</div>
    </div>
    <div id="oops" class="cont_text" style="position:relative; z-index:10; color:#333333; margin-bottom:35vh; margin-top:20vh">Y por supuesto. Si prefieres Wordpress...<br /><span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desarrollamos Themes, plugins y código para Wordpress ...</span>
    <div style="font-size:16px;"><br />Preferimos desarrollar nuestas propias soluciones. Peros si tienes una web hecha en Wordpress o quieres<br />desarrollarla desde cero, ponemos a tu disposición nuestra experiencia en desarrollos para wordpress...
</div>
</div>
</div>

<br />
<?php include('menus.php'); ?>
<!--
<div class="site-menu">
  <div class="site-menu__bg" style="background-color: #151519;"></div>
  <aside class="site-menu__info-slogan">
      <p class="site-menu__slogan">
      We create possibilities for the connected world.
      <strong>Be Bold.</strong>
    </p>
  </aside>
  <div class="site-menu__container">
    <nav class="site-menu__nav">
      <ul class="site-menu__nav-list">
        <li class="site-menu__nav-item" data-menu-link="1">
          <a class="site-menu__nav-link" href="/">Home</a>
        </li>
        <li class="site-menu__nav-item" data-menu-link="2">
          <a class="site-menu__nav-link" href="/about">About</a>
        </li>
        <li class="site-menu__nav-item" data-menu-link="3">
          <a class="site-menu__nav-link" href="/capabilities">Capabilities</a>
        </li>
        <li class="site-menu__nav-item site-menu__nav-item--active" data-menu-link="4">
          <a class="site-menu__nav-link" href="/careers">Careers</a>
        </li>
        <li class="site-menu__nav-item" data-menu-link="5">
          <a class="site-menu__nav-link" href="/contact">Contact</a>
        </li>
      </ul>     </nav>   </div> </div> -->
   </div>
</body>
</html>
