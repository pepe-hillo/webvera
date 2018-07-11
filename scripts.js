function abrirEnPestana(url) {
	var a = document.createElement("a");
	a.target = "_blank";
	a.href = url;
	document.body.appendChild(a)
	a.click();
}
function imagina(im){
	mimg = im.substring(im.indexOf('url(')+5,im.indexOf(')')-1)
	//window.document['trabajos'].src = mimg;
	document.getElementById('fondoTrans').style.display = 'block';
	document.getElementById('fondoTrans').firstChild.style.background=im + 'no-repeat';
	document.getElementById('fondoTrans').firstChild.style.backgroundPosition='center';
	document.getElementById('fondoTrans').firstChild.style.backgroundSize='100% auto';
	document.getElementById('fondoTrans').firstChild.style.position='absolute';
	tip = window.setTimeout('reimagina()', 1000);
}
function reimagina(){
	document.getElementById('fondoTrans').firstChild.style.width='50vw';
	document.getElementById('fondoTrans').firstChild.style.left='25vw';
	document.getElementById('fondoTrans').firstChild.style.height='100vh';
	document.getElementById('fondoTrans').firstChild.style.top='0vh';
}

function desimagina(){
	document.getElementById('fondoTrans').firstChild.style.width='0vw';
	document.getElementById('fondoTrans').firstChild.style.left='50vw';
	document.getElementById('fondoTrans').firstChild.style.height='0vh';
	document.getElementById('fondoTrans').firstChild.style.top='50vh';
	tip = window.setTimeout('desreimagina()', 1000);
}
function desreimagina(){
	
	document.getElementById('fondoTrans').style.display = 'none';
}

var enlace = '';
var enlaceTr = '';
var pathname = window.location.pathname;
function enlaza(e){
	enlace = e;
	document.getElementById('salida').style.display='block';
	document.getElementById('salida').style.top='0px';
	document.getElementById('salida').style.position='fixed'; 
	document.getElementById('salida').style.width='100vw';
	document.getElementById('salidaT').style.background='#AE07BE';
	document.getElementById('salida').style.opacity=1
	tip = window.setTimeout('desenlaza()', 2000);
}
function desenlaza(){
	document.location.href=enlace;
}
function blenda(i){
		//document.getElementsByClassName('imagenPF2')[0].style.backgroundSize='100%'	
//		document.getElementsByClassName('imagenPF2')[0].style.backgroundPosition='center'
//		document.getElementsByClassName('imagenPF2')[0].style.backgroundBlendMode='normal'
		clearTimeout(tip2);
		i.style.backgroundBlendMode='normal'
		i.style.filter='initial'
		i.style.opacity=0.9
//		document.getElementsByClassName('imagenPF2')[0].style.opacity=1
//		document.getElementsByClassName('imagenPF2')[0].style.backgroundImage=document.getElementsByClassName('imagenPF')[0].style.backgroundImage
//		i.style.backgroundPosition='center'	
//		i.style.backgroundBlendMode='normal'
//		i.style.opacity=1
//		i.style.backgroundImage=i.previousSibling.style.backgroundImage
}
function desblenda(i){
		i.style.backgroundBlendMode='luminosity'
		i.style.filter='grayscale(100%)'
		i.style.opacity=0.1
		tip2 = window.setTimeout('cambiaBack()', 2000);
//		i.style.backgroundBlendMode='luminosity'
//		i.style.opacity=0
		//document.getElementsByClassName('imagenPF2')[0].style.background='no-repeat #010101 url("imagenes/pix.png")'
}
function menua(){
	if('0vw'==document.getElementById('menu-grande').style.width){
		document.getElementById('menu-grande').style.display='block';
		document.getElementById('menu-grande').style.top='0px';
		document.getElementById('menu-grande').style.position='fixed'; 
		document.getElementById('menu-grande').style.width='100vw';
		document.getElementById('menu-grande').style.zIndex='10';
	} else {
		document.getElementById('menu-grande').style.width='0vw';

	}
}

