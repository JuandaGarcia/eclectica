<?php
    $email="valenpadilla8@gmail.com";
    $nombre= $_POST["nombre"];
    $correo= $_POST["email"];
    $mensaje= $_POST["mensaje"];
    $thank="pag/gracias.html";
    $message="
    nombre:".$nombre."
    correo:".$correo."
    mensaje:".$mensaje."
    ";
    if(mail($email,"Contacto",$message)){
        Header ("location:$thank");
    }
?>