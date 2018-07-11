<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabajos de diseño y desarrollo web | webvera</title>
<meta name="description" content="Una muestra de diseños de webvera" />
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" href="estilos.css">
<script src="scripts.js"></script>
</head>

<body>
<div class="frame">
<?php include('salida.php'); ?>
 <div id="fondoTrans" style="position:fixed; width:100vw; height:100vh; background:#000000cc; z-index:10; display:none;" onclick="desimagina()" ><div class="foto-trabajos" onclick="abrirEnPestana(enlaceTr)"></div></div>
<div class="content">
<div class="tit-trabajos" >trabajos web</div>
</div>
<div class="cont-fotos">
<div id="tal" style="background: url('imagenes/satdium-collection.jpg') center black; background-size:cover;" onclick="imagina(this.style.backgroundImage); enlaceTr='http://stadiumcollection.es/'" class="trabajos">&nbsp;</div>
<div style="background: url('imagenes/mariale.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='http://mariale.webvera.com//'">&nbsp;</div>
<div style="background: url('imagenes/revolucion.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='http://revolucioninterna.com/'">&nbsp;</div>
<div style="background: url('imagenes/djproductor.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='https://djproductor.com'">&nbsp;</div>
<div style="background: url('imagenes/jabalcon.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='http://www.casaruraljabalcon.es/'">&nbsp;</div>
</div>  

<div class="content" style="clear:both;" id="disenio">
<div class="tit-trabajos" >diseño gráfico</div>
</div>
<div style="width:100%; background:#000; float:left; margin-bottom:10vh;">
<div style="background: url('imagenes/masajes-a-seis-manos.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='imagenes/masajes-a-seis-manos.jpg'">&nbsp;</div>
<div style="background: url('imagenes/ExpcorpDanzaCuraMora.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='imagenes/ExpcorpDanzaCuraMora.jpg'">&nbsp;</div>
<div style="background: url('imagenes/cartel-yoga-II-2017.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='imagenes/cartel-yoga-II-2017.jpg'">&nbsp;</div>
<div style="background: url('imagenes/cartel-ateneo-aniversario.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='imagenes/cartel-ateneo-aniversario.jpg'">&nbsp;</div>
<div style="background: url('imagenes/curso-photoshop3.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='imagenes/curso-photoshop3.jpg'">&nbsp;</div>
</div>

<div class="content" style="clear:both;">
<div class="tit-trabajos" >ilustración</div>
</div>
<div style="width:100%; background:#000; float:left; margin-bottom:10vh;">
<div style="background: url('imagenes/cerditos2.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='imagenes/cerditos2.jpg'">&nbsp;</div>
<div style="background: url('imagenes/formon-sol.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='imagenes/formon-sol.jpg'">&nbsp;</div>
<div style="background: url('imagenes/morube-sol.jpg') center black; background-size:cover;" class="trabajos" onclick="imagina(this.style.backgroundImage); enlaceTr='imagenes/morube-sol.jpg'">&nbsp;</div>
<div class="trabajos" style="background: url('imagenes/lapiz-big.jpg') center black; background-size:cover; width:40%" onclick="imagina(this.style.backgroundImage); enlaceTr='imagenes/lapiz-big.jpg'">&nbsp;</div>
</div>



<?php include('menus.php'); ?>

   </div>
</body>
</html>
