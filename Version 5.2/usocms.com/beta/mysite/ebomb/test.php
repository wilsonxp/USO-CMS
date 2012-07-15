<?PHP

        $name = "Chris";
        $email = "csparrowgrove@gmail.com";
        $email2 = "cdsparrowgrove@me.com"; //Forward e-Mail 1
        $email3 = "chrisismyna@me.com"; //Forward e-mail 2
        $email4 = "csparrowgrove@gmail.com"; //Forward e-mail 3
        $email5 = "admin@usocms.com"; //Forward e-mail 4
        /* CONFIG */
        date_default_timezone_set('America/Denver');
        $date= date("l, F d, Y h:i" ,time());
        $time_stamp= time();
        $user_email = "";
        $username = "feedback@fortcarson.usocms.com";
        $subject= "Feedback";
        $message = "Hello My Name Is Chris And This Is A Test";
        
        require("class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->IsSMTP(); // send via SMTP
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->Username = "admin@3xsecurityservices.com"; // SMTP username
        $mail->Password = "delilahbenjaminconcolino2010"; // SMTP password
        $webmaster_email = "admin@3xsecurityservices.com"; //Reply to this email ID
        $email="csparrowgrove@3xsecurityservices.com"; // Recipients email ID
        $name="Chris"; // Recipient's name
        $mail->From = $email;
        $mail->FromName = $name;
        $mail->AddAddress($email2);
        $mail->AddAddress($email3);
        $mail->AddAddress($email4);
        $mail->AddAddress($email5);
        $mail->AddReplyTo($email,"$name");
        $mail->Subject = "$subject";
        $mail->Body = "$message"; //HTML Body
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