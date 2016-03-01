<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <!--JAVASCRIPTS PROPIOS DE LA OVA-->
        <script type="text/javascript" src="Vista/js/ovaNavegacion.js"></script>  
        <script type="text/javascript" src="Vista/js/efectos/dragAndDrop.js"></script>          

        <title></title>      
    </head>
    <body>




        <!--OVA DIVISION CELULAR-->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->

        <!--PRIMER NIVEL-->
        <div style="display: none;">
            <div id="div1lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">INFORMACIÓN OVA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('lectoEscritura'); clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="1" class="alineacionIzquierda">
                                <label class="subtituloDorado">TÍTULO:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Lectoescritura</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">DESCRIPCIÓN:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"></label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Palabras clave:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Lectura, escritura, comprensión, producción</label>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Idioma:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Español</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Autor:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Verónica Arias Arias</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Entidad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Universidad de Caldas</label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                <label class="titulo">PROCESOS FORMATIVOS</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Tipo:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Auto aprendizaje.</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Tipo <br/> Interactividad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"> 
                                    &nbsp;&nbsp;&nbsp;*Activa (para los contenidos interactivos)<br/>
                                    &nbsp;&nbsp;&nbsp;*Expositiva <br/>
                                    &nbsp;&nbsp;&nbsp;*Mixto</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Recurso:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Es de distintos tipos: ejercicio,texto y autoevaluación.</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Nivel <br/> Interactividad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Medio</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Población:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Estudiantes universitarios</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Contexto:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Educación superior</label>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--SEGUNDO NIVEL-->
        <div style="display: none;">
            <div id="div2lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">BIENVENIDO</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   

                        <tr>
                            <td>
                                <audio id="audio1Lectoescritura" preload="none">
