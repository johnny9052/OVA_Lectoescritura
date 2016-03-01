var posicionSecuencia= parseInt(1);//maneja la posicion de la secuancia de la ova
var limiteOva; // almacena cuantos niveles de navegacion tiene la ova
var script=document.createElement('script');
var head=document.getElementsByTagName('head').item(0);

$(document).ready(function() {        
   
    });
       
/**
* Carga el script respectivo de la ova
* 
* @param {String} tema : El tema de la ova que se va a buscar
* @return {String} Nothing.
*/
function cargarScript(tema){
        
    switch(tema){
        case "lectoEscritura":
            script.src = 'Vista/js/ovas/lectoEscritura.js';
            script.type = 'text/javascript';
            script.defer = true;
            script.id = 'scriptID'; // Esto es para poder borrar el objeto despues for removal
            // Ahora se inserta el objeto creado en el elemento HEAD del html                        
            head.appendChild(script);    
            break;
    }
    calcularLimite(tema);
}


/**
* Restablece la posicion del nivel de navegacion de una ova, ademas quita el script de dicha ova
* 
* 
* @return {String} Nothing.
*/
function cerrar(){        
    //posicionSecuencia=parseInt(1);
    var old = document.getElementById('scriptID');
    if (old) head.removeChild(old);
}




/**
* Calcula cuantas paginas hay de la ova
* 
* @param {String} tema : El tema de la ova que se va a buscar
* @return {String} Nothing.
*/
function calcularLimite(tema){
    var cont=1;
    
    try{
        while(cont<100){
            myvar = document.getElementById('div'+cont+tema).value;
            cont++;
        }
    }catch(elError){
        limiteOva = --cont;
        //alert(limiteOva);
        secuenciaOva(tema);
    }
}




/**
 * Define cual es la siguiente pagina a la cual debemos avanzar
 * 
 * @param {String} tema : el numero de la imagen que debe mostrar.
 * @return {String} Nothing.
 */
function avanzar(tema){    
    if(posicionSecuencia<limiteOva){
        posicionSecuencia++;
    }else{
        apprise('Hasta la proxima!!!', {
            'animate':true
        });
        $.fancybox.close();
    }    
    secuenciaOva(tema);
}

/**
 * Define cual es la anterior pagina a la cual debemos avanzar
 * 
 * @param {String} tema : el numero de la imagen que debe mostrar.
 * @return {String} Nothing.
 */
function retroceder(tema){
    if(posicionSecuencia>1){
        posicionSecuencia--;
        secuenciaOva(tema);
    }else{
        $.fancybox.close();
    }    
    
}


/**
 * Abre una determinada pagina de una ova, segun el tema y la pagina en la que se encuentre.
 * 
 * @param {String} tema : El tema de la OVA que se ha seleccionado.
 * @return {String} Nothing.
 */
function secuenciaOva(tema){            
    
    switch(tema){
                             
        case "lectoEscritura":
            
            switch(posicionSecuencia){
                case 1:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            startAnimacionInicioLectoEscritura();
                        },
                        'onClosed': function () {  
                            stopAnimacionInicioLectoEscritura();
                            cerrar();
                        }
                        
                    });
                    break;
                    
                    
                case 2:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            reproducirAudio("audio1Lectoescritura")
                        },
                        'onClosed': function () {  
                            detenerAudio("audio1Lectoescritura");
                            cerrar();                             
                        }                        
                    });
                    break;
                    
                    
                    
                case 3:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                             
                        }                        
                    });
                    break;
                    
                    
                    
                case 4:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;
                    
                    
                     
                case 5:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            reproducirAudio("audio2Lectoescritura");
                        },
                        'onClosed': function () {  
                            detenerAudio("audio2Lectoescritura");
                            cerrar();                             
                        }                        
                    });
                    break;
                    
                    
                    
                case 6:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {  
                            
                            reproducirAudio("audio3Lectoescritura");
                            
                            $('.transcribirDefinicion').css('display', 'none');
                            $('.transcribirEjemplo').css('display', 'none');
                            $('.acentuarDefinicion').css('display', 'none');
                            $('.acentuarEjemplo').css('display', 'none');
                            $('.reproducirDefinicion').css('display', 'none');
                            $('.reproducirEjemplo').css('display', 'none');
                            $('.distinguirDefinicion').css('display', 'none');
                            $('.distinguirEjemplo').css('display', 'none');
                            
                            
                            setTimeout(verSecuencia,2000,'transcribirDefinicion');
                            setTimeout(verSecuencia,3000,'transcribirEjemplo');
                            setTimeout(verSecuencia,8000,'acentuarDefinicion');
                            setTimeout(verSecuencia,11000,'acentuarEjemplo');
                            setTimeout(verSecuencia,18000,'reproducirDefinicion');
                            setTimeout(verSecuencia,23000,'reproducirEjemplo');
                            setTimeout(verSecuencia,28000,'distinguirDefinicion');
                            setTimeout(verSecuencia,33000,'distinguirEjemplo');
                           
                        },
                        'onClosed': function () { 
                            detenerAudio("audio3Lectoescritura");
                            cerrar();                              
                        }                        
                    });
                    break;
                    
                                                                                                    
                case 7:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;
                    
                    
                    
                case 8:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;      
                    
                    
                case 9:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;  
                    
                case 10:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;   
                    
                    
                case 11:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;   
                    
                    
                case 12:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;   
                    
                    
                case 13:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;   
                    
                    
                    
                case 14:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {  
                            
                            reproducirAudio("audio4Lectoescritura");
                                                        
                            $('.sec2texto').css('display', 'none');
                            $('.sec6texto').css('display', 'none');
                            $('.sec1texto').css('display', 'none');                            
                            $('.sec3texto').css('display', 'none');                            
                            $('.sec5texto').css('display', 'none');
                            $('.sec4texto').css('display', 'none');
                                                                                    
                            setTimeout(verSecuencia,1000,'sec2texto');                            
                            setTimeout(verSecuencia,5000,'sec6texto');                            
                            setTimeout(verSecuencia,8000,'sec1texto');                                                        
                            setTimeout(verSecuencia,22000,'sec3texto');                                                        
                            setTimeout(verSecuencia,31000,'sec5texto');
                            setTimeout(verSecuencia,35000,'sec4texto');
                                                        
                        },
                        'onClosed': function () {  
                            detenerAudio("audio4Lectoescritura");
                            cerrar();                            
                        }                        
                    });
                    break;     
                    
                    
                case 15:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;     
                    
                    
                    
                case 16:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;     
                    
                    
                case 17:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;     
                    
                    
                case 18:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;     
                    
                    
                case 19:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;     
                    
                    
                case 20:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;     
            }            
            break;   
    }
}