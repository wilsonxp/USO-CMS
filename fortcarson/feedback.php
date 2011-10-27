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
    
    <body>
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
        </script>
        <p>
        <fieldset width="350px" height="200px">
            <legend>USO Guest Feedback</legend>
            <form name="FeedbackForm" action="" onsubmit="return formCheck(this); submitonce(this);" method="post">
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
                     <input type="button" value="Show reCAPTCHA" onclick="showRecaptcha('recaptcha_div');"></input>
                    <input type="submit" name="submit" value="send" />
                </p>
            </form>
            <address id="copyright">Copyright &copy; 2010 - Christopher Sparrowgrove</address>
        </fieldset>
    </body>
</html>  

<?PHP
/*START CONFIGURATION */
require_once("../config.php");
/* END CONFIGURATION */

if($_SERVER['REQUEST_METHOD'] == "POST") //Validation: Make Sure User Submitted 
{
    require_once('../admin/recaptchalib.php');
    $privatekey = "PRIVATE_KEY";
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
        if (!mysql_connect($host, $db_user, $db_pass)) {die("Database Connect Error");} 
        if (!mysql_select_db($database)) {die("Database Select Error");}
    
        $username = ''; //COOKIE
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $time = time();

        //Sanitize User Input to Prevent SQLi and XSS Attacks
        $safename = htmlspecialchars($name); //Convert char to prevent XSS or HTML injection
        $safeemail = htmlspecialchars($email); //Further sanitize user input
        $safemessage = mysql_escape_string(stripslashes($message)); //

        mysql_query("INSERT INTO feedback VALUES ('', '$name','$email','$message','$time','$ip','$username','')") or die ('Error Submitting Data');
        echo "Your Message Has Been Sent. Thank You";
     }

}
?>