<!--                                    <source src="Vista/audio/lectoescritura/Track1.mp3">-->
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLectoEscritura/Vista/audio/lectoescritura/Track1.mp3">

                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3">
                                <img id="avatarBienvenidaCelula" src="Vista/imagenes/universo/lectoEscritura/avatarNube.png" class="avatar"/>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--TERCER NIVEL-->
        <div style="display: none;">
            <div id="div3lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">OBJETIVOS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtituloDorado">
                                    General:
                                </label>
                            </td>
                        </tr>

                        <tr>                            
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    &nbsp;&nbsp;&nbsp;* Conocer  y aplicar los elementos básicos de las estructuras gramaticales esenciales para el adecuado uso del lenguaje en la producción y comprensión de textos.<br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtituloDorado">
                                    Específicos:
                                </label>
                            </td>
                        </tr>

                        <tr>                            
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    &nbsp;&nbsp;&nbsp;* Reconocer la importancia del uso adecuado de los signos de puntuación y aplicarlos correctamente en la escritura y corrección de textos.<br/>
                                    &nbsp;&nbsp;&nbsp;* Aplicar mecanismos de legitimación de la interpretación de lectura, para aplicarla en diversos tipos de textos.<br/>
                                    &nbsp;&nbsp;&nbsp;* Descubrir las relaciones internas de los textos.<br/>
                                    &nbsp;&nbsp;&nbsp;* Identificar las condiciones contextuales (relaciones externas) de los textos.<br/>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--CUARTO NIVEL-->
        <div style="display: none;">
            <div id="div4lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">¿Qué sabes del tema?</span><br/>                                
                            </td>    
                            <td>
                                <img onclick="calificarPreguntaLectoEscritura(1);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">1. Las expresiones de enlace tienen como función: </label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="test1LectoEscritura" value="1">

                                            <label class="texto">A. Denotar el significado de la expresión por sí sola.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="test1LectoEscritura" value="2">
                                            <label class="texto">B. Mostrar la relación que inicia aclaración.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="test1LectoEscritura" value="3">
                                            <label class="texto">C. Estructurar y darle coherencia lógica al discurso.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="test1LectoEscritura" value="4">
                                            <label class="texto">D. Acompañar y darle coherencia a los signos de puntuación como signos semánticos.</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--CUARTO NIVEL-->
        <div style="display: none;">
            <div id="div5lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEMA # 1: SIGNOS DE PUNTUACIÓN COMO MARCADORES SEMÁNTICOS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>  

                        <tr>
                            <td>
                                <audio id="audio2Lectoescritura" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLectoEscritura/Vista/audio/lectoescritura/Track2.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <label class="subtitulo">¿Serán importantes los signos de puntuación en los procesos de comprensión lectora y de producción textual?</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro fondo01" style="width: 1000px;height: 200px">
                                <label class="texto texto1Secuencia1">
                                    El modo natural 
                                </label>

                                <label class="texto texto2Secuencia1">
                                    de comunicación es la 
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">lengua hablada </label>
                                        <span class="custom info">Lengua hablada: Es usada por todos los hablantes en cualquier nivel sociocultural. Se adquiere de modo natural como Lengua Materna. 
                                        </span>
                                    </a>
                                </label>

                                <label class="texto texto3Secuencia1">
                                    sin embargo la 
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">escritura </label>
                                        <span class="custom info"> Escritura: Sistema de signos <br/>
                                            utilizado para escribir. <br/>
                                            http://diccionario.terra.com.pe/cgi-bin/b.pl
                                        </span>
                                    </a>

                                    sustituye al lenguaje oral.                                                                         
                                </label>

                                <br/>

                                <label class="texto texto4Secuencia1">

                                    Con la

                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">escritura </label>
                                        <span class="custom info"> Escritura: Sistema de signos <br/> utilizado para escribir. <br/>
                                            http://diccionario.terra.com.pe/cgi-bin/b.pl
                                        </span>
                                    </a>

                                    se representa la

                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">lengua hablada; </label>
                                        <span class="custom info">Lengua hablada: Es usada por todos los hablantes en cualquier nivel sociocultural. Se adquiere de modo natural como Lengua Materna. 
                                        </span>
                                    </a>

                                    por ello a través de la

                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">ortografía </label>
                                        <span class="custom info">Lengua hablada: Es usada  <br/>
                                            por todos los hablantes en <br/>
                                            cualquier nivel sociocultural.<br/>
                                            Se adquiere de modo natural <br/>
                                            como Lengua Materna. <br/>
                                            http://diccionario.terra.com.pe/cgi-bin/b.pl
                                        </span>
                                    </a>

                                    logras…

                                </label>                                                       
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/universo/lectoEscritura/cuadroExplicativo01.png"
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionDerecha">
                                <label class="texto">
                                    Extraído y adaptado de Jesús Sánchez Lobato (coord.): “Saber escribir”. Editorial: Aguilar. Instituto Cervantes 2006
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--QUINTO NIVEL-->
        <div style="display: none;">
            <div id="div6lectoEscritura" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Logras...</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    

                        <tr>
                            <td>
                                <audio id="audio3Lectoescritura" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLectoEscritura/Vista/audio/lectoescritura/Track3.mp3">
                                </audio>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3" class="alineacionCentro" >
                                <table border="0" width="100%" class="estiloTabla">
                                    <tr>
                                        <td>

                                        </td>

                                        <td>
                                            <img src="Vista/imagenes/secuenciacion/lectoEscritura/ejemplo.png">
                                        </td>

                                        <td>
                                            <img src="Vista/imagenes/secuenciacion/lectoEscritura/definicion.png">
                                        </td>

                                        <td style="width: 100px">

                                        </td>
                                    </tr>       


                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/secuenciacion/lectoEscritura/transcribir.png">
                                        </td>

                                        <td>
                                            <img class="efectoAumento transcribirDefinicion" src="Vista/imagenes/secuenciacion/lectoEscritura/transcribirDefinicion.png">
                                        </td>

                                        <td>
                                            <img class="efectoAumento transcribirEjemplo" src="Vista/imagenes/secuenciacion/lectoEscritura/transcribirEjemplo.png">
                                        </td>
                                    </tr>      


                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/secuenciacion/lectoEscritura/acentuar.png">
                                        </td>

                                        <td>
                                            <img class="efectoAumento acentuarDefinicion" src="Vista/imagenes/secuenciacion/lectoEscritura/acentuarDefinicion.png">
                                        </td>

                                        <td>
                                            <img class="efectoAumento acentuarEjemplo" src="Vista/imagenes/secuenciacion/lectoEscritura/acentuarEjemplo.png">
                                        </td>
                                    </tr>      


                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/secuenciacion/lectoEscritura/reproducir.png">
                                        </td>

                                        <td>
                                            <img class="efectoAumento reproducirDefinicion" src="Vista/imagenes/secuenciacion/lectoEscritura/reproducirDefinicion.png">
                                        </td>

                                        <td>
                                            <img class="efectoAumento reproducirEjemplo" src="Vista/imagenes/secuenciacion/lectoEscritura/reproducirEjemplo.png">
                                        </td>
                                    </tr>    


                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/secuenciacion/lectoEscritura/distinguir.png">
                                        </td>

                                        <td>
                                            <img class="efectoAumento distinguirDefinicion" src="Vista/imagenes/secuenciacion/lectoEscritura/distinguirDefinicion.png">
                                        </td>

                                        <td>
                                            <img class="efectoAumento distinguirEjemplo" src="Vista/imagenes/secuenciacion/lectoEscritura/distinguirEjemplo.png">
                                        </td>
                                    </tr>    

                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--SEXTO NIVEL-->
        <div style="display: none;">
            <div id="div7lectoEscritura" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">PRINCIPALES SIGNOS DE PUNTUACIÓN</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     
                        <tr>
                            <td class="alineacionIzquierda">
                                <a class="tooltip" href="#">
                                    <label class="subtitulo">Tomado de</label>
                                    <span class="custom info"> 
                                        1. http://www.rae.es/rae/Noticias.nsf<br/>/Portada3?ReadForm&menu=3<br/>
                                        2. http://www.rae.es/dpd/srv/search?id=qXGSxldBKD6hqrTMMo<br/>
                                        3. http://www.rae.es/rae/gestores/<br/>gespub000039.nsf/(voanexos)/<br/>arch6947C6DBCDECF191C125780<br/>
                                        4. 0004EF7D9/$FILE/InteriorOrtografia.pdf<br/>
                                    </span>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <table  style="width: 100%">
                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/simples.png">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/dobles.png">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/otros.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/1.png" class="efectoAumento" onclick="abrirSubTema('7-1');">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/7.png" class="efectoAumento" onclick="abrirSubTema('7-7');">
                                        </td>

                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/16.png" class="efectoAumento" onclick="abrirSubTema('7-16');">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/2.png" class="efectoAumento" onclick="abrirSubTema('7-2');">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/8.png" class="efectoAumento" onclick="abrirSubTema('7-8');">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/17.png" class="efectoAumento" onclick="abrirSubTema('7-17');">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/3.png" class="efectoAumento" onclick="abrirSubTema('7-3');">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/9.png" class="efectoAumento" onclick="abrirSubTema('7-9');">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/18.png" class="efectoAumento" onclick="abrirSubTema('7-18');">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/4.png" class="efectoAumento" onclick="abrirSubTema('7-4');">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/10.png" class="efectoAumento" onclick="abrirSubTema('7-10');">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/19.png" class="efectoAumento" onclick="abrirSubTema('7-19');">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/5.png" class="efectoAumento" onclick="abrirSubTema('7-5');">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/11.png" class="efectoAumento" onclick="abrirSubTema('7-11');">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/6.png" class="efectoAumento" onclick="abrirSubTema('7-6');">
                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/12.png" class="efectoAumento" onclick="abrirSubTema('7-12');">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/13.png" class="efectoAumento" onclick="abrirSubTema('7-13');">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/14.png" class="efectoAumento" onclick="abrirSubTema('7-14');">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacion/15.png" class="efectoAumento" onclick="abrirSubTema('7-15');">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>






                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-1lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Punto seguido/aparte
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/punto.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-2lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Coma
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/coma.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-3lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Punto y coma
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/puntoycoma.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-4lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Dos puntos
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/dospuntos.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-5lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Puntos suspensivos
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/suspensivos.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-6lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Guión
                                    menor/silábico

                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/linea.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-7lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Signos de interrogación
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/interrogacion.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-8lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Signos de exclamación
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/exclamacion.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-9lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Paréntesis
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/parentesis.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-10lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Corchetes
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/corchetes.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-11lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Raya simple/doble
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/rayasimpledoble.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-12lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Comillas angulares dobles simples
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/comillas.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-13lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Punto y raya
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/rayaypunto.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-14lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Doble raya
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/igual.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-15lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Paréntesis cuadrado o guiones inclinados
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/dosbarras.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-16lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Diéresis
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/diactrico.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-17lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Barra
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/barrasola.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-18lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Llaves
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/llaves.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7-19lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td class="alineacionCentro">
                                <label class="titulo">
                                    Asterisco
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/reglaEjemplo.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/lectoEscritura/signosPuntuacionTextos/asterisco.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="efectoAumento" onclick="abrirTema(7,'lectoEscritura')" src="Vista/imagenes/otros/regresar.png">
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div8lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>


                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD # 1</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3">
                                <label class="texto">
                                    Realiza la copia que beneficia a cada uno de los interesados: para ello debes adicionar los signos de puntuación que hacen falta. <br/>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/universo/lectoEscritura/actividad01.png" class="imagenOvaSinEfecto">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionDerecha">
                                <label class="texto">
                                    Extraído y adaptado de L. García: “Lectoescritura práctica”. Editorial: Universidad de Caldas. 2002
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>


                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">HIJO</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzle1LectoHijo(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img class="imagenOva" src="Vista/imagenes/juegos/lectoEscritura/actividad01/hijo.png">
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <table class="texto">
                                    <tr>
                                        <td class="alineacionJustificafa">
                                            <table>
                                                <td>
                                                    “Yo dejo mis bienes 
                                                </td>

                                                <td>
                                                    <div class="contenedorPieza" id="unoActividad1hijoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,1)">                                                
                                                    </div>  
                                                </td>

                                                <td>
                                                    <div class="contenedorPieza" id="unounoActividad1hijoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,1)"></div>  
                                                </td>

                                                <td>
                                                    a mi hijo
                                                </td>

                                                <td>
                                                    <div class="contenedorPieza" id="dosActividad1hijoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,1)"></div>  
                                                </td>


                                                <td>
                                                    No a mi sobrino 
                                                </td>

                                                <td>
                                                    <div class="contenedorPieza" id="tresActividad1hijoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,1)"></div>  
                                                </td>

                                                <td>
                                                    tampoco nunca se pagará la cuenta del sastre
                                                </td>

                                                <td>
                                                    <div class="contenedorPieza" id="cuatroActividad1hijoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,1)"></div>  
                                                </td>
                                            </table>
                                        </td>                                      
                                    </tr>

                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        No dejo mis bienes a mi esposa
                                                    </td>    
                                                    <td>
                                                        <div class="contenedorPieza" id="cincoActividad1hijoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,1)"></div>  
                                                    </td>

                                                    <td>
                                                        no a mi cuñado”
                                                    </td>

                                                    <td>
                                                        <div class="contenedorPieza" id="seisActividad1hijoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,1)"></div>  
                                                    </td>  
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="1">
                                            <br/><br/>
                                            Que mis deseos sean órdenes. Facundo Fonseca.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="13" class="alineacionCentro">
                                            <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,1)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LectoAct1hijo" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza1LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LectoAct1hijo" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza2LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3LectoAct1hijo" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza3LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4LectoAct1hijo" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza4LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5LectoAct1hijo" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza5LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6LectoAct1hijo" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracionabre.png" alt="pieza6LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7LectoAct1hijo" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracioncierra.png" alt="pieza7LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8LectoAct1hijo" src="Vista/imagenes/juegos/lectoEscritura/actividad01/dospuntos.png" alt="pieza8LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza9LectoAct1hijo" src="Vista/imagenes/juegos/lectoEscritura/actividad01/puntocoma.png" alt="pieza9LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div10lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">SOBRINO</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzle1LectoSobrino(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img class="imagenOva" src="Vista/imagenes/juegos/lectoEscritura/actividad01/sobrino.png">
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <table class="texto">
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        “Yo dejo mis bienes 
                                                    </td>

                                                    <td>
                                                        <div class="contenedorPieza" id="unoActividad1sobrinoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,2)">                                                
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="contenedorPieza" id="dosActividad1sobrinoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,2)">                                                
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        a mi hijo  
                                                    </td>

                                                    <td>
                                                        <div class="contenedorPieza" id="tresActividad1sobrinoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,2)"></div>  
                                                    </td>

                                                    <td>
                                                        <div class="contenedorPieza" id="cuatroActividad1sobrinoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,2)"></div>  
                                                    </td>


                                                    <td>
                                                        no
                                                    </td>


                                                    <td>
                                                        <div class="contenedorPieza" id="cincoActividad1sobrinoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,2)"></div>  
                                                    </td>


                                                    <td>
                                                        a mi sobrino 
                                                    </td>

                                                    <td>
                                                        <div class="contenedorPieza" id="seisActividad1sobrinoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,2)"></div>  
                                                    </td>

                                                    <td>
                                                        Tampoco nunca se pagará la cuenta del sastre 
                                                    </td>
                                                    <td>
                                                        <div class="contenedorPieza" id="sieteActividad1sobrinoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,2)"></div>  
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>


                                    </tr>

                                    <tr>

                                        <td>
                                            <table>
                                                <tr>


                                                    <td>
                                                        no dejo mis bienes a mi esposa 
                                                    </td>

                                                    <td>
                                                        <div class="contenedorPieza" id="ochoActividad1sobrinoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,2)"></div>  
                                                    </td>    
                                                    <td>
                                                        no a mi cuñado”                                          
                                                    </td>
                                                    <td>
                                                        <div class="contenedorPieza" id="nueveActividad1sobrinoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,2)"></div>  
                                                    </td>  
                                                </tr>
                                            </table>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td colspan="5">
                                            <br/><br/>
                                            Que mis deseos sean órdenes. Facundo Fonseca.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="13" class="alineacionCentro">
                                            <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,2)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LectoAct1sobrino" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza1LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LectoAct1sobrino" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza2LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3LectoAct1sobrino" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza3LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4LectoAct1sobrino" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza4LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5LectoAct1sobrino" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza5LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6LectoAct1sobrino" src="Vista/imagenes/juegos/lectoEscritura/actividad01/dospuntos.png" alt="pieza6LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7LectoAct1sobrino" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracionabre.png" alt="pieza7LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8LectoAct1sobrino" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracioncierra.png" alt="pieza8LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza9LectoAct1sobrino" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntaabre.png" alt="pieza9LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza10LectoAct1sobrino" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntacierra.png" alt="pieza10LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div11lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">SASTRE</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzle1LectoSastre(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img class="imagenOva" src="Vista/imagenes/juegos/lectoEscritura/actividad01/sastre.png">
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <table class="texto">
                                    <tr>
                                        <td>
                                            “Yo dejo mis bienes 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="unoActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="dosActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            a mi hijo 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="tresActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="cuatroActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            no 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="cincoActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="seisActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            a mi sobrino
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="sieteActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)"></div>  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="ochoActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)"></div>  
                                        </td>

                                        <td>
                                            tampoco  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="nueveActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)"></div>  
                                        </td>


                                        <td>
                                            nunca 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="diezActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)"></div>  
                                        </td>

                                        <td>
                                            Se pagará la cuenta del sastre 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="onceActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)"></div>  
                                        </td>                                                                                
                                    </tr>
                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <table class="texto">
                                    <tr>
                                        <td>
                                            No dejo mis bienes a mi esposa 
                                        </td>


                                        <td>
                                            <div class="contenedorPieza" id="doceActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)"></div>  
                                        </td>


                                        <td>
                                            no a mi cuñado”
                                        </td>                                                                            
                                        <td>
                                            <div class="contenedorPieza" id="treceActividad1sastreLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)"></div>  
                                        </td>                                 
                                    </tr>
                                </table>
                            </td>         
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <table class="texto">
                                    <tr>
                                        <td>
                                            <br/><br/>
                                            Que mis deseos sean órdenes. Facundo Fonseca.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="alineacionCentro">
                                            <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,3)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza1LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza2LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/dospuntos.png" alt="pieza3LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza4LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza5LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza6LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracionabre.png" alt="pieza7LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracioncierra.png" alt="pieza8LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza9LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntaabre.png" alt="pieza9LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza10LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntacierra.png" alt="pieza10LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza11LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntaabre.png" alt="pieza11LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza12LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntacierra.png" alt="pieza12LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza13LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracionabre.png" alt="pieza13LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza14LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracioncierra.png" alt="pieza14LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza15LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/suspensivos.png" alt="pieza15LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza16LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza8LectoAct16hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza17LectoAct1sastre" src="Vista/imagenes/juegos/lectoEscritura/actividad01/suspensivos.png" alt="pieza17LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>







        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div12lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ESPOSA</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzle1LectoEsposa(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img class="imagenOva" src="Vista/imagenes/juegos/lectoEscritura/actividad01/esposa.png">
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <table class="texto">
                                    <tr>
                                        <td>
                                            “Yo dejo mis bienes 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="unoActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="dosActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            a mi hijo 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="tresActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="cuatroActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            no 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="cincoActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="seisActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            a mi sobrino 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="sieteActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>



                                        <td>
                                            tampoco 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="nueveActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            nunca  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="diezActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            se pagará la cuenta del sastre
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="onceActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>                                       
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <table class="texto">
                                    <tr>
                                        <td>
                                            <div class="contenedorPieza" id="onceonceActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>
                                        </td>

                                        <td>
                                            no 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="doceActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            Dejo mis bienes a mi esposa 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="treceActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                            </div>  
                                        </td>


                                        <td>
                                            no a mi cuñado”
                                        </td>


                                        <td>
                                            <div class="contenedorPieza" id="catorceActividad1esposaLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)"></div>  
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>




                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <table class="texto">
                                    <tr>
                                        <td>
                                            <br/><br/>
                                            Que mis deseos sean órdenes. Facundo Fonseca.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="alineacionCentro">
                                            <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,4)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza1LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza2LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/dospuntos.png" alt="pieza3LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza4LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza5LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza6LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                


                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracionabre.png" alt="pieza7LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracioncierra.png" alt="pieza8LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza9LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracionabre.png" alt="pieza9LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza10LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracioncierra.png" alt="pieza10LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">


                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza11LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntaabre.png" alt="pieza11LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza12LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntacierra.png" alt="pieza12LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza13LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntaabre.png" alt="pieza13LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza14LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntacierra.png" alt="pieza14LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza15LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza15LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza16LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/suspensivos.png" alt="pieza16LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza17LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza8LectoAct17hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza18LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/suspensivos.png" alt="pieza18LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza19LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza19LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza20LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntaabre.png" alt="pieza20LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza21LectoAct1esposa" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntacierra.png" alt="pieza21LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>







        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div13lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">CUÑADO</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzle1LectoCunado(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img class="imagenOva" src="Vista/imagenes/juegos/lectoEscritura/actividad01/cunado.png">
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <table class="texto">
                                    <tr>
                                        <td>
                                            “Yo dejo mis bienes 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="unoActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="dosActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            a mi hijo 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="tresActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            no 
                                        </td>


                                        <td>
                                            <div class="contenedorPieza" id="cuatroActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            a mi sobrino 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="cincoActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>



                                        <td>
                                            tampoco 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="seisActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            nunca  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="sieteActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            se pagará la cuenta del sastre
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="ochoActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>                                       
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <table class="texto">
                                    <tr>

                                        <td>
                                            no 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="nueveActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            Dejo mis bienes a mi esposa 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="diezActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>


                                        <td>
                                            no 
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="onceActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="doceActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>
                                        <td>
                                            a mi cuñado”
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="treceActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                            </div>  
                                        </td>

                                        <td>
                                            <div class="contenedorPieza" id="catorceActividad1cunadoLectoEscritura" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)"></div>  
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>




                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <table class="texto">
                                    <tr>
                                        <td>
                                            <br/><br/>
                                            Que mis deseos sean órdenes. Facundo Fonseca.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="alineacionCentro">
                                            <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,5)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/dospuntos.png" alt="pieza1LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza2LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza3LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza4LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza5LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza6LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                


                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracionabre.png" alt="pieza7LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracioncierra.png" alt="pieza8LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza9LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza9LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza10LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/coma.png" alt="pieza10LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza11LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntaabre.png" alt="pieza11LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza12LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntacierra.png" alt="pieza12LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza13LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntaabre.png" alt="pieza13LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza14LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntacierra.png" alt="pieza14LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza15LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntaabre.png" alt="pieza15LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza16LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntacierra.png" alt="pieza16LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza17LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntaabre.png" alt="pieza17LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza18LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/preguntacierra.png" alt="pieza18LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza19LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza19LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza20LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracionabre.png" alt="pieza20LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza21LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/admiracioncierra.png" alt="pieza21LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">


                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza22LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/punto.png" alt="pieza22LectoAct1hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza23LectoAct1cunado" src="Vista/imagenes/juegos/lectoEscritura/actividad01/dospuntos.png" alt="pieza23LectoAct17hijo" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div14lectoEscritura" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>



                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEMA # 2: EL TEXTO</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>  


                        <tr>
                            <td>
                                <audio id="audio4Lectoescritura" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLectoEscritura/Vista/audio/lectoescritura/Track4.mp3">
                                </audio>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  


                        <tr>
                            <td colspan="3">
                                <table style="width: 100%;" border="0" class="fondo02">
                                    <tr>
                                        <td style="width: 400px">
                                            <img class="efectoAumento sec2texto" src="Vista/imagenes/secuenciacion/lectoEscritura/sec2texto.png">
                                        </td>
                                        <td>
                                            <div style="width: 400px">
                                            </div>
                                        </td>
                                        <td style="width: 400px">
                                            <img class="efectoAumento sec3texto" src="Vista/imagenes/secuenciacion/lectoEscritura/sec3texto.png">                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="efectoAumento sec6texto" src="Vista/imagenes/secuenciacion/lectoEscritura/sec6texto.png">

                                        </td>
                                        <td>
                                            <img class="efectoAumento" src="">
                                        </td>
                                        <td>
                                            <img class="efectoAumento sec5texto" src="Vista/imagenes/secuenciacion/lectoEscritura/sec5texto.png">                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img class="efectoAumento sec4texto" src="Vista/imagenes/secuenciacion/lectoEscritura/sec4texto.png">
                                        </td>
                                        <td>
                                            <img class="efectoAumento" src="">
                                        </td>
                                        <td>
                                            <img class="efectoAumento sec1texto" src="Vista/imagenes/secuenciacion/lectoEscritura/sec1texto.png">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div15lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Comprensión lectora</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <video poster controls width="600px" height="400px" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLectoEscritura/Vista/videos/lectoEscritura/comprensionLectora.mp4" type="video/mp4">
                                </video>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <label class="texto">Fuente: www.youtube.com</label><br/>                                
                                <label class="texto">Enlace: <a target="_blank" href="http://www.youtube.com/watch?v=Fo1JJjrNnzo">Ir a la fuente</a></label> <br/>
                                <label class="textoPequeno">http://www.youtube.com/watch?v=Fo1JJjrNnzo</label><br/>                                
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div16lectoEscritura" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>


                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD # 2</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzle2LectoPar1(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    

                        <tr>
                            <td colspan="3">
                                <label class="texto">
                                    En el presente texto encontrarás información interesante; sin embargo, debes organizar sus partes para lograr claridad
                                </label>


                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">                                    
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">RECUERDA QUE…</label>
                                        <span class="custom info">Los textos nos recuerdan información conocida (TEMA) y nos proporcionan  información nueva (REMA)
                                        </span>
                                    </a>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <label class="subtitulo">
                                    ENCUENTRO CON LOS ANIMALES- GERALD DURRELL<br/>
                                    primer parrafo
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <table width="100%" border="0" class="fondoJuego02">
                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/juegos/lectoEscritura/actividad02/tema.png">
                                        </td>

                                        <td>
                                            <img src="Vista/imagenes/juegos/lectoEscritura/actividad02/rema.png">
                                        </td>

                                        <td rowspan="4">

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop1b.png);" class="contenedorPiezaAct02" id="unoActividad2LectoPar1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,6)">                                                
                                            </div>  

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop1e.png);" class="contenedorPiezaAct02" id="dosActividad2LectoPar1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,6)">                                                
                                            </div>                                                                                      

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop1d.png);" class="contenedorPiezaAct02" id="tresActividad2LectoPar1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,6)">                                                
                                            </div>  

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop1a.png);" class="contenedorPiezaAct02" id="cuatroActividad2LectoPar1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,6)">                                                
                                            </div>   

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop1c.png);" class="contenedorPiezaAct02" id="cincoActividad2LectoPar1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,6)">                                                
                                            </div> 


                                        </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="3">
                                            <div id="contenedorPiezasAct2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,6)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LectoAct2Par1" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p1a.png" alt="pieza1LectoAct2Par1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LectoAct2Par1" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p1b.png" alt="pieza2LectoAct2Par1" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                            </div>
                                        </td>

                                        <td rowspan="3">
                                            <div id="contenedorPiezasAct2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,6)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3LectoAct2Par1" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p1c.png" alt="pieza3LectoAct2Par1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4LectoAct2Par1" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p1d.png" alt="pieza4LectoAct2Par1" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5LectoAct2Par1" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p1e.png" alt="pieza5LectoAct2Par1" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div17lectoEscritura" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>


                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">PARRAFO #2</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzle2LectoPar2(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <table width="100%" border="0" class="fondoJuego02">
                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/juegos/lectoEscritura/actividad02/tema.png">
                                        </td>

                                        <td>
                                            <img src="Vista/imagenes/juegos/lectoEscritura/actividad02/rema.png">
                                        </td>

                                        <td rowspan="4">
                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop2a.png);" class="contenedorPiezaAct02" id="unoActividad2LectoPar2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,7)">                                                
                                            </div>  

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop2b.png);" class="contenedorPiezaAct02" id="dosActividad2LectoPar2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,7)">                                                
                                            </div>                                                                                                                                 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="3">
                                            <div id="contenedorPiezasAct2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,7)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LectoAct2Par2" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p2a.png" alt="pieza1LectoAct2Par2" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                            </div>
                                        </td>

                                        <td rowspan="3">
                                            <div id="contenedorPiezasAct2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,7)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LectoAct2Par2" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p2b.png" alt="pieza2LectoAct2Par2" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div18lectoEscritura" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>


                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">PARRAFO #3</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzle2LectoPar3(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <table width="100%" border="0" class="fondoJuego02">
                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/juegos/lectoEscritura/actividad02/tema.png">
                                        </td>

                                        <td>
                                            <img src="Vista/imagenes/juegos/lectoEscritura/actividad02/rema.png">
                                        </td>

                                        <td rowspan="4">
                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop3a.png);" class="contenedorPiezaAct02" id="unoActividad2LectoPar3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,8)">                                                
                                            </div>  

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop3b.png);" class="contenedorPiezaAct02" id="dosActividad2LectoPar3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,8)">                                                
                                            </div>                                                                                                                                 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="3">
                                            <div id="contenedorPiezasAct2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,8)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LectoAct2Par3" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p3a.png" alt="pieza1LectoAct2Par3" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                            </div>
                                        </td>

                                        <td rowspan="3">
                                            <div id="contenedorPiezasAct2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,8)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LectoAct2Par3" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p3b.png" alt="pieza2LectoAct2Par3" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div19lectoEscritura" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">PARRAFO #4</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzle2LectoPar4(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <table width="100%" border="0" class="fondoJuego02">
                                    <tr>
                                        <td>
                                            <img src="Vista/imagenes/juegos/lectoEscritura/actividad02/tema.png">
                                        </td>

                                        <td>
                                            <img src="Vista/imagenes/juegos/lectoEscritura/actividad02/rema.png">
                                        </td>

                                        <td rowspan="4">

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop4b.png);" class="contenedorPiezaAct02" id="unoActividad2LectoPar4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,9)">                                                
                                            </div>                                                                                                                                 

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop4d.png);" class="contenedorPiezaAct02" id="dosActividad2LectoPar4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,9)">                                                
                                            </div>      

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop4a.png);" class="contenedorPiezaAct02" id="tresActividad2LectoPar4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,9)">                                                
                                            </div>  

                                            <div  style="background-image: url(Vista/imagenes/juegos/lectoEscritura/actividad02/blancop4c.png);" class="contenedorPiezaAct02" id="cuatroActividad2LectoPar4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,9)">                                                
                                            </div>    


                                        </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="3">
                                            <div id="contenedorPiezasAct2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,9)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LectoAct2Par4" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p4a.png" alt="pieza1LectoAct2Par4" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LectoAct2Par4" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p4b.png" alt="pieza2LectoAct2Par4" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                            </div>
                                        </td>

                                        <td rowspan="3">
                                            <div id="contenedorPiezasAct2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLecto(event,8)">                                                
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3LectoAct2Par4" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p4c.png" alt="pieza3LectoAct2Par4" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4LectoAct2Par4" src="Vista/imagenes/juegos/lectoEscritura/actividad02/p4d.png" alt="pieza4LectoAct2Par4" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div20lectoEscritura" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLectoEscritura.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">DOCUMENTOS DE AYUDA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionIzquierda" width="100%" height="100%">
                                <table class="fondoDocumentosExternos imagenOvaSinEfecto" border="0">
                                    <tr>
                                        <td heigth="30%"></td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://portales.puj.edu.co/ftpcentroescritura/Recursos%20C.E/Estudiantes/Durante/Signos_de_puntuacion.pdf"><span>1. Signos de puntuación </span></a> <br/>                                
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://wac.colostate.edu/books/colombian/"><span>2. Lectoescritura universitaria</span></a> <br/> 
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://sedll.org/es/admin/uploads/congresos/12/act/9/Mendoza_Fillola,_A..pdf"><span>3.Lengua hablada y lengua escrita </span></a> <br/> 
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href=""><span>4.Parra Marina. Cómo se produce el texto escrito. Editorial Magisterio. 2001 </span></a> <br/> 


                                        </td>
                                    </tr>                                  
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <!--        <div style="display: none;">
                    <div id="div?lectoEscritura" style="overflow: hidden;" class="ventana">
                        <table border="0">
                            <tbody>
        
        
        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
        <?php
        //include("Vista/menusNavegacion/menuLectoEscritura.php");
        ?>
                            </td>
                        </tr>
                                <tr>
                                    <td>
                                        <img onclick="retroceder('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                        <label class="texto">Anterior</label>
                                    </td> 
                                    <td colspan="1">
                                        <span class="titulo">TITULO</span>
                                    </td>    
                                    <td>
                                        <img onclick="avanzar('lectoEscritura');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                        <label class="texto">Siguiente</label>
                                    </td>
                                </tr>    
                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>                                           
                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>-->

    </body>
</html>
