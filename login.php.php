<?php
session_start(); {

}

$nombre_archivo = 'datos.txt';
$contenido = $_POST["Nombre"] . "\r\nNombre:" .$_POST["Nombre"] . "\r\nCorreo:" .$_POST["Correo"] . "\r\nComentario:" .$_POST["Comentario"]. "\r\n\r\n\r\n";


if(is_writable($nombre_archivo)){
    if(!$gestor = fopen($nombre_archivo,'a')) {
        echo"
        No se puede abrir el archivo para guardar
        su texto.</p>";
        exit;
    }

    if(fwrite($gestor, $contenido) === FALSE){
        echo"
        No se puede abrir el archivo para guardar
        su texto.</p>";
        exit;
    }
echo"
Su texto fue enviado con exito.";
}
?>