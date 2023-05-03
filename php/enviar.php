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
$comment = $_POST["comment"];
$destinatario = "ventas@gmd.com.mx";

// Datos de la cuenta de correo utilizada para enviar v�a SMTP
$smtpHost = "exs.gmd.com.mx";  // Dominio alternativo brindado en el email de alta
$smtpUsuario = "ventas@gmd.com.mx";  // Mi cuenta de correo
$smtpClave = "V3ntasR3sorT2";  // Mi contrase�a


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


$mail->From = "ventas@gmd.com.mx"; // Email desde donde env�o el correo.
$mail->FromName = $name;
$mail->addReplyTo($email);
$mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario

$mail->Subject = "Banyan Tree Lead"; // Este es el titulo del email.
$commentHtml = nl2br($comment);
$mail->Body = "
<html> 

<body> 

<h3>Recibiste un nuevo comentario desde el formulario de contacto Luxury Apartments</h3>

<p>Informacion enviada por el usuario de la web:</p>

<p>name: <b>{$name}</b></p>

<p>email: <b>{$email}</b></p>

<p>phone: <b>{$phone}</b></p>

<p>comment: <b>{$comment}</b></p>

</body> 

</html>

<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$comment} \n\n "; // Texto sin formato HTML
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
    echo '<script type="text/javascript">alert("Tu mensaje fué enviado de forma correcta");window.location.href = "https://banyantree.gmd.mx";</script>';

} else {
    echo "Ocurrio un error inesperado.";

}


?>