var fotos = new Array ('imagenes/satdium-collection.jpg','imagenes/mariale.jpg','imagenes/revolucion.jpg','imagenes/djproductor.jpg','imagenes/jabalcon.jpg','imagenes/laventanadelarte.jpg','imagenes/solytek-big.jpg');
var disenios = new Array ('imagenes/masajes-a-seis-manos.jpg','imagenes/ExpcorpDanzaCuraMora.jpg','imagenes/cartel-yoga-II-2017.jpg','imagenes/cartel-ateneo-aniversario.jpg','imagenes/curso-photoshop3.jpg','imagenes/cartelVillamundo.jpg');
var indcCI = 1 ;
var indcCI2 = 1 ;
function cambiaBack(){
	document.getElementsByClassName('imagenPF')[0].style.opacity=0;
	document.getElementsByClassName('imagenPF')[1].style.opacity=0;
	console.log(1);
	tip2 = window.setTimeout('cambiaBack2()', 2000);
}
function cambiaBack2(){
	document.getElementsByClassName('imagenPF')[0].style.backgroundImage="url('"+fotos[indcCI++]+"')";
	document.getElementsByClassName('imagenPF')[1].style.backgroundImage="url('"+disenios[indcCI2++]+"')";
	indcCI = indcCI==fotos.length ? 0 : indcCI;
	indcCI2 = indcCI2==disenios.length ? 0 : indcCI2;
	console.log(2);
	tip2 = window.setTimeout('cambiaBack22()', 1000);
}
function cambiaBack22(){
	document.getElementsByClassName('imagenPF')[0].style.opacity=0.1;
	document.getElementsByClassName('imagenPF')[1].style.opacity=0.1;
	console.log(22);
	tip2 = window.setTimeout('cambiaBack()', 4000);
}
function cambiaBack3(){//cancelado by the moment
	document.getElementsByClassName('imagenPF')[0].style.backgroundBlendMode='normal';
	document.getElementsByClassName('imagenPF')[0].style.filter='initial';
	document.getElementsByClassName('imagenPF')[0].style.opacity=1;
	document.getElementsByClassName('imagenPF')[1].style.backgroundBlendMode='normal';
	document.getElementsByClassName('imagenPF')[1].style.filter='initial';
	document.getElementsByClassName('imagenPF')[1].style.opacity=1;
	tip2 = window.setTimeout('cambiaBack4()', 2000);
}
function cambiaBack4(){
//	document.getElementsByClassName('imagenPF')[0].style.backgroundBlendMode='luminosity';
//	document.getElementsByClassName('imagenPF')[0].style.filter='grayscale(100%)';
	document.getElementsByClassName('imagenPF')[0].style.opacity=0.1;
//	document.getElementsByClassName('imagenPF')[1].style.backgroundBlendMode='luminosity';
//	document.getElementsByClassName('imagenPF')[1].style.filter='grayscale(100%)';
	document.getElementsByClassName('imagenPF')[1].style.opacity=0.1;
	tip2 = window.setTimeout('cambiaBack()', 2000);
}
var carga = new Array();

/* ***********************ONLOAD *************************** */
window.onload = function(){
	tip3 = window.setTimeout("document.getElementById('salida').style.width='0vw'", 2000);
	document.getElementsByClassName('flecha')[0].onclick = function () {
	   //scrollTos(document.documentElement, window.scrollY+window.innerHeight, 500);   
	   smoothScrollTo(window.scrollY, window.scrollY+window.innerHeight, 750);   
	}
	document.getElementsByClassName('flecha')[1].onclick = function () {
	   //scrollTos(document.documentElement, window.scrollY+window.innerHeight, 500);   
	   smoothScrollTo(window.scrollY, (window.scrollY-window.innerHeight), 750);   
	}
	document.getElementById('salida').style.opacity=0;
	if(pathname == "/" || pathname == "/nueva/"){
		document.getElementsByClassName('imagenPF')[1].style.backgroundImage="url('"+disenios[indcCI2++]+"')";
		for(i=0; i<fotos.length; i++){
			 carga[i]= new Image()
			 carga[i].src=fotos[i];
		}
		for(i=0; i<disenios.length; i++){
			 carga[i]= new Image()
			 carga[i].src=disenios[i];
		}
		
		document.getElementsByClassName('imagenPF')[1].style.left='125vw'	
//		document.getElementsByClassName('imagenPF2')[1].style.left='125vw'	
		tip = window.setTimeout('document.getElementsByClassName("imagenPF")[0].style.opacity=0.1', 2000);
		tip4 = window.setTimeout('document.getElementsByClassName("imagenPF")[1].style.opacity=0.1', 2000);
		tip2 = window.setTimeout('cambiaBack()', 6000);
	}
 
}

