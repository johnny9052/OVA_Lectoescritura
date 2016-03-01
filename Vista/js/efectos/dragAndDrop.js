
/**
 * Función que se ejecuta al arrastrar el elemento. 
 **/
function start(e) {
    e.dataTransfer.effecAllowed = 'move'; // Define el efecto como mover (Es el por defecto)
    e.dataTransfer.setData("Text", e.target.id); // Coje el elemento que se va a mover
    e.target.style.opacity = '0.4'; 
}

/**
 * Función que se ejecuta se termina de arrastrar el elemento. 
 **/
function end(e){
    e.target.style.opacity = ''; // Restaura la opacidad del elemento			
    e.dataTransfer.clearData("Data");			
}

/**
 * Función que se ejecuta cuando un elemento arrastrable entra en el elemento desde del que se llama. 
 **/
function enter(e) {
    return true;
}

/**
 * Función que se ejecuta cuando un elemento arrastrable esta sobre el elemento desde del que se llama. 
 * Devuelve false si el objeto se puede soltar en ese elemento y true en caso contrario.
 **/
function over(e) {
    if ((e.target.className == "contenedorPieza") || (e.target.className == "contenedorPiezaAct02") || (e.target.id == "contenedorPiezas") || (e.target.id == "contenedorPiezasAct2"))
        return false;
    else
        return true;
}
    
/**
 * Muestra un mensaje de advertencia si el navegador no soporta Drag & Drop. (En Windows no lo soportan ni IE ni Safari)
 **/
function comprobarnavegador() {
    if( 
        (navigator.userAgent.toLowerCase().indexOf('msie ') > -1) || 
        ((navigator.userAgent.toLowerCase().indexOf('safari') > -1) && (navigator.userAgent.toLowerCase().indexOf('chrome') == -1)))
        {
        alert("Tu navegador no soporta correctamente las funciones Drag & Drop de HTML5. Prueba con otro navegador.");
    }

}



/*******************************************/
/*******************************************/
/**************ACCIONES POR OVA*************/
/*******************************************/
/*******************************************/


/**********************DIVISION CELULAR******************************/


/**
 * Función que se ejecuta cuando un elemento arrastrable se suelta sobre el elemento desde del que se llama. 
 **/
function dropLecto(e,pregunta){
    e.preventDefault(); // Evita que se ejecute la accion por defecto del elemento soltado.
    var elementoArrastrado = e.dataTransfer.getData("Text");
    e.target.appendChild(document.getElementById(elementoArrastrado)); // Coloca el elemento soltado sobre el elemento desde el que se llamo esta funcion
    
    switch(pregunta){
        case 1:
            comprobarPuzzle1LectoHijo(1);
            break;
            
        case 2:
            comprobarPuzzle1LectoSobrino(1);
            break;
            
        case 3:
            comprobarPuzzle1LectoSastre(1);
            break;
            
        case 4:
            comprobarPuzzle1LectoEsposa(1);
            break;
            
            
        case 5:
            comprobarPuzzle1LectoCunado(1);
            break;
            
        case 6:
            comprobarPuzzle2LectoPar1(1);
            break;
            
            
        case 7:
            comprobarPuzzle2LectoPar2(1);
            break;
            
        case 8:
            comprobarPuzzle2LectoPar3(1);
            break;
            
        case 9:
            comprobarPuzzle2LectoPar4(1);
            break;
    }
    
    
    
    
}



