<!DOCTYPE html>
<html>
    <head>
        <!--Javascript dinamico-->
        <script type="text/javascript" src=""></script> 

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="shortcut icon" type="image/x-icon" href="Vista/imagenes/otros/ucaldas.png"/>

        <!--Estilos-->
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="Vista/css/tooltip.css">
        <link rel="stylesheet" type="text/css" href="Vista/css/elementos.css">
        <link rel="stylesheet" type="text/css" href="Vista/css/efectos.css">
        <link rel="stylesheet" type="text/css" href="Vista/css/secuenciacion.css">
        <link rel="stylesheet" type="text/css" href="Vista/css/dragAndDrop.css">
        <link rel="stylesheet" type="text/css" href="Vista/css/apprise.css">
        <link rel="stylesheet" type="text/css" href="Vista/css/jquery.alerts.css">

        <!--JQUERY-->
        <script type="text/javascript" src="Vista/js/jquery/jquery-1.4.3.min.js"></script>  

        <!--Javascript-->
        <script type="text/javascript" src="Vista/js/universo.js"></script> 

        <!--fancybox-->
        <link rel="stylesheet" type="text/css" href="Vista/js/fancybox/jquery.fancybox-1.3.4.css"  media="screen" />
        <script type="text/javascript" src="Vista/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="Vista/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

        <script type="text/javascript" src="Vista/js/efectos/apprise-1.5.full.js"></script> 
        <script type="text/javascript" src="Vista/js/efectos/jquery.alerts.js"></script> 

        <script type="text/javascript" src="Vista/js/efectos/sonido.js"></script> 


        <title>Universo Lectoescritura</title>
    </head>
    <body>



        <!--ESTRUCTURA UNIVERSO-->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->


        <!--ELEMENTOS QUE SE DISTRIBUYEN EN TODO EL UNIVERSO-->
        <table class="estructuraTabla">
            <tbody>                
                <tr>
                    <td>
                        <table>
                            <tr>                                
                                <td id="lectoEscritura">
                                    <table>
                                        <tr>
                                            <td colspan="2" rowspan="2" class="elemento" onclick="cargarScript('lectoEscritura');">
                                                <img onmouseover="clicksound.playclip();" src="Vista/imagenes/objetos/lectoEscritura.png" class="imagenUniverso" />
                                                <label class="textoUniverso">Lectoescritura</label>   
                                            </td>
                                        </tr>
                                    </table>
                                </td>                                
                            </tr>
                        </table>                                                
                    </td>
                </tr>


                <!--UNIVERSO-->
                <tr>                
                    <td class="estructuraTD" id="fondoUniverso">                        
                        <img src="Vista/imagenes/universo/ambiente.png" class="universo">
                    </td>                    
                </tr>


                <!--MENU DE OPCIONES-->
                <tr>                    
                    <td class="footer">
                        <div class="menu_no">
                            <a href="#url"><img  onmouseover="clicksound.playclip();" src="Vista/imagenes/menu/inicio.png" alt="Inicio" title="Inicio" onclick="abrirVentana('inicio')"/></a>
                            <a href="#url"><img  onmouseover="clicksound.playclip();" src="Vista/imagenes/menu/bienvenida.png" alt="Bienvenidos" title="Bienvenidos" onclick="abrirVentana('bienvenidos')"/></a>
                            <a href="#url"><img  onmouseover="clicksound.playclip();" src="Vista/imagenes/menu/requerimientos.png" alt="Requerimientos" title="Requerimientos" onclick="abrirVentana('requerimientos')"/></a>
                            <a href="#url"><img   onmouseover="clicksound.playclip();" src="Vista/imagenes/menu/contenido.png" alt="Contenido" title="Contenido" onclick="abrirVentana('contenido')"/></a>                            
                            <a href="#url"><img   onmouseover="clicksound.playclip();" src="Vista/imagenes/menu/objetivos.png" alt="Objetivos" title="Objetivos" onclick="abrirVentana('objetivos')"/></a>
                            <a href="#url"><img  onmouseover="clicksound.playclip();" src="Vista/imagenes/menu/documentos.png" alt="Documentos" title="Documentos" onclick="abrirVentana('documentos')"/></a>
                            <a href="#url"><img  onmouseover="clicksound.playclip();" src="Vista/imagenes/menu/creditos.png" alt="Creditos" title="Creditos" onclick="abrirVentana('creditos')"/></a>                            
                        </div>
                    </td>                                                           
                </tr>
            </tbody>
        </table>    


        <?php
        include("Vista/menuOpciones.php");
        include("Vista/ovaGenerica.php");
        ?>

</html>
