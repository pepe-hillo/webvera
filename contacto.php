<?php 
if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'contacta') {

	if(isset($_POST['g-recaptcha-response'])){
	
		//La respuesta del recaptcha
		$respuesta=$_POST['g-recaptcha-response'];
		//La ip del usuario
		$ipuser=$_SERVER['REMOTE_ADDR'];
		//Tu clave secretra de recaptcha
		$clavesecreta='6Leb410UAAAAAP1N1WS8I6Ror13UmVpQ51p-0ck2';
		//La url preparada para enviar
		$urlrecaptcha="https://www.google.com/recaptcha/api/siteverify?secret=$clavesecreta&response=$respuesta&remoteip=$ipuser";
		
		//Leemos la respuesta (suele funcionar solo en remoto)
		$respuesta = file_get_contents($urlrecaptcha) ;
		
		//Comprobamos el success
		$dividir=explode('"success":',$respuesta);
		$obtener=explode(',',$dividir[1]);
		
		//Obtenemos el estado
		$estado=trim($obtener[0]);
		
		
		if ($estado=='true'){
		
		
			$to = "jtdelgado@webvera.com";
			
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$subject = $_REQUEST['jtdsg_name'] . ' se ha puest en contacto con webvera a través de la web';
				//$headers .= "To:  \r\n";
				$headers .= "From:web webvera <locos@webvera.com>\r\n";
			
			$message  = "<html><body style='background:#000; color:#FFF; width:100%; margin:0px;'><div style=' width:70%; margin:50px auto;'><strong>Nombre</strong>: ".$_REQUEST['jtdsg_name']."<br>";
			$message .= "<strong>Dirección</strong>: ".$_REQUEST['jtdsg_direccion']."<br>";
			$message .= "<strong>Asunto</strong>: ".$_REQUEST['jtdsg_subject']."<br>";
			$message .= "<strong>Mensaje</strong>: ".$_REQUEST['jtdsg_message']."</p></div></body></html>";
			
			if (mail($to, $subject, $message, $headers)) {
				$respEmail = '<span class="fa fa-correcto">
						<h4>He recibido correctamente tu mensaje<br> y te responderé en las próximas horas.</h4></span>';
			} else {
				$respEmail = '<span class="fa fa-fallo">
						<h4>No hemos podido enviar tu mensaje</h4>
						<p>Vuelve a intentarlo más tarde</p></span>';
			}
		} else {
			$respEmail = '<span class="fa fa-fallo"><h4>Parece que ha habido un errror con el captcha</h4><p>¿Estás seguro que no eres un robot?</p></span><input type="button" class="btn" value="reintentar" onclick="document.getElementById(\'alerta\').style.display=\'none\'"></input>';
		}
	}
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacta con webvera, diseño y desarrollo web</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="description" content="Diseño y desarrollo web con php, mysql, javascript, css y html5. Expertos en wordpress" />
<link rel="stylesheet" href="estilos.css">
<script src="scripts.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<div class="frame">
<?php include('salida.php'); ?>
 
<div class="content">
<div id="cont-contacto">
<div id="left-contacto" >contacto<br /><br /><span style="font-size:16px">Puedes ponerte en contacto con webvera a través de este formulario.<br /><br />Los datos no se recográn en ningún fichero.<br /><br />Tambien pudes hacerlo en el teléfono <br /><br /><span style="font-size:36px">678 32 01 62</span></span></div>
<div id="right-contacto" >
<?php if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'contacta') {?>
<div id="alerta" ><?php echo $respEmail ?></div>
<?php } ?>
	<form method="post" action="" style="width:100%; ">
      <input type="text" name="jtdsg_name" placeholder="Escribe aquí tu nombre y apellidos" required>
     
      <input type="text" name="jtdsg_direccion" placeholder="Escribe el email o la dirección a la que quieres que te responda" >
      
      <input type="text" name="jtdsg_subject" placeholder="Título del mensaje" required>    
      
      <textarea name="jtdsg_message" style="height:20vh; font-family:Arial negra, Helvetica, sans-serif" placeholder="Mensaje" required></textarea><br>
      <input type="hidden" name="action" value="contacta" />
      <div style="float:right;"> <div class="g-recaptcha" data-sitekey="6Leb410UAAAAALQoMZMr-VLvmUZ3OntKyHHt83qf"></div></div><button type="submit" class="btn" style="float:left; margin-right:40px;">Enviar datos</button>
    </form>
</div>
</div>

<?php include('menus.php'); ?>

   </div>
</body>
</html>