/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzle1LectoHijo(tipo){
    
    if(tipo==1){//comprueba despues de colocar una pieza
        if(((document.getElementById('pieza2LectoAct1hijo').parentNode.id=='dosActividad1hijoLectoEscritura') || 
            (document.getElementById('pieza3LectoAct1hijo').parentNode.id=='dosActividad1hijoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1hijo').parentNode.id=='dosActividad1hijoLectoEscritura')) &&        
            
        ((document.getElementById('pieza1LectoAct1hijo').parentNode.id=='tresActividad1hijoLectoEscritura') || 
            (document.getElementById('pieza4LectoAct1hijo').parentNode.id=='tresActividad1hijoLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura') || 
            (document.getElementById('pieza3LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura')) &&
            
        ((document.getElementById('pieza1LectoAct1hijo').parentNode.id=='cincoActividad1hijoLectoEscritura') || 
            (document.getElementById('pieza4LectoAct1hijo').parentNode.id=='cincoActividad1hijoLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura') || 
            (document.getElementById('pieza3LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura'))
        ){
            mensajeGeneral('Muy bien… Recuerda que para que un mensaje sea significativo, puedes utilizar diversos signos de puntuación.');
            correcto.playclip();
        }else{
            if((document.getElementById('pieza8LectoAct1hijo').parentNode.id=='unoActividad1hijoLectoEscritura') &&
                
                (document.getElementById('pieza6LectoAct1hijo').parentNode.id=='unounoActividad1hijoLectoEscritura') &&
                
                (document.getElementById('pieza7LectoAct1hijo').parentNode.id=='dosActividad1hijoLectoEscritura') &&
                
                (document.getElementById('pieza9LectoAct1hijo').parentNode.id=='tresActividad1hijoLectoEscritura') &&
                
                ((document.getElementById('pieza2LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura') || 
                    (document.getElementById('pieza3LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura') ||
                    (document.getElementById('pieza5LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura')) &&
                
                ((document.getElementById('pieza1LectoAct1hijo').parentNode.id=='cincoActividad1hijoLectoEscritura') || 
                    (document.getElementById('pieza4LectoAct1hijo').parentNode.id=='cincoActividad1hijoLectoEscritura')) &&
            
                ((document.getElementById('pieza2LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura') || 
                    (document.getElementById('pieza3LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura') ||
                    (document.getElementById('pieza5LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura'))
                ){
                mensajeGeneral('Muy bien… Recuerda que para que un mensaje sea significativo, puedes utilizar diversos signos de puntuación.');
                correcto.playclip();
            }
        }
    }else{
        if(((document.getElementById('pieza2LectoAct1hijo').parentNode.id=='dosActividad1hijoLectoEscritura') || 
            (document.getElementById('pieza3LectoAct1hijo').parentNode.id=='dosActividad1hijoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1hijo').parentNode.id=='dosActividad1hijoLectoEscritura')) &&        
            
        ((document.getElementById('pieza1LectoAct1hijo').parentNode.id=='tresActividad1hijoLectoEscritura') || 
            (document.getElementById('pieza4LectoAct1hijo').parentNode.id=='tresActividad1hijoLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura') || 
            (document.getElementById('pieza3LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura')) &&
            
        ((document.getElementById('pieza1LectoAct1hijo').parentNode.id=='cincoActividad1hijoLectoEscritura') || 
            (document.getElementById('pieza4LectoAct1hijo').parentNode.id=='cincoActividad1hijoLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura') || 
            (document.getElementById('pieza3LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura'))
        ){
            mensajeGeneral('Muy bien… Recuerda que para que un mensaje sea significativo, puedes utilizar diversos signos de puntuación.');
            avanzar('lectoEscritura');
            correcto.playclip();
        }else{
            if((document.getElementById('pieza8LectoAct1hijo').parentNode.id=='unoActividad1hijoLectoEscritura') &&
                
                (document.getElementById('pieza6LectoAct1hijo').parentNode.id=='unounoActividad1hijoLectoEscritura') &&
                
                (document.getElementById('pieza7LectoAct1hijo').parentNode.id=='dosActividad1hijoLectoEscritura') &&
                
                (document.getElementById('pieza9LectoAct1hijo').parentNode.id=='tresActividad1hijoLectoEscritura') &&
                
                ((document.getElementById('pieza2LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura') || 
                    (document.getElementById('pieza3LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura') ||
                    (document.getElementById('pieza5LectoAct1hijo').parentNode.id=='cuatroActividad1hijoLectoEscritura')) &&
                
                ((document.getElementById('pieza1LectoAct1hijo').parentNode.id=='cincoActividad1hijoLectoEscritura') || 
                    (document.getElementById('pieza4LectoAct1hijo').parentNode.id=='cincoActividad1hijoLectoEscritura')) &&
            
                ((document.getElementById('pieza2LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura') || 
                    (document.getElementById('pieza3LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura') ||
                    (document.getElementById('pieza5LectoAct1hijo').parentNode.id=='seisActividad1hijoLectoEscritura'))
                ){
                mensajeGeneral('Muy bien… Recuerda que para que un mensaje sea significativo, puedes utilizar diversos signos de puntuación.');
                avanzar('lectoEscritura');
                correcto.playclip();
            }else{
                mensajeError("No te desanimes, intenta de nuevo");
                error.playclip();
            }
        }
    }
}






/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzle1LectoSobrino(tipo){
    
    if(tipo==1){//comprueba despues de colocar una pieza
        if(((document.getElementById('pieza6LectoAct1sobrino').parentNode.id=='unoActividad1sobrinoLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1sobrino').parentNode.id=='dosActividad1sobrinoLectoEscritura')) &&        
            
        ((document.getElementById('pieza2LectoAct1sobrino').parentNode.id=='cincoActividad1sobrinoLectoEscritura') || 
            (document.getElementById('pieza4LectoAct1sobrino').parentNode.id=='cincoActividad1sobrinoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sobrino').parentNode.id=='cincoActividad1sobrinoLectoEscritura')) &&
            
        ((document.getElementById('pieza1LectoAct1sobrino').parentNode.id=='seisActividad1sobrinoLectoEscritura') || 
            (document.getElementById('pieza3LectoAct1sobrino').parentNode.id=='seisActividad1sobrinoLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura') || 
            (document.getElementById('pieza4LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura') || 
            (document.getElementById('pieza4LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura')) &&
            
        ((document.getElementById('pieza1LectoAct1sobrino').parentNode.id=='nueveActividad1sobrinoLectoEscritura') || 
            (document.getElementById('pieza3LectoAct1sobrino').parentNode.id=='nueveActividad1sobrinoLectoEscritura')) 
        ){
            mensajeGeneral('Muy bien… Recuerda que si cambias un  signo de puntuación, cambiarás el significado de la frase.');
            correcto.playclip();
        }else{
            if(((document.getElementById('pieza6LectoAct1sobrino').parentNode.id=='unoActividad1sobrinoLectoEscritura')) &&        
            
                ((document.getElementById('pieza9LectoAct1sobrino').parentNode.id=='dosActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza10LectoAct1sobrino').parentNode.id=='tresActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza7LectoAct1sobrino').parentNode.id=='cuatroActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza8LectoAct1sobrino').parentNode.id=='cincoActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza1LectoAct1sobrino').parentNode.id=='seisActividad1sobrinoLectoEscritura') || 
                    (document.getElementById('pieza3LectoAct1sobrino').parentNode.id=='seisActividad1sobrinoLectoEscritura')) &&
                            
                ((document.getElementById('pieza2LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura') || 
                    (document.getElementById('pieza4LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura') ||
                    (document.getElementById('pieza5LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza2LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura') || 
                    (document.getElementById('pieza4LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura') ||
                    (document.getElementById('pieza5LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza1LectoAct1sobrino').parentNode.id=='nueveActividad1sobrinoLectoEscritura') || 
                    (document.getElementById('pieza3LectoAct1sobrino').parentNode.id=='nueveActividad1sobrinoLectoEscritura')) 
                ){
                mensajeGeneral('Muy bien… Recuerda que si cambias un  signo de puntuación, cambiarás el significado de la frase.');
                correcto.playclip();
            }
        }
    
    }else{
        if(((document.getElementById('pieza6LectoAct1sobrino').parentNode.id=='unoActividad1sobrinoLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1sobrino').parentNode.id=='dosActividad1sobrinoLectoEscritura')) &&        
            
        ((document.getElementById('pieza2LectoAct1sobrino').parentNode.id=='cincoActividad1sobrinoLectoEscritura') || 
            (document.getElementById('pieza4LectoAct1sobrino').parentNode.id=='cincoActividad1sobrinoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sobrino').parentNode.id=='cincoActividad1sobrinoLectoEscritura')) &&
            
        ((document.getElementById('pieza1LectoAct1sobrino').parentNode.id=='seisActividad1sobrinoLectoEscritura') || 
            (document.getElementById('pieza3LectoAct1sobrino').parentNode.id=='seisActividad1sobrinoLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura') || 
            (document.getElementById('pieza4LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura') || 
            (document.getElementById('pieza4LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura')) &&
            
        ((document.getElementById('pieza1LectoAct1sobrino').parentNode.id=='nueveActividad1sobrinoLectoEscritura') || 
            (document.getElementById('pieza3LectoAct1sobrino').parentNode.id=='nueveActividad1sobrinoLectoEscritura')) 
        ){
            mensajeGeneral('Muy bien… Recuerda que si cambias un  signo de puntuación, cambiarás el significado de la frase.');
            avanzar('lectoEscritura');
            correcto.playclip();
        }else{
            if(((document.getElementById('pieza6LectoAct1sobrino').parentNode.id=='unoActividad1sobrinoLectoEscritura')) &&        
            
                ((document.getElementById('pieza9LectoAct1sobrino').parentNode.id=='dosActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza10LectoAct1sobrino').parentNode.id=='tresActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza7LectoAct1sobrino').parentNode.id=='cuatroActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza8LectoAct1sobrino').parentNode.id=='cincoActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza1LectoAct1sobrino').parentNode.id=='seisActividad1sobrinoLectoEscritura') || 
                    (document.getElementById('pieza3LectoAct1sobrino').parentNode.id=='seisActividad1sobrinoLectoEscritura')) &&
                            
                ((document.getElementById('pieza2LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura') || 
                    (document.getElementById('pieza4LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura') ||
                    (document.getElementById('pieza5LectoAct1sobrino').parentNode.id=='sieteActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza2LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura') || 
                    (document.getElementById('pieza4LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura') ||
                    (document.getElementById('pieza5LectoAct1sobrino').parentNode.id=='ochoActividad1sobrinoLectoEscritura')) &&
            
                ((document.getElementById('pieza1LectoAct1sobrino').parentNode.id=='nueveActividad1sobrinoLectoEscritura') || 
                    (document.getElementById('pieza3LectoAct1sobrino').parentNode.id=='nueveActividad1sobrinoLectoEscritura')) 
                ){
                mensajeGeneral('Muy bien… Recuerda que si cambias un  signo de puntuación, cambiarás el significado de la frase.');
                avanzar('lectoEscritura');
                correcto.playclip();
            }else{
                mensajeError("No te desanimes, intenta de nuevo");
                error.playclip();
            }
        }
    }
}







/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzle1LectoSastre(tipo){    
    if(tipo==1){//comprueba despues de colocar una pieza
        if(((document.getElementById('pieza3LectoAct1sastre').parentNode.id=='unoActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza3LectoAct1sastre').parentNode.id=='dosActividad1sastreLectoEscritura')) &&        
            
        ((document.getElementById('pieza1LectoAct1sastre').parentNode.id=='cincoActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza1LectoAct1sastre').parentNode.id=='seisActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza4LectoAct1sastre').parentNode.id=='cincoActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza4LectoAct1sastre').parentNode.id=='seisActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza16LectoAct1sastre').parentNode.id=='cincoActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza16LectoAct1sastre').parentNode.id=='seisActividad1sastreLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1sastre').parentNode.id=='diezActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sastre').parentNode.id=='diezActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1sastre').parentNode.id=='diezActividad1sastreLectoEscritura')) &&
                                
        ((document.getElementById('pieza2LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura')) &&
            
        ((document.getElementById('pieza1LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza4LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza16LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura'))                    
        ){
            mensajeGeneral('Muy bien… Recuerda que sin los signos de puntuación resulta dudoso y oscuro el significado de las frases.');
            correcto.playclip();
        }else{
            if(((document.getElementById('pieza15LectoAct1sastre').parentNode.id=='unoActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza17LectoAct1sastre').parentNode.id=='unoActividad1sastreLectoEscritura')) &&        
            
            ((document.getElementById('pieza9LectoAct1sastre').parentNode.id=='dosActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza11LectoAct1sastre').parentNode.id=='dosActividad1sastreLectoEscritura'))  &&        
                        
            ((document.getElementById('pieza10LectoAct1sastre').parentNode.id=='tresActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza12LectoAct1sastre').parentNode.id=='tresActividad1sastreLectoEscritura')) &&     
            
            ((document.getElementById('pieza7LectoAct1sastre').parentNode.id=='cuatroActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza13LectoAct1sastre').parentNode.id=='cuatroActividad1sastreLectoEscritura')) &&     
            
            ((document.getElementById('pieza8LectoAct1sastre').parentNode.id=='cincoActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza14LectoAct1sastre').parentNode.id=='cincoActividad1sastreLectoEscritura')) &&  
            
            ((document.getElementById('pieza9LectoAct1sastre').parentNode.id=='seisActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza11LectoAct1sastre').parentNode.id=='seisActividad1sastreLectoEscritura')) &&        
        
            ((document.getElementById('pieza10LectoAct1sastre').parentNode.id=='sieteActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza12LectoAct1sastre').parentNode.id=='sieteActividad1sastreLectoEscritura')) &&     
            
            ((document.getElementById('pieza7LectoAct1sastre').parentNode.id=='ochoActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza13LectoAct1sastre').parentNode.id=='ochoActividad1sastreLectoEscritura')) &&     
            
            ((document.getElementById('pieza15LectoAct1sastre').parentNode.id=='nueveActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza17LectoAct1sastre').parentNode.id=='nueveActividad1sastreLectoEscritura')) &&         
            
            ((document.getElementById('pieza8LectoAct1sastre').parentNode.id=='diezActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza14LectoAct1sastre').parentNode.id=='diezActividad1sastreLectoEscritura')) &&  
                                            
            ((document.getElementById('pieza2LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza5LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza6LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura')) &&
            
            ((document.getElementById('pieza1LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza4LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza16LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura')) &&
            
            ((document.getElementById('pieza2LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza5LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza6LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura'))                    
            ){
                mensajeGeneral('Muy bien… Recuerda que sin los signos de puntuación resulta dudoso y oscuro el significado de las frases.');
                correcto.playclip();
            }
        }    
    }else{
        if(((document.getElementById('pieza3LectoAct1sastre').parentNode.id=='unoActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza3LectoAct1sastre').parentNode.id=='dosActividad1sastreLectoEscritura')) &&        
            
        ((document.getElementById('pieza1LectoAct1sastre').parentNode.id=='cincoActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza1LectoAct1sastre').parentNode.id=='seisActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza4LectoAct1sastre').parentNode.id=='cincoActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza4LectoAct1sastre').parentNode.id=='seisActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza16LectoAct1sastre').parentNode.id=='cincoActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza16LectoAct1sastre').parentNode.id=='seisActividad1sastreLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1sastre').parentNode.id=='diezActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sastre').parentNode.id=='diezActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1sastre').parentNode.id=='diezActividad1sastreLectoEscritura')) &&
                                
        ((document.getElementById('pieza2LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura')) &&
            
        ((document.getElementById('pieza1LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza4LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza16LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura')) &&
            
        ((document.getElementById('pieza2LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura'))                    
        ){
            mensajeGeneral('Muy bien… Recuerda que sin los signos de puntuación resulta dudoso y oscuro el significado de las frases.');
            avanzar('lectoEscritura');
            correcto.playclip();
        }else{
            if(((document.getElementById('pieza15LectoAct1sastre').parentNode.id=='unoActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza17LectoAct1sastre').parentNode.id=='unoActividad1sastreLectoEscritura')) &&        
            
            ((document.getElementById('pieza9LectoAct1sastre').parentNode.id=='dosActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza11LectoAct1sastre').parentNode.id=='dosActividad1sastreLectoEscritura'))  &&        
                        
            ((document.getElementById('pieza10LectoAct1sastre').parentNode.id=='tresActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza12LectoAct1sastre').parentNode.id=='tresActividad1sastreLectoEscritura')) &&     
            
            ((document.getElementById('pieza7LectoAct1sastre').parentNode.id=='cuatroActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza13LectoAct1sastre').parentNode.id=='cuatroActividad1sastreLectoEscritura')) &&     
            
            ((document.getElementById('pieza8LectoAct1sastre').parentNode.id=='cincoActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza14LectoAct1sastre').parentNode.id=='cincoActividad1sastreLectoEscritura')) &&  
            
            ((document.getElementById('pieza9LectoAct1sastre').parentNode.id=='seisActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza11LectoAct1sastre').parentNode.id=='seisActividad1sastreLectoEscritura')) &&        
        
            ((document.getElementById('pieza10LectoAct1sastre').parentNode.id=='sieteActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza12LectoAct1sastre').parentNode.id=='sieteActividad1sastreLectoEscritura')) &&     
            
            ((document.getElementById('pieza7LectoAct1sastre').parentNode.id=='ochoActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza13LectoAct1sastre').parentNode.id=='ochoActividad1sastreLectoEscritura')) &&     
            
            ((document.getElementById('pieza15LectoAct1sastre').parentNode.id=='nueveActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza17LectoAct1sastre').parentNode.id=='nueveActividad1sastreLectoEscritura')) &&         
            
            ((document.getElementById('pieza8LectoAct1sastre').parentNode.id=='diezActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza14LectoAct1sastre').parentNode.id=='diezActividad1sastreLectoEscritura')) &&  
                                            
            ((document.getElementById('pieza2LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza5LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza6LectoAct1sastre').parentNode.id=='onceActividad1sastreLectoEscritura')) &&
            
            ((document.getElementById('pieza1LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza4LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza16LectoAct1sastre').parentNode.id=='doceActividad1sastreLectoEscritura')) &&
            
            ((document.getElementById('pieza2LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza5LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura') ||
                (document.getElementById('pieza6LectoAct1sastre').parentNode.id=='treceActividad1sastreLectoEscritura'))                    
            ){
                mensajeGeneral('Muy bien… Recuerda que sin los signos de puntuación resulta dudoso y oscuro el significado de las frases.');
                avanzar('lectoEscritura');
                correcto.playclip();
            }else{
                mensajeError("No te desanimes, intenta de nuevo");
                error.playclip();
            }
        } 
    }
}





