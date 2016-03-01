var posicionAvatar=0; //indica la imagen dinamica que debe cargarse en el avatar
var limiteAvatar = 3; //limite de acciones de animacion del avatar

$(document).ready(function() {        
    });
  




/**
 * Abre una determinada pagina, segun la opcion que hallan seleccionado
 * 
 * @param {String} accion : El boton que han seleccionado
 * @return {String} Nothing.
 */
function abrirVentana(accion){   
    switch(accion){
        case "bienvenidos":
                                
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'autoScale':true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divBienvenidos',
                'onComplete':function () {            
                    startAnimacionInicio();
                },
                'onClosed': function () {  
                    stopAnimacionInicio();
                }
            });
            
            break;
            
        case "inicio":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divInicio',
                'onClosed': function () {            
                }
            });
            
            break;
            
            
        case "requerimientos":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divRequerimientos',
                'onClosed': function () {            
                }
            });            
            break;
            
        case "contenido":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divContenido',
                'onClosed': function () {            
                }
            });            
            break;
            
        case "objetivos":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divObjetivos',
                'onClosed': function () {            
                }
            });            
            break;
            
            
        case "documentos":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divDocumentos',
                'onClosed': function () {            
                }
            });            
            break;
            
            
        case "creditos":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divCreditos',
                'onClosed': function () {            
                }
            });            
            break;
            
    }
    
}



/***********************************************************/
/***********************************************************/
/***********************************************************/
/**********************ANIMACIONES**************************/
/***********************************************************/
/***********************************************************/


var animacionInicio=null; // variable que controlara el intervalo de movimiento del avatar

/**
 * Inicia la animacion del avatar del universo para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function startAnimacionInicio() {  // use a one-off timer
    stopAnimacionInicio();
    animacionInicio= setInterval(function(){
        moverAvatar();
    },250);
}

/**
 * Detiene la animacion del avatar del universo para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function stopAnimacionInicio() {
    clearTimeout(animacionInicio);
}


/**
 * Cambia la animacion del avatar.
 *  
 * @return {String} Nothing.
 */
function moverAvatar(){    
    
    if(posicionAvatar>=limiteAvatar){
        posicionAvatar =0;
    }
    
    switch(posicionAvatar){
        case 0:
            document.getElementById('avatarInicio').src = "Vista/imagenes/universo/menu/avatarNubeBocaCerrada.png";            
            
            break;
            
        case 1:
            document.getElementById('avatarInicio').src = "Vista/imagenes/universo/menu/avatarNube.png";
            break;  
                                                 
        case 2:
            document.getElementById('avatarInicio').src = "Vista/imagenes/universo/menu/avatarNubeBocaAbierta.png";            
            break;                             
    }           
    posicionAvatar++;            
}







function mensajeGeneral(mensaje){
    apprise(mensaje, {
        'animate':true                    
    });
}


function mensajeError(mensaje){
    jAlert(mensaje, "Te equivocaste");      
}