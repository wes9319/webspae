<?php
$nombre = $_POST["nombre"] ;
$email = $_POST["email"] ;
$mensaje = $_POST["mensaje"] ;
$mail = "spae-ec@hotmail.com" ;
$thank = "gracias.html"
$message = "nombre:".$nombre."email:".$email."mensaje:".$mensaje."";
if(mail ($email , "index", $messaje))
Header("location:$thank");
?>