/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzle1LectoEsposa(tipo){    
    if(tipo==1){//comprueba despues de colocar una pieza
        if(((document.getElementById('pieza3LectoAct1esposa').parentNode.id=='unoActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza3LectoAct1esposa').parentNode.id=='dosActividad1esposaLectoEscritura'))  &&        
                                    
        ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza1LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura') ||            
            (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura'))  &&
                                    
        ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||            
            (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||                        
            (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura'))  &&
            
        ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura') ||            
            (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura') ||                        
            (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura')) &&
                
        ((document.getElementById('pieza2LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza15LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura')) &&
                                
        ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||            
            (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||                        
            (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura')) &&                 
                                                                                                
        ((document.getElementById('pieza2LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza15LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura')) 
                                
        ){
            mensajeGeneral('Muy bien… Recuerda que la puntuación no sólo sirve para reproducir la entonación de la lengua hablada, sino que es un elemento fundamental para estructurar textos y hacerlos inteligibles al receptor.');
            correcto.playclip();
        }else{
            if(((document.getElementById('pieza16LectoAct1esposa').parentNode.id=='unoActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza18LectoAct1esposa').parentNode.id=='unoActividad1esposaLectoEscritura'))  &&        
                
            ((document.getElementById('pieza11LectoAct1esposa').parentNode.id=='dosActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza13LectoAct1esposa').parentNode.id=='dosActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza20LectoAct1esposa').parentNode.id=='dosActividad1esposaLectoEscritura'))  &&        
            
            ((document.getElementById('pieza12LectoAct1esposa').parentNode.id=='tresActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza14LectoAct1esposa').parentNode.id=='tresActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza21LectoAct1esposa').parentNode.id=='tresActividad1esposaLectoEscritura'))   &&   
                
            ((document.getElementById('pieza7LectoAct1esposa').parentNode.id=='cuatroActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza9LectoAct1esposa').parentNode.id=='cuatroActividad1esposaLectoEscritura'))   &&   
                                
            ((document.getElementById('pieza8LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza10LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura'))  &&   
            
            ((document.getElementById('pieza11LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza13LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza20LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura'))  &&        
            
            ((document.getElementById('pieza12LectoAct1esposa').parentNode.id=='sieteActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza14LectoAct1esposa').parentNode.id=='sieteActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza21LectoAct1esposa').parentNode.id=='sieteActividad1esposaLectoEscritura')) &&   
            
            ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||            
                (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||                        
                (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura'))  &&
            
            ((document.getElementById('pieza11LectoAct1esposa').parentNode.id=='diezActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza13LectoAct1esposa').parentNode.id=='diezActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza20LectoAct1esposa').parentNode.id=='diezActividad1esposaLectoEscritura'))  &&        
                
            ((document.getElementById('pieza12LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza14LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza21LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura'))  &&   
                
            ((document.getElementById('pieza7LectoAct1esposa').parentNode.id=='onceonceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza9LectoAct1esposa').parentNode.id=='onceonceActividad1esposaLectoEscritura'))  &&   
                  
            ((document.getElementById('pieza8LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza10LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura'))  &&   
                                            
            ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||            
                (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||                        
                (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura')) &&                 
                                                                                                
            ((document.getElementById('pieza2LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza5LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza6LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza15LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura'))  
                                
            ){
                mensajeGeneral('Muy bien… Recuerda que la puntuación no sólo sirve para reproducir la entonación de la lengua hablada, sino que es un elemento fundamental para estructurar textos y hacerlos inteligibles al receptor.');
                correcto.playclip();
            }
        }
    }else{
        if(((document.getElementById('pieza3LectoAct1esposa').parentNode.id=='unoActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza3LectoAct1esposa').parentNode.id=='dosActividad1esposaLectoEscritura'))  &&        
                                    
        ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza1LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura') ||            
            (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura'))  &&
                                    
        ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||            
            (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||                        
            (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura'))  &&
            
        ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura') ||            
            (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura') ||                        
            (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura')) &&
                
        ((document.getElementById('pieza2LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza15LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura')) &&
                                
        ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||            
            (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||                        
            (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura')) &&                 
                                                                                                
        ((document.getElementById('pieza2LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza5LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
            (document.getElementById('pieza15LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura')) 
                                
        ){
            mensajeGeneral('Muy bien… Recuerda que la puntuación no sólo sirve para reproducir la entonación de la lengua hablada, sino que es un elemento fundamental para estructurar textos y hacerlos inteligibles al receptor.');
            avanzar('lectoEscritura');
            correcto.playclip();
        }else{
            if(((document.getElementById('pieza16LectoAct1esposa').parentNode.id=='unoActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza18LectoAct1esposa').parentNode.id=='unoActividad1esposaLectoEscritura'))  &&        
                
            ((document.getElementById('pieza11LectoAct1esposa').parentNode.id=='dosActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza13LectoAct1esposa').parentNode.id=='dosActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza20LectoAct1esposa').parentNode.id=='dosActividad1esposaLectoEscritura'))  &&        
            
            ((document.getElementById('pieza12LectoAct1esposa').parentNode.id=='tresActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza14LectoAct1esposa').parentNode.id=='tresActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza21LectoAct1esposa').parentNode.id=='tresActividad1esposaLectoEscritura'))   &&   
                
            ((document.getElementById('pieza7LectoAct1esposa').parentNode.id=='cuatroActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza9LectoAct1esposa').parentNode.id=='cuatroActividad1esposaLectoEscritura'))   &&   
                                
            ((document.getElementById('pieza8LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza10LectoAct1esposa').parentNode.id=='cincoActividad1esposaLectoEscritura'))  &&   
            
            ((document.getElementById('pieza11LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza13LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza20LectoAct1esposa').parentNode.id=='seisActividad1esposaLectoEscritura'))  &&        
            
            ((document.getElementById('pieza12LectoAct1esposa').parentNode.id=='sieteActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza14LectoAct1esposa').parentNode.id=='sieteActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza21LectoAct1esposa').parentNode.id=='sieteActividad1esposaLectoEscritura')) &&   
            
            ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||            
                (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||                        
                (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='nueveActividad1esposaLectoEscritura'))  &&
            
            ((document.getElementById('pieza11LectoAct1esposa').parentNode.id=='diezActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza13LectoAct1esposa').parentNode.id=='diezActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza20LectoAct1esposa').parentNode.id=='diezActividad1esposaLectoEscritura'))  &&        
                
            ((document.getElementById('pieza12LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza14LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza21LectoAct1esposa').parentNode.id=='onceActividad1esposaLectoEscritura'))  &&   
                
            ((document.getElementById('pieza7LectoAct1esposa').parentNode.id=='onceonceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza9LectoAct1esposa').parentNode.id=='onceonceActividad1esposaLectoEscritura'))  &&   
                  
            ((document.getElementById('pieza8LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza10LectoAct1esposa').parentNode.id=='doceActividad1esposaLectoEscritura'))  &&   
                                            
            ((document.getElementById('pieza1LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||            
                (document.getElementById('pieza4LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||                        
                (document.getElementById('pieza17LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza19LectoAct1esposa').parentNode.id=='treceActividad1esposaLectoEscritura')) &&                 
                                                                                                
            ((document.getElementById('pieza2LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza5LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza6LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura') ||
                (document.getElementById('pieza15LectoAct1esposa').parentNode.id=='catorceActividad1esposaLectoEscritura'))  
                                
            ){
                mensajeGeneral('Muy bien… Recuerda que la puntuación no sólo sirve para reproducir la entonación de la lengua hablada, sino que es un elemento fundamental para estructurar textos y hacerlos inteligibles al receptor.');
                avanzar('lectoEscritura');
                correcto.playclip();
            }else{
                mensajeError("No te desanimes, intenta de nuevo");
                error.playclip();
            }
        }
    }    
}










/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzle1LectoCunado(tipo){    
    if(tipo==1){//comprueba despues de colocar una pieza
        if(((document.getElementById('pieza1LectoAct1cunado').parentNode.id=='unoActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza1LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza23LectoAct1cunado').parentNode.id=='unoActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza23LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura'))  &&        
                                    
        ((document.getElementById('pieza2LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza3LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza5LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza10LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura'))  &&
                                   
        ((document.getElementById('pieza2LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza3LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza5LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza10LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura'))  &&
            
        ((document.getElementById('pieza4LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza9LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza22LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura'))  &&
            
            
        ((document.getElementById('pieza2LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza3LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza5LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza10LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura'))  &&
            
        ((document.getElementById('pieza4LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza9LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza22LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura'))  &&
            
        ((document.getElementById('pieza7LectoAct1cunado').parentNode.id=='doceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza20LectoAct1cunado').parentNode.id=='doceActividad1cunadoLectoEscritura'))  &&
            
        ((document.getElementById('pieza8LectoAct1cunado').parentNode.id=='treceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza21LectoAct1cunado').parentNode.id=='treceActividad1cunadoLectoEscritura'))  &&
            
        ((document.getElementById('pieza4LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza9LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza22LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura')) 
                                
        ){
            mensajeGeneral('Muy bien… Recuerda que al omitirse los signos de puntuación, la lectura y la comprensión se hacen muy difíciles.');
            correcto.playclip();
        }else{
            if(((document.getElementById('pieza1LectoAct1cunado').parentNode.id=='unoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza23LectoAct1cunado').parentNode.id=='unoActividad1cunadoLectoEscritura'))  &&        
                
            ((document.getElementById('pieza11LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza13LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza15LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza17LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura'))  &&
                
            ((document.getElementById('pieza12LectoAct1cunado').parentNode.id=='tresActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza14LectoAct1cunado').parentNode.id=='tresActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza16LectoAct1cunado').parentNode.id=='tresActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza18LectoAct1cunado').parentNode.id=='tresActividad1cunadoLectoEscritura'))  &&
                
                
            ((document.getElementById('pieza11LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza13LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza15LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza17LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza12LectoAct1cunado').parentNode.id=='cincoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza14LectoAct1cunado').parentNode.id=='cincoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza16LectoAct1cunado').parentNode.id=='cincoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza18LectoAct1cunado').parentNode.id=='cincoActividad1cunadoLectoEscritura'))  &&
                                                                   
            ((document.getElementById('pieza2LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza3LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||            
                (document.getElementById('pieza5LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||            
                (document.getElementById('pieza10LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza11LectoAct1cunado').parentNode.id=='sieteActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza13LectoAct1cunado').parentNode.id=='sieteActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza15LectoAct1cunado').parentNode.id=='sieteActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza17LectoAct1cunado').parentNode.id=='sieteActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza12LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza14LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza16LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza18LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza11LectoAct1cunado').parentNode.id=='nueveActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza13LectoAct1cunado').parentNode.id=='nueveActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza15LectoAct1cunado').parentNode.id=='nueveActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza17LectoAct1cunado').parentNode.id=='nueveActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza12LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza14LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza16LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza18LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza4LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza6LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||            
                (document.getElementById('pieza9LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza19LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza22LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza7LectoAct1cunado').parentNode.id=='doceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza20LectoAct1cunado').parentNode.id=='doceActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza8LectoAct1cunado').parentNode.id=='treceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza21LectoAct1cunado').parentNode.id=='treceActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza4LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza6LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||            
                (document.getElementById('pieza9LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza19LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza22LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura')) 
                                
            ){
                mensajeGeneral('Muy bien… Recuerda que al omitirse los signos de puntuación, la lectura y la comprensión se hacen muy difíciles.');                
                correcto.playclip();
            }
        }
    }else{
        if(((document.getElementById('pieza1LectoAct1cunado').parentNode.id=='unoActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza1LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza23LectoAct1cunado').parentNode.id=='unoActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza23LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura'))  &&        
                                    
        ((document.getElementById('pieza2LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza3LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza5LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza10LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura'))  &&
                                   
        ((document.getElementById('pieza2LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza3LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza5LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza10LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura'))  &&
            
        ((document.getElementById('pieza4LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza9LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza22LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura'))  &&
            
            
        ((document.getElementById('pieza2LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza3LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza5LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza10LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura'))  &&
            
        ((document.getElementById('pieza4LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza9LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza22LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura'))  &&
            
        ((document.getElementById('pieza7LectoAct1cunado').parentNode.id=='doceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza20LectoAct1cunado').parentNode.id=='doceActividad1cunadoLectoEscritura'))  &&
            
        ((document.getElementById('pieza8LectoAct1cunado').parentNode.id=='treceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza21LectoAct1cunado').parentNode.id=='treceActividad1cunadoLectoEscritura'))  &&
            
        ((document.getElementById('pieza4LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza6LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||            
            (document.getElementById('pieza9LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza19LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
            (document.getElementById('pieza22LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura')) 
                                
        ){
            mensajeGeneral('Muy bien… Recuerda que al omitirse los signos de puntuación, la lectura y la comprensión se hacen muy difíciles.');
            avanzar('lectoEscritura');
            correcto.playclip();
        }else{
            if(((document.getElementById('pieza1LectoAct1cunado').parentNode.id=='unoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza23LectoAct1cunado').parentNode.id=='unoActividad1cunadoLectoEscritura'))  &&        
                
            ((document.getElementById('pieza11LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza13LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza15LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza17LectoAct1cunado').parentNode.id=='dosActividad1cunadoLectoEscritura'))  &&
                
            ((document.getElementById('pieza12LectoAct1cunado').parentNode.id=='tresActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza14LectoAct1cunado').parentNode.id=='tresActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza16LectoAct1cunado').parentNode.id=='tresActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza18LectoAct1cunado').parentNode.id=='tresActividad1cunadoLectoEscritura'))  &&
                
                
            ((document.getElementById('pieza11LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza13LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza15LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza17LectoAct1cunado').parentNode.id=='cuatroActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza12LectoAct1cunado').parentNode.id=='cincoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza14LectoAct1cunado').parentNode.id=='cincoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza16LectoAct1cunado').parentNode.id=='cincoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza18LectoAct1cunado').parentNode.id=='cincoActividad1cunadoLectoEscritura'))  &&
                                                                   
            ((document.getElementById('pieza2LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza3LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||            
                (document.getElementById('pieza5LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura') ||            
                (document.getElementById('pieza10LectoAct1cunado').parentNode.id=='seisActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza11LectoAct1cunado').parentNode.id=='sieteActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza13LectoAct1cunado').parentNode.id=='sieteActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza15LectoAct1cunado').parentNode.id=='sieteActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza17LectoAct1cunado').parentNode.id=='sieteActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza12LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza14LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza16LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza18LectoAct1cunado').parentNode.id=='ochoActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza11LectoAct1cunado').parentNode.id=='nueveActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza13LectoAct1cunado').parentNode.id=='nueveActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza15LectoAct1cunado').parentNode.id=='nueveActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza17LectoAct1cunado').parentNode.id=='nueveActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza12LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza14LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza16LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura') ||                
                (document.getElementById('pieza18LectoAct1cunado').parentNode.id=='diezActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza4LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza6LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||            
                (document.getElementById('pieza9LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza19LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza22LectoAct1cunado').parentNode.id=='onceActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza7LectoAct1cunado').parentNode.id=='doceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza20LectoAct1cunado').parentNode.id=='doceActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza8LectoAct1cunado').parentNode.id=='treceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza21LectoAct1cunado').parentNode.id=='treceActividad1cunadoLectoEscritura'))  &&
            
            ((document.getElementById('pieza4LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza6LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||            
                (document.getElementById('pieza9LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza19LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura') ||
                (document.getElementById('pieza22LectoAct1cunado').parentNode.id=='catorceActividad1cunadoLectoEscritura')) 
                                
            ){
                mensajeGeneral('Muy bien… Recuerda que al omitirse los signos de puntuación, la lectura y la comprensión se hacen muy difíciles.');
                avanzar('lectoEscritura');
                correcto.playclip();
            }else{
                mensajeError("No te desanimes, intenta de nuevo");
                error.playclip(); 
            }
        }
    }
}








