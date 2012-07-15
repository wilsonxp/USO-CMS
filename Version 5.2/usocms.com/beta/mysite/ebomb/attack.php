<?php
require("class.phpmailer.php");
for($i = 0; $i < 5; $i++) {
echo "welcome<br>";
}


        $name = "chrisismyna@me.com";
        $email = "jrochavez@yahoo.com";
        $email2 = "chrisismyna@me.com"; //Forward e-Mail 1
        $subject= "Feedback";
        $message = "YOU HAVE BEEN E-BOMBED BY B1UB3RRY SECURITY TEAM";
        

        $mail = new PHPMailer();
        $mail->IsSMTP(); // send via SMTP
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->Username = "admin@3xsecurityservices.com"; // SMTP username
        $mail->Password = "delilahbenjaminconcolino"; // SMTP password
        $webmaster_email = "admin@3xsecurityservices.com"; //Reply to this email ID
        $mail->From = $email;
        $mail->FromName = $name;
        $mail->AddAddress($email);
        $mail->AddReplyTo($email,"$name");
        $mail->Subject = "$subject";
        $mail->Body = "$message "; //HTML Body
        $mail->AltBody = "Text Format is Not Supported but here is the message: $message "; //Text Body
        if(!$mail->Send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
            echo "Message Has Been Sent. Thank You";
        }
    
?>