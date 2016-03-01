

var posicionAvatarLectoEscritura=0; // almacena la posicion del avatar de la ova para su animacion

/***********************************************************/
/***********************************************************/
/***********************************************************/
/**********************ANIMACIONES**************************/
/***********************************************************/
/***********************************************************/


var animacionAvatarLectoEscritura=null; // almacena la animacion del avatar de LectoEscritura

/**
 * Inicia la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function startAnimacionInicioLectoEscritura() {  // use a one-off timer
    stopAnimacionInicioLectoEscritura();
    animacionAvatarLectoEscritura= setInterval(function(){
        moverAvatarLectoEscritura();
    },200);
}

/**
 * Detiene la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function stopAnimacionInicioLectoEscritura() {
    clearTimeout(animacionAvatarLectoEscritura);
}



/**
 * Cambia la animacion del avatar de LectoEscritura.
 *  
 * @return {String} Nothing.
 */
function moverAvatarLectoEscritura(){    
    
    if(posicionAvatarLectoEscritura>=limiteAvatar){
        posicionAvatarLectoEscritura =0;
    }
    
    switch(posicionAvatarLectoEscritura){
        case 0:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/lectoEscritura/avatarBocaCerrada.png";            
            
            break;
        
        case 1:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/lectoEscritura/avatarNube.png";
            break;  
        
        case 2:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/lectoEscritura/avatarNube.png";            
            break;                             
    }           
    posicionAvatarLectoEscritura++;            
}





/**
 * Muestra con efecto una determinada imagen oculta con extension png, a partir de su clase
 * 
 * @param {String} clase : Clase del elemento oculto
 * @return {String} Nothing.
 * @description para mas informacion visitar el siguiente enlace http://vagabundia.blogspot.com/2010/01/efectos-elementales-con-jquery.html
 */
function verSecuencia(clase){       
    $('.'+clase).attr('src', 'Vista/imagenes/secuenciacion/lectoEscritura/'+clase+'.png');    
    $('.'+clase).fadeIn();
//$('.'+clase).css('display', 'inline');    
}





/******************************************************/
/******************************************************/
/**************PREGUNTAS SELECCION*********************/
/******************************************************/
/******************************************************/



/**
 * Determina si la pregunta contestada es correcta o no
 * 
 * @param {int} pregunta : Numero de la pregunta
 * @return {String} Mensaje de si es correcta la respuesta o no.
 */
function calificarPreguntaLectoEscritura(pregunta){
    
    switch(pregunta){
        case 1:
            if($("input[name='test1LectoEscritura']:checked").val()==4){//respuesta correcta la B                
                mensajeGeneral('Muy bien.');                             
                correcto.playclip();
                avanzar('lectoEscritura');
            }else{                
                mensajeError("Incorrecto.");
                error.playclip();
            //avanzar('lectoEscritura');
            }
            
            break;                
    }

}
















/**************************************/
/**************************************/
/***********VENTANAS INDEPENDIENTES****/
/**************************************/
/**************************************/


/**
 * Abre un fancybox en especifico
 * 
 * 
 * @return {String} Nothing.
 */
function abrirZoomMitosis(){
    $.fancybox({
        'showCloseButton': false,
        'transitionIn': 'fade',
        'hideOnOverlayClick':false, //bloquear click externo
        'scrolling': 'no',
        'href': '#divZoomMitosis',
        'onClosed': function () {            
        }
    });
}


function navegacionMenu(pagina,tema){        
    posicionSecuencia= parseInt(pagina);
    secuenciaOva(tema);    
} 






/**
 * Abre un fancybox en especifico del subtema de conectores
 * 
 * 
 * @return {String} Nothing.
 */

function abrirTema(id,tema){    
    posicionSecuencia= parseInt(id);
    secuenciaOva(tema);   
} 


function abrirSubTema(id){       
    $.fancybox({
        'showCloseButton': false,
        'transitionIn': 'fade',
        'hideOnOverlayClick':false, //bloquear click externo
        'scrolling': 'no',
        'href': '#div'+id+'lectoEscritura',
        'onComplete':function () {  
        },
        'onClosed': function () {            
        }
    });
}



function reproducirAudio(id){    
    try{
        document.getElementById(id).load();
        document.getElementById(id).play();    
    }catch(elError){
        
    }
}


function detenerAudio(id){    
    document.getElementById(id).pause();    
}