/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzle2LectoPar1(tipo){    
    
    if(tipo==1){//comprueba despues de colocar una pieza
        if((document.getElementById('pieza2LectoAct2Par1').parentNode.id=='unoActividad2LectoPar1')  &&
            (document.getElementById('pieza5LectoAct2Par1').parentNode.id=='dosActividad2LectoPar1') &&
            (document.getElementById('pieza4LectoAct2Par1').parentNode.id=='tresActividad2LectoPar1') &&
            (document.getElementById('pieza1LectoAct2Par1').parentNode.id=='cuatroActividad2LectoPar1') &&
            (document.getElementById('pieza3LectoAct2Par1').parentNode.id=='cincoActividad2LectoPar1')
                                   
                                        
            ){
            mensajeGeneral('Felicitaciones has acertado y recuera que los signos de puntuación, nos ayudan a cohesionar párrafos y textos.');
            correcto.playclip();
        }
    }else{
        if((document.getElementById('pieza2LectoAct2Par1').parentNode.id=='unoActividad2LectoPar1')  &&
            (document.getElementById('pieza5LectoAct2Par1').parentNode.id=='dosActividad2LectoPar1') &&
            (document.getElementById('pieza4LectoAct2Par1').parentNode.id=='tresActividad2LectoPar1') &&
            (document.getElementById('pieza1LectoAct2Par1').parentNode.id=='cuatroActividad2LectoPar1') &&
            (document.getElementById('pieza3LectoAct2Par1').parentNode.id=='cincoActividad2LectoPar1')                                                                           
            ){
            mensajeGeneral('Felicitaciones has acertado y recuera que los signos de puntuación, nos ayudan a cohesionar párrafos y textos.');
            avanzar('lectoEscritura');
            correcto.playclip();
        }else{
            mensajeError("No te desanimes, intenta de nuevo.");
            error.playclip(); 
        }
    }
}




