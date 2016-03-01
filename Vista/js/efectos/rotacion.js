function retornarLienzo(x) {
  var canvas = document.getElementById(x);
  if (canvas.getContext) {
    var lienzo = canvas.getContext("2d");   
    return lienzo;
  } else
    return false;
}


function dibujar() {
  var lienzo=retornarLienzo("lienzo1");
  if (lienzo) {
    lienzo.clearRect(0,0,600,600);
    lienzo.save();
    lienzo.translate(300,300);
    lienzo.rotate(avance);
    lienzo.drawImage(img1,-125,-125);
    avance+=0.05;
    if (avance>Math.PI*2)
      avance=0;
    lienzo.restore();  
  }
}

var avance=0;
var img1;
function inicio() {
  img1 = new Image(); 
  img1.src = 'http://www.htmlya.com.ar/simulador/foto1.jpg';
  img1.onload = function(){ 
    setInterval(dibujar,50);
  }  
}
