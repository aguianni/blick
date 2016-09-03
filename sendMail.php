<?php

$headers = "From: BlickStite.com.ar\r\n";
$headers .= "Mime-Version: 1.0 \r\n"; 
$headers .= "Content-type: text/html; charset=UTF-8 \r\n";


$text = "<b>NOMBRE Y APELLIDO:</b> " . $_POST['nombre'] . " " .$_POST['apellido'] . "<br />";
$text .= "<b>EMAIL:</b> " . $_POST['email'] . "<br />";
$text .= "<b>TEL:</b> " . $_POST['tel'] . "<br />";
$text .= "<b>CONSULTA:</b> " . $_POST['consulta'] . "<br />";

mail("info@blicksite.com.ar", "Contacto BlickSite", $text, $headers);

header("Location: enviado.html");
?>