/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzle2LectoPar2(tipo){    
    
    if(tipo==1){//comprueba despues de colocar una pieza
        if((document.getElementById('pieza2LectoAct2Par2').parentNode.id=='unoActividad2LectoPar2')  &&
            (document.getElementById('pieza1LectoAct2Par2').parentNode.id=='dosActividad2LectoPar2')                                                                            
            ){
            mensajeGeneral('Muy bien… recuerda que entender un texto significa entender su estructura interna.');
            correcto.playclip();
        }
    }else{
        if((document.getElementById('pieza2LectoAct2Par2').parentNode.id=='unoActividad2LectoPar2')  &&
            (document.getElementById('pieza1LectoAct2Par2').parentNode.id=='dosActividad2LectoPar2')                                                                            
            ){
            
            mensajeGeneral('Muy bien… recuerda que entender un texto significa entender su estructura interna.');
            avanzar('lectoEscritura');
            correcto.playclip();
        }else{
            mensajeError("No te desanimes, intenta de nuevo.");
            error.playclip(); 
        }
    }
}



/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzle2LectoPar3(tipo){    
    
    if(tipo==1){//comprueba despues de colocar una pieza
        if((document.getElementById('pieza1LectoAct2Par3').parentNode.id=='unoActividad2LectoPar3')  &&
            (document.getElementById('pieza2LectoAct2Par3').parentNode.id=='dosActividad2LectoPar3')                                                                            
            ){
            mensajeGeneral('Muy bien… recuerda que entender un texto significa entender su estructura interna.');
            correcto.playclip();
        }
    }else{
        if((document.getElementById('pieza1LectoAct2Par3').parentNode.id=='unoActividad2LectoPar3')  &&
            (document.getElementById('pieza2LectoAct2Par3').parentNode.id=='dosActividad2LectoPar3')                                                                            
            ){
            
            mensajeGeneral('Muy bien… recuerda que entender un texto significa entender su estructura interna.');
            avanzar('lectoEscritura');
            correcto.playclip();
        }else{
            mensajeError("No te desanimes, intenta de nuevo.");
            error.playclip(); 
        }
    }
}




