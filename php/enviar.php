<?php

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if (!isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["comment"])) {
    die ("Es necesario completar todos los datos del formulario");
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["comment"];
$destinatario = "aamassuttier@gmail.com";
$redireccion = "https://banyantree.gmd.mx/apartment-luxury.php";

// CREDENCIALES SMTP
//$smtpHost = "exs.gmd.com.mx";
//$smtpUsuario = "ventas@gmd.com.mx";
//$smtpClave = "V3ntasR3sorT2";

// CREDENCIALES SMTP
$smtpHost = "smtp.zeptomail.com";
$smtpUsuario = "emailapikey";
$smtpClave = "wSsVR61+/UL4Cql7nWWkI+xsyF8GD132HBx/3gH3unP0F/iQ98c/xhaaDQ+gT/ccRG5sEDpBoO97yh9T1DQL2dwuyAoIDiiF9mqRe1U4J3x17qnvhDzJX2hUkxWJJIwKxg5qk2NoF8gk+g==";

$mail = new PHPMailer();
$mail->IsSMTP(true);
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->IsHTML();
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost;
$mail->Username = $smtpUsuario;
$mail->Password = $smtpClave;

$mail->From = "andres@massuttier.com.mx"; // Email desde donde env�o el correo.
$mail->FromName = $name;
$mail->addReplyTo($email);
$mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario

$mail->Subject = "Banyan Tree Lead"; // Este es el titulo del email.
$messageHtml = nl2br($message);
$mail->Body = "
<html> 

<body> 

<h3>Recibiste un nuevo comentario desde el formulario de contacto Luxury Apartments</h3>
<p>Informacion enviada por el usuario de la web:</p>
<p>name: <b>{$name}</b></p>
<p>email: <b>{$email}</b></p>
<p>phone: <b>{$phone}</b></p>
<p>comment: <b>{$message}</b></p>
</body> 
</html>

<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$message} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send();
if ($estadoEnvio) {
    //echo '<script type="text/javascript">alert("Tu mensaje fué enviado de forma correcta");window.location.href = "'. $redireccion .'";</script>';
    echo "Su mensaje fué enviado con éxito";
    header('Location: https://banyantree.gmd.mx/fraccional-departamentos.php');

} else {

    //echo "Ocurrio un error inesperado.";
    echo "<script>console.log('{$estadoEnvio}' );</script>";

}

?>

