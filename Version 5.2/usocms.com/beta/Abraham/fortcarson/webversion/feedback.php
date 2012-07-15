<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY:  
 *     WEBSITE: http://www.site.com
 *        NAME: 
 *        DATE: 
 *        FILE: 
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

/* START CONFIGURATION */
require_once('config/config.php');
/* END CONFIGURATION */

//MYSQL CONNECTION 
if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass)) {
    die('MySQL Connect Error');
}
if (!mysql_select_db($mysql_database)) {
    die('MySQL Select Error');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="author" content="Christopher Sparrowgrove" />
        <meta name="date" content="" />
        <meta name="company" content="" />
        <meta name="description" content="" />
        <meta name="license" content="http://www.site.com/index.php?get=license" />
        <meta name="keywords" lang="en-us" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="non_profit" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="" />
        <meta property="fb:admins" content="100001880332289" />
        <meta name="robots" content="index,follow" />
        <link rel="stylesheet" type="text/css" href="https://usocms.com/beta/style.css" />
        <style type="text/css">
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
  <div class="container">
        <p />
            <fieldset width="350px" height="200px">
                <legend>USO Guest Feedback</legend>
                <form name="FeedbackForm" action="" method="post">
                    <input type="hidden" name="profilepic" id="image" value="" />
                    <input type="hidden" name="profilename" id="name" value=""/>
                    <input type="hidden" name="profileusername" id="username" value=""/>
                <p> <label for="name:">*Name: </label> <input type="text" name="name" required/> </p>
                
                <p> <label for="email:">*E-Mail: </label> <input type="text" name="email" required/> </p>
                
                <p> <label for="email:">*Message:  </label> 
                    <textarea name="message" required="required"></textarea>
                </p>
                 
                <p id="center">
                     <div id="recaptcha_div"></div>
                     <input type="hidden" value="Show reCAPTCHA" />
                     <input type="submit" name="submit" value="send" />
                </p>
                </form>
            <address id="copyright">Copyright &copy; 2010-11 - Christopher Sparrowgrove</address>
            </fieldset>
    </div><BR />
<p class="select_footer">
            Version: <?PHP echo $version; ?> &copy;2010-2011 
           <a style='text-decoration:none;' target='_Blank' 
              href='<?PHP echo $copyright_link; ?>' alt="Developer" title="Lead Web Application Developer"><?PHP echo $copyright_label; ?></a><BR />
              <?php include ('fortcarson/links.php'); ?></p>
    </body>
</html>
