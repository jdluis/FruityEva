
<?php

   //Variable form
   $name = $_POST['name'];
   $mail = $_POST['txtemail'];
   $subject = $_POST['subject'];
   $msg = $_POST['msg'];
   $body = "Nombre: " . $name . "<br>Mail: " . $mail . "<br> Subject; " . $subject . "<br> Message: " . $msg;
   $thanks = "https://www.fruityeva.com/thanks";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Tener en cuenta el directorio de acontinuacion por si esta cambiado
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'evibuchi36@gmail.com';                     //SMTP username
    $mail->Password   = 'maximuss1';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS` 

    //Recipients
    $mail->setFrom('evibuchi36@gmail.com', 'FruityEva');
    $mail->addAddress('evibuchi36@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;

    $mail->send();
    echo  header('Location: '. $thanks); //redirec to a url
    /*echo '<script>
        alert("The message was sended to FruityEva");
        window.history.go(-1); //vuelve a la pagina anterio una vez demos en aceptar al alert
        </script>';
        */
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

