<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';       // e.g., smtp.gmail.com
    $mail->SMTPAuth = true;
    $mail->Username = 'eliasnook2013@gmail.com';
    $mail->Password = 'pkdd vbkt suyf mlyg';
    $mail->SMTPSecure = 'tls';                 // or 'ssl'
    $mail->Port = 587;                         // 465 for SSL

    //Recipients
    $mail->setFrom('eliasnook2013@gmail.com', 'Howard Website');
    $mail->addAddress('elias.perez980915@gmail.com');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje de contacto';
    $mail->Body    = '
        <b>Nombre:</b> ' . $_POST["nombre"] . '<br>
        <b>Nivel:</b> ' . $_POST["nivel"] . '<br>
        <b>Horario:</b> ' . $_POST["horario"] . '<br>
        <b>Fecha:</b> ' . $_POST["fecha"] . '<br>
        <b>Contacto:</b> ' . $_POST["contacto"] . '<br>
        <b>Origen:</b> ' . $_POST["origen"];

    $mail->send();
    echo '¡Mensaje enviado correctamente!';
} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}
?>











?>



