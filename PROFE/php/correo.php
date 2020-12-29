<?php 
    if (isset($_POST['enviar'])){
        if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['msg'])){
            $nombre = $_POST['nombre']; $email = $_POST['email']; $asunto = $_POST['asunto']; $msg = $_POST['msg'];
            
            // Correo al que se enviará el mensaje 
            $myemail = "kervuncruz@gmail.com";

            // Correo que envía - - - - NO TOCAR POR AHORA - - - - 
            // Se puso este correo para que el usuario no tenga que iniciar sesión
            $header = "From: noreply@example.com"."\r\n";
            $header.= "Reply-To: noreply@example.com". "\r\n";
            $header.= "X-Mailer: PHP/". phpversion();
            
            // Redactando el correo con la información del Usuario
            // Asunto
            $miasunto = "Mi Pagina: ". $nombre. " a enviado un Mensaje con el Asunto: ". $asunto;
            // Mensaje
            $mensaje = "\nAsunto: ". $asunto. "\n\nCorreo: ". $email."\n\nMensaje: ".$msg;

            // Enviando el Mensaje
            $mail = mail($myemail,$miasunto,$mensaje,$header);

            // Mensaje Enviado
            if ($mail) {
                // Etiqueta H4, agregar clases para poner diceño y eliminar este comentario
                echo "<h4>Mensaje Enviado</h4>";
            }
            else {
                // Etiqueta H4, agregar clases para poner diceño y eliminar este comentario
                echo "<h4>No se ha podido enviar el mensaje</h4>";
            }


        }
        else {
            header('Location: Contacto.php');
        }
    }

?>