/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzle2LectoPar4(tipo){    
    
    if(tipo==1){//comprueba despues de colocar una pieza
        if((document.getElementById('pieza2LectoAct2Par4').parentNode.id=='unoActividad2LectoPar4')  &&
            (document.getElementById('pieza4LectoAct2Par4').parentNode.id=='dosActividad2LectoPar4') &&
            (document.getElementById('pieza1LectoAct2Par4').parentNode.id=='tresActividad2LectoPar4') &&
            (document.getElementById('pieza3LectoAct2Par4').parentNode.id=='cuatroActividad2LectoPar4') 
        
        
            ){
            mensajeGeneral('Muy bien… recuerda que entender el significado de las expresiones de enlace permite entender la intención comunicativa.');
            correcto.playclip();
        }
    }else{
        if((document.getElementById('pieza2LectoAct2Par4').parentNode.id=='unoActividad2LectoPar4')  &&
            (document.getElementById('pieza4LectoAct2Par4').parentNode.id=='dosActividad2LectoPar4') &&
            (document.getElementById('pieza1LectoAct2Par4').parentNode.id=='tresActividad2LectoPar4') &&
            (document.getElementById('pieza3LectoAct2Par4').parentNode.id=='cuatroActividad2LectoPar4')                 
            ){
            mensajeGeneral('Muy bien… recuerda que entender el significado de las expresiones de enlace permite entender la intención comunicativa.');
            avanzar('lectoEscritura');
            correcto.playclip();
        }else{
            mensajeError("No te desanimes, intenta de nuevo.");
            error.playclip();  
        }
    }
}

