<?php

if(isset($_POST['submit'])){

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$email_from = $_POST['email'];
$number = $_POST["numero"];

$email_subject = "Cotizacion";

$email_body = "Has recibido un mensaje de ".$name."\n\n".
"Email:".$visitor_email."\n".
"Teléfono:".$number."\n".
"Mensaje:".$message;

$to = "contacto@simpleycreativo.cl";

$header = "From:".$email_from;
$header .='Cc: lobosgonza60@gmail.com, oscar@simpleycreativo.cl' . "\r\n";
$txt = "Has recibido un mensaje de ".$name."\n\n".$message;



$mail = @mail($to, $email_subject, $email_body, $header);
if($mail){
  header("Location : http://simpleycreativo.cl/success.html");
}else {
  header("Location : http://simpleycreativo.cl/failure.html");

}
}
 ?>
