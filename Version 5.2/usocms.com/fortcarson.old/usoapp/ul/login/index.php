<!DOCTYPE html>


<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY:  3X Security, LLC (3X Security Services)
 *     WEBSITE: http://3xsecurityservices.com
 *        NAME: Login Script
 *        DATE: Oct 12, 2011
 *        FILE: login.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  Login Script
 *     LICENSE:
 *      
 */
//include_once("checkLogin.php");
include ('config.php');


/* End Configuration */


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="author" content="Christopher Sparrowgrove" />
 <meta name="description" content="Login Page For Members Only" />
 <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
  <title>MSP Login</title>
  <link type="text/css" rel="stylesheet" href="../../../style.css" />
</head>
<body>
    <center>
    <form action="process.php" method="post">
        <fieldset>
            <legend>MSP Login</legend>
            <p><label for="Username">Username</label> <input type="text" name="username" /> </p>
            
            <p><label for="Password">Password</label> <input type="password" name="password" /> </p>
     
            <p><label for="register">Registration</label> <input type="checkbox" name="register" value="Yes" />Register  
                                                      <input type="checkbox" name="noregister" value="No" checked="checked" />I Am Registered </p>
            
            <p class="submit"> <input type="submit" name="submit" value="Login" /> </p>
        </fieldset>       
    </form>
    <?PHP
    echo '<p style="font-size:12px;text-align:center;"> Version: ', $Version;
    echo ' &copy;2010-2011 <a style="text-decoration:none;" href="http://3xsecurityservices.com">3X Security, LLC</a><br />';
    echo '<a style="text-decoration:none;" href="/ul">*</a> <a href="/index.php?page=menu">Food Menu</a> | <a href="/index.php?page=directions">Directions</a> | Activities | Hours of Operation | Contact Us <a style="text-decoration:none;" href="/ul">*</a>';
    //include ('footer.php');
    ?>    
    </center>
</body>
</html>