var alto = window.innerHeight-38;
//var alto = scrollMaxY;
window.addEventListener("scroll", function(e){
//	if(window.scrollY>0){
//		document.getElementsByClassName('content')[0].firstChild.nextSibling.style.left='0px';
//		document.getElementsByClassName('content')[0].firstChild.nextSibling.style.position='fixed';
//	}
	if(window.scrollY){
		document.getElementById('head').className='head2';
		if(pathname == "/entretenimiento"){
			document.getElementById('web').className='web2';
			document.getElementById('vera').className='vera2';
			document.getElementById('menu').style.marginRight='0px';
			document.getElementById('masmenu').style.marginRight='40px';
			document.getElementById('menu').style.visibility='hidden';
		}
	} else {
		document.getElementById('head').className='head';
		if(pathname == "/entretenimiento"){
			document.getElementById('web').className='web';
			document.getElementById('vera').className='vera';
			document.getElementById('menu').style.marginRight='20px';
			document.getElementById('masmenu').style.marginRight='90px';
			document.getElementById('menu').style.visibility='visible';
		}
	}
		if(window.scrollY>alto){
			if(pathname == "/" || pathname == "/nueva/"){
				document.getElementsByClassName('cont_text')[0].style.left='-370px';
				document.getElementsByClassName('cont_text')[1].style.left='0px';
				document.getElementsByClassName('cont_text')[0].style.left='-370px';
				document.getElementsByClassName('cont_text')[1].style.left='0px';
				document.getElementsByClassName('imagenPF')[0].style.left='125vw' 
//				document.getElementsByClassName('imagenPF2')[0].style.left='125vw'
				document.getElementsByClassName('imagenPF')[1].style.left='45vw'
//				document.getElementsByClassName('imagenPF2')[1].style.left='45vw'
			}
		} else {
			if(pathname == "/" || pathname == "/nueva/"){
				document.getElementsByClassName('cont_text')[0].style.left='0px';
				document.getElementsByClassName('cont_text')[1].style.left='-370px';
				document.getElementsByClassName('cont_text')[0].style.left='0px';
				document.getElementsByClassName('cont_text')[1].style.left='-370px';
				document.getElementsByClassName('imagenPF')[0].style.left='45vw'
//				document.getElementsByClassName('imagenPF2')[0].style.left='45vw'
				document.getElementsByClassName('imagenPF')[1].style.left='125vw'
//				document.getElementsByClassName('imagenPF2')[1].style.left='125vw'
			}
		//document.getElementsByClassName('content')[0].firstChild.nextSibling.style.position='fixed';
		}
	if(window.scrollY>(alto+100)){
		if(pathname == "/" || pathname == "/nueva/"){
			document.getElementsByClassName('cont_text')[0].style.left='-370px';
			document.getElementsByClassName('cont_text')[1].style.left='-370px';
			document.getElementsByClassName('imagenPF')[1].style.left='125vw'
//			document.getElementsByClassName('imagenPF2')[1].style.left='125vw'
			document.getElementsByClassName('imagenPF')[0].style.backgroundColor='#F1C5FB'

		document.getElementsByClassName('hover-step-2')[0].style.backgroundColor='#000';
		document.getElementsByClassName('hover-step-2')[1].style.backgroundColor='#000';
		document.getElementsByClassName('hover-step-2')[2].style.backgroundColor='#000';
		//document.getElementsByClassName('content')[0].firstChild.nextSibling.style.width='0px';
		document.body.style.background='#F1C5FB'; //moraito
		document.getElementsByClassName('content')[0].children[0].style.color='#F1C5FB'
		}
		if(pathname != "/entretenimiento"){
			document.getElementById('web').className='web2';
			document.getElementById('vera').className='vera2';
			document.getElementById('menu').style.marginRight='0px';
			document.getElementById('masmenu').style.marginRight='40px';
			document.getElementById('menu').style.visibility='hidden';
		}
	} else {
		document.body.style.background='#000000';
		if(pathname != "/entretenimiento"){
			document.getElementById('web').className='web';
			document.getElementById('vera').className='vera';
			document.getElementById('menu').style.marginRight='20px';
			document.getElementById('masmenu').style.marginRight='90px';
			document.getElementById('menu').style.visibility='visible';
		}
		document.getElementsByClassName('hover-step-2')[0].style.backgroundColor='#FFF';
		document.getElementsByClassName('hover-step-2')[1].style.backgroundColor='#FFF';
		document.getElementsByClassName('hover-step-2')[2].style.backgroundColor='#FFF';
		document.getElementsByClassName('content')[0].children[0].style.color='#FFF'
		if(pathname == "/" || pathname == "/nueva/"){
			document.getElementsByClassName('imagenPF')[0].style.backgroundColor='#000'
		}
	}
	if(window.scrollY>(alto * 2.5)){
		document.body.style.background='#FFF'
		document.getElementsByClassName('content')[0].children[0].style.color='#FFF'
	} else if(window.scrollY>(alto * 2) && window.scrollY>alto){
		if(pathname == "/" || pathname == "/nueva/"){
		document.body.style.background='rgb(241, 197, 251)'
			document.getElementsByClassName('cont_text')[2].style.marginTop='180vh';
		}
	}
});

