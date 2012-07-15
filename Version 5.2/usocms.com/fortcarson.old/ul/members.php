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
/*START CONFIGURATION */
require_once ('../../config.php');
session_start();

$cmd = $_GET['cmd']; 
if ($cmd=="logout")
{
    session_destroy();
    setcookie('UID',  $uid,time()-3600);
    echo "You Have Been Logged Out! Please come back.";
    header('Location: http://usocms.com/fortcarson/');
}

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
  <link type="text/css" rel="stylesheet" href="../../style.css" />
  <style type="text/css">
  label 
  {
    width: 4em;
    float: left;
    text-align: right;
    margin-left: 0.5em;
    display: block
    }
  .submit input 
  {
    margin-left: 5.5em;
  } 
  input 
  {
    color: #781351;
    background: #fee3ad;
    border: 1px solid #781351
  }
  .submit input 
  {
    color: #000;
    background: #ffa20f;
    border: 2px outset #d7b9c9
  } 
  fieldset
  {
    border: 1px solid #781351;
    width: 20em
  }
  legend 
  {
    color: #fff;
    background: #ffa20c;
    border: 1px solid #781351;
    padding: 2px 6px
  }                                                      
  .register 
  {
    font-size: 55%;
  }
  </style>
</head>
<body>
    <center>
    <form action="" method="post">
        <fieldset>
            <legend>MSP Login</legend>
            <p><label for="Username">Username</label> <input type="text" name="username" /> </p>
            
            <p><label for="Password">Password</label> <input type="password" name="password" /> </p>
     
            <p><label for="register">Registration</label> <input type="checkbox" name="register" value="Yes" />Register  
                                                      <input type="checkbox" name="noregister" value="No" checked="checked" />I Am Registered </p>
            
            <p class="submit"> <input type="submit" name="submit" value="Login" /> <a href="facebook.php"><img id="fbconnect" src="../images/fb_login.png" /></a></p>
        </fieldset>       
    </form>
    <?PHP
    echo '<p style="font-size:12px;text-align:center;"> Version: ', $Version;
    echo ' &copy;2010-2011 <a style="text-decoration:none;" href="http://3xsecurityservices.com">3X Security, LLC</a><br />';
    echo $links;
    ?>    
    </center>
</body>
</html>
<?PHP

if (isset($_POST['submit']))
{
        if (!mysql_connect($host,$db_user,$db_pass)){die('Could not connect: ' . mysql_error());}
        mysql_select_db($database) or die ('$selecterror'); 
        $result = mysql_query("SELECT registration_status FROM uso_config");
        while($row = mysql_fetch_array($result)) {$registration = $row['registration_status'];}
        if (isset($_POST['register']))
        {
            if ($registration=="0") //Registration Disabled
            {
                echo "Registration Is Currently Disabled";
            }
            else
            {
                echo "Only An Admin Can Register A User";
                echo $registration;
            }
        }
        else
        {
            if ($username&&$password)
            {
                 if (!mysql_connect($host,$db_user,$db_pass)){die('Could not connect: ' . mysql_error());}
                 mysql_select_db($database) or die ('$selecterror'); 
                 
                 /**********************FORM POST DATA**********************/
                 $username = stripslashes($_POST['username']);  //Username Feild
                 $raw_password = stripslashes($_POST['password']);  //Password Feild
                 $password = mysql_real_escape_string(md5(utf8_encode($raw_password))); //MD5 Hash'ed Password
                 /**********************FORM POST DATA**********************/   

                 $check_login = mysql_query("SELECT * FROM uso_users WHERE username ='$username'");
                 $numrows = mysql_num_rows($check_login);
                 echo $username;
                 echo $numrows;
                     //Check if username exists in the database
                     if ($numrows!=0)
                     { 
                         while ($row = mysql_fetch_assoc($check_login))
                         {
                             $dbusername = $row['username']; //Grab Username
                             $dbpassword = $row['password']; //Grab Password
                             $dbfullname = $row['fullname']; //Grab Full Name
                             $dbfname = $row['fname']; //First Name
                             $dblname = $row['lname']; //Lastname
                             $dbaccess = $row['access_level']; //User Level
                         }
                             //Check For Matching Username And Password
                             if ($username==$dbusername&&$password==$dbpassword)
                             {
                                 echo "Your In!. Access <a href='../index.php'>Members page</a>";
                                 header('Location: http://usocms.com/fortcarson/index.php?dir=ul');
                                 $_SESSION['username']=$dbusername;
                                 $_SESSION['fullname']=$dbfullname;
                                 $_SESSION['fname']=$dbfname;  
                                 
                             }
                             else 
                             {
                                 echo "!Error: Incorrect Username and/or Password";
                             }
                     }
                     else
                     {
                         echo "Incorrect Username and/or Password."; 
                     }
            }
        }
}
$last_modified = filemtime("members.php"); 
print("Last Modified "); 
print(date("m/j/y h:i", $last_modified)); 
?>