<html>
    <head>
        <title>USO Guest Feedback</title>
        <meta name="author" content="Christopher Sparrowgrove" />
        <meta name="description" content="Feedback Form for visitors and guests" />
        <meta name="keyword" content="USO, usocms, christopher sparrowgrove, cms script, fort carson, United Service Orgination" />
        <meta name="ROBOTS" content="INDEX, FOLLOW" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <style>
            #center{text-align: center;} 
            #copyright{text-align: center; color: grey; font-size: x-small;} 
            #text{text-align: center; font-style: normal;}
        </style>
        <script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>

      <!-- Wrapping the Recaptcha create method in a javascript function -->
      <script type="text/javascript">
         function showRecaptcha(element) {
           Recaptcha.create("6LcbgckSAAAAANYpfEq5x_ElO3GtFb6fn3n2IzG1", element, {
             theme: "red",
             callback: Recaptcha.focus_response_field});
         }
      </script>
    </head>
    
    <body onload="showRecaptcha('recaptcha_div');">
        <div id="fb-root"></div>  
<script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '290220450990671',
        status     : true, 
        cookie     : true,
        xfbml      : true
      });

      FB.api('/me', function(user) {
        if (user) {
          var image = document.getElementById('image');
          image.value = "https://graph.facebook.com/" + user.id +"/picture";  
          var name = document.getElementById('name');
          name.value = user.name
          var username = document.getElementById('username');
          username.value = user.username
        }
      });
    }; 

    (function(d){
       var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
       js = d.createElement('script'); js.id = id; js.async = true;
       js.src = "//connect.facebook.net/en_US/all.js";
       d.getElementsByTagName('head')[0].appendChild(js);
     }(document));

  </script>
        <script type="text/javascript">
        <!--
        /***********************************************
         * Required field(s) validation v1.10- By NavSurf
         * Visit Nav Surf at http://navsurf.com
         * Visit http://www.dynamicdrive.com/ for full source code
         ***********************************************/

         function formCheck(formobj)
         {
             // Enter name of mandatory fields
	     var fieldRequired = Array("name", "message"); //add more "","",""
	     // Enter field description to appear in the dialog box
	     var fieldDescription = Array("Required Fields"); //add more "","",""
	     // dialog message
	     var alertMsg = "Please complete the following fields:\n";
	     var l_Msg = alertMsg.length;
	     for (var i = 0; i < fieldRequired.length; i++)
             {
                 var obj = formobj.elements[fieldRequired[i]];
	         if (obj)
                 {
	             switch(obj.type)
                     {
                         case "select-one":
		         if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].text == "")
                         {
		             alertMsg += " - " + fieldDescription[i] + "\n";
                         }
	                 break;
                         case "select-multiple":
		         if (obj.selectedIndex == -1)
                         {
		             alertMsg += " - " + fieldDescription[i] + "\n";
	                 }
		         break;
		         case "text":
		         case "textarea":
		         if (obj.value == "" || obj.value == null)
                         {
		             alertMsg += " - " + fieldDescription[i] + "\n";
		         }
		         break;
		         default:
                     }
                     if (obj.type == undefined)
                     {
		        var blnchecked = false;
		        for (var j = 0; j < obj.length; j++)
                        {
                            if (obj[j].checked)
                            {
		                blnchecked = true;
	                    }
		        }
		        if (!blnchecked)
                        {
		            alertMsg += " - " + fieldDescription[i] + "\n";
		        }
		     }
                }
	    }
	    if (alertMsg.length == l_Msg)
            {
	        return true;
	    }
            else
            {
	        alert(alertMsg);
	        return false;
	    }
        }
        
         function taLimit() 
         {
             var taObj=event.srcElement;
             if (taObj.value.length==taObj.maxLength*1) return false;
         }
         function taCount(visCnt) 
         { 
             var taObj=event.srcElement;
             if (taObj.value.length>taObj.maxLength*1) taObj.value=taObj.value.substring(0,taObj.maxLength*1);
             if (visCnt) visCnt.innerText=taObj.maxLength-taObj.value.length;
         }
         // -->
        </script>
        <p>
        <fieldset width="350px" height="200px">
            <legend>USO Guest Feedback</legend>
            <!--REMOVED onsubmit return formCheck(this); submitonce(this); -->
            <form name="FeedbackForm" action="" method="post">
                <!-- This Public Identifiable Information will only be shared with USO Staff-->
                <!--This is to prevent Spam and collect info incase threats are made-->
                <!--This info is collected by Facebook Users who are logged in -->
                <!--via the Facebook Graph API: https://graph.facebook.com/me -->
                <input type="hidden" name="profilepic" id="image" value="" />
                <input type="hidden" name="profilename" id="name" value=""/>
                <input type="hidden" name="profileusername" id="username" value=""/>
                <p class="name">
                    <label for="name:">*Name: </label>
                    <input type="text" name="name" required/>
                </p>
                
                <p class="email">
                    <label for="email:">*E-Mail:  </label> 
                    <input type="text" name="email" required/>
                </p>
                
                <p class="message">
                    <label for="email:">*Message:  </label> 
                    <textarea name="message" maxlength="140" onkeypress="return taLimit()" 
                              onkeyup="return taCount(myCounter)" onkeydown="return taCount(myCounter)" required/>
                    </textarea><address id="text">You have <b><span id="myCounter">140</span></b> characters remaining.</address>
                </p>
                 
                <p id="center">
                     <div id="recaptcha_div"></div>
                     <input type="hidden" value="Show reCAPTCHA" onfocus="showRecaptcha('recaptcha_div');"></input>
                    <input type="submit" name="submit" value="send" />
                </p>
            </form>
            <address id="copyright">Copyright &copy; 2010 - Christopher Sparrowgrove</address>
        </fieldset>
        <?PHP
        echo '<p style="font-size:12px;text-align:center;">Version: ', $Version;
        echo ' &copy;2010-2011 <a style="text-decoration:none;" target="_Blank" href="https://www.facebook.com/pages/USO-CMS/250764278307312">USO CMS</a><br />';
        echo $links;
        echo '<p style="text-align:center; padding-top:8px;">';
        echo '<BR /><a href="http://www.instantssl.com">
              <img src="https://usocms.com/comodo_secure-76x26.gif" alt="Instant SSL Certificate Secure Site" title="Instant SSL Certificate Secure Site" width="76" height="26" style="border: 0px;"></a><br></p>';      
        ?>
    </body>