function scrolla(){
	window.scrollTo(0,window.scrollY+alto)
}

/**
 * Smooth scroll animation
 * @param {int} endX: destination x coordinate
 * @param {int) endY: destination y coordinate
 * @param {int} duration: animation duration in ms
 */
window.smoothScrollTo = function(endX, endY, duration) {
  var startX = window.scrollX || window.pageXOffset,
    startY = window.scrollY || window.pageYOffset,
    distanceX = endX - startX,
    distanceY = endY - startY,
    startTime = new Date().getTime();

  duration = typeof duration !== 'undefined' ? duration : 400;

  // Easing function
  var easeInOutQuart = function(time, from, distance, duration) {
	  document.getElementsByClassName('flecha')[1].style.display= scrollY>0 ? 'block' : 'none';
    if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
    return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
  };

  var timer = window.setInterval(function() {
    var time = new Date().getTime() - startTime,
      newX = easeInOutQuart(time, startX, distanceX, duration),
      newY = easeInOutQuart(time, startY, distanceY, duration);
    if (time >= duration) {
      window.clearInterval(timer);
    }
    window.scrollTo(newX, newY);
  }, 1000 / 60); // 60 fps
};


//function scrollTos(element, to, duration) {
//    var start = element.scrollTop,
//        change = to - start,
//        currentTime = 0,
//        increment = 20;
//        
//    var animateScroll = function(){        
//        currentTime += increment;
//        var val = Math.easeInOutQuad(currentTime, start, change, duration);
//        element.scrollTop = val;
//        if(currentTime < duration) {
//            setTimeout(animateScroll(), increment);
//        }
//    };
//    animateScroll();
//}
//
////t = current time
////b = start value
////c = change in value
////d = duration
//Math.easeInOutQuad = function (t, b, c, d) {
//  t /= d/2;
//	if (t < 1) return c/2*t*t + b;
//	t--;
//	return -c/2 * (t*(t-2) - 1) + b;
//};