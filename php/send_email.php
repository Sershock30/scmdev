<?php
	require "PHPMailer/PHPMailerAutoload.php";
	define ('GUSER','sdcmdev@gmail.com');//correo para enviar datos Tiene que ser Gmail las por validaciones.
	define ('GPWD','desarrolladores');//Clave del correo

    //sportcentercocr@gmail.com
	
	function smtpmailer($from, $from_name, $subject, $body) { 
    $mail = new PHPMailer();  // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
    $mail->SMTPAutoTLS = false;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    $mail->Username = GUSER;  
    $mail->Password = GPWD;           
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $from."<br>".$body;
    $mail->AddAddress(GUSER);
    $mail->IsHTML(true);
    if(!$mail->Send()) {
         echo "<script>alert('Error a la hora de enviar el mensaje.');
         window.location='../contacto.php';</script>";
    } else {
         echo "<script>alert('El mensaje ha sido enviado');
         window.location='../index.php#contacto';</script>";
    }
}

//$_POST["subject"]

smtpmailer($_POST["Correo"],$_POST["Nombre"],"Correo desde Formulario Web",$_POST["Mensaje"]);

?>