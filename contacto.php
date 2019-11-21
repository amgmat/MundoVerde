<?php 

$errores = '';
$enviado = '';

if(isset($_POST['submit'])) {
   $nombre =$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $correo=$_POST['correo'];
   $mensaje=$_POST['mensaje'];

   if(isset($_POST['telefono'])){
    $telefono=$_POST['telefono'];
   }else{
       $telefono='';
   }
   
   
    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre= filter_var($nombre, FILTER_SANITIZE_STRING);
    }else{
        $errores .='Por favor ingresa un nombre <br/>';
    }

    if (!empty($apellido)) {
        $apellido = trim($apellido);
        $apellido= filter_var($apellido, FILTER_SANITIZE_STRING);
    }else{
        $errores .='Por favor ingresa un apellido <br/>';
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores .='Por favor ingresa un correo valido <br/>';
        }
    }else{
        $errores .='Por favor ingresa un correo <br/>';
    }

    if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    }else{
        $errores .='Por favor ingresa el mensaje <br/>';
    }


    if(!$errores){
        $enviar = 'amg.13.161@gmail.com ';
        $asunto = 'Correo enviado desde mundo verde';
        $mensaje_p = "De: $nombre ";
        $mensaje_p .= "$apellido \n";
        $mensaje_p .= "Correo: $correo \n";
        $mensaje_p .= "Telefono: $telefono \n";
        $mensaje_p .= "Mensaje: " . $mensaje;

        mail($enviar, $asunto , $mensaje_p);
        $enviado = 'true';
    }
}


require 'contacto.view.php';

?>