</html>  

<?PHP
/*START CONFIGURATION */
require_once("../config.php");
/* END CONFIGURATION */

if($_SERVER['REQUEST_METHOD'] == "POST") //Validation: Make Sure User Submitted 
{
    require_once('../admin/recaptchalib.php');
    $privatekey = "6LcbgckSAAAAAHgvurvF0zn9yt7YwUX0fDwzLkhW";
    $resp = recaptcha_check_answer ($privatekey,
    $_SERVER["REMOTE_ADDR"],
    $_POST["recaptcha_challenge_field"],
    $_POST["recaptcha_response_field"]);

    if (!$resp->is_valid) 
    {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The Verification Image was not entered or wasn't entered correctly."); //"(reCAPTCHA said: " . $resp->error .);
    } 
    else 
    {
        $profilepic = $_POST['profilepic'];
        $profilelink = "https://facebook.com/".$_POST['profileusername'];
        $profilename = $_POST['profilename'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        //$email2 = "pmartinez@uso.org"; //Forward e-Mail 1
        //$email3 = "kbarker@uso.org"; //Forward e-mail 2
        $email4 = "csparrowgrove@gmail.com"; //Forward e-mail 3
        $email5 = "admin@usocms.com"; //Forward e-mail 4
        $email2 = $email4;
        $email3=$email5;
        $msg = $_POST['message'];
        /* CONFIG */
        date_default_timezone_set('America/Denver');
        $date= date("l, F d, Y h:i" ,time());
        $time_stamp= time();
        $user_email = "";
        $username = "feedback@fortcarson.usocms.com";
        $subject= "Feedback";
        $message = "Dear USO,<br>I have a somefeedback: $msg <p>
                    Sincerly, $name (Real Name: $profilename)<BR>
                    $email <BR>
                    $profilepic <BR>
                    FACEBOOK: <a href='$profilelink'>$profilelink</a>";
        
        require("phpmaillib/class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->IsSMTP(); // send via SMTP
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->Username = "admin@3xsecurityservices.com"; // SMTP username
        $mail->Password = "rotc89army11"; // SMTP password
        $webmaster_email = "admin@3xsecurityservices.com"; //Reply to this email ID
        //$email="csparrowgrove@3xsecurityservices.com"; // Recipients email ID
        //$name="Chris"; // Recipient's name
        $mail->From = $email;
        $mail->FromName = $name;
        $mail->AddAddress($email2);
        $mail->AddAddress($email3);
        $mail->AddAddress($email4);
        $mail->AddAddress($email5);
        $mail->AddReplyTo($email,"$name");
        $mail->Subject = "$subject";
        $mail->Body = "$message <p>Technical Information about user:<BR>
                                   E-Mail Address: $email <BR> 
                                   IP Address: $ip <BR>
                                   Server: x86 Home Server Rack 3 (Dedicated 1Mb Line)~TEMP SMTP SERVER <BR>
                                   Server Name: USO Fort Carson <BR>
                                   Location: https://usocms.com$location$uri <BR>
                                   Date Sent: $date<BR>
                                   Time Stamp: $time() <BR>
                                   User Agent: $browser"; //HTML Body
        $mail->AltBody = "Text Format is Not Supported but here is the message: $message "; //Text Body
        if(!$mail->Send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
            echo "Message Has Been Sent. Thank You";
        }
    }

}
?>