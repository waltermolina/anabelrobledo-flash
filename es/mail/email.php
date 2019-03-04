<?php
	if ($_POST['email'] != "") {
    $dest = "anabelrobledoweb@hotmail.com";
    $head = "De: ".$_POST['email']."\r\n";
    $head.= "Para: anabelrobledoweb@hotmail.com\r\n";
    // Ahora creamos el cuerpo del mensaje
    $msg = "Una persona le ha enviado un email desde el formulario de contacto de anabelrobledo.com \n";
    $msg.= "\n";
    $msg.= "_______________________________________________________________________________________ \n";
    $msg.= "NOMBRE:   ".$_POST['nombre']."\n";
    $msg.= "EMAIL:  ".$_POST['email']."\n";
    $msg.= "TELEFONO:    ".$_POST['telefono']."\n";
    $msg.= "HORA:     ".date("h:i:s a ")."\n";
    $msg.= "FECHA:    ".date("D, d M Y")."\n";
    $msg.= "_______________________________________________________________________________________ \n\n";
    $msg.= $_POST['cuerpo']."\n\n";
    $msg.= "_______________________________________________________________________________________ \n";
    $msg.= "Mensaje enviado desde anabelrobledo.com\n";
	$msg.= "powered by waltermolina.com\n";
    // Finalmente enviamos el mensaje
    if (mail($dest, "Contacto desde AnabelRobledo.com", $msg, $head)) {
        echo "rpta=ok";
    } else {
        echo "rpta=error";
    }
}
?>