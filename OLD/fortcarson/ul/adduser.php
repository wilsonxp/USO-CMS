<?php 
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *        NAME: Config: User Editing
 *        DATE: Oct 18, 2011
 *        FILE: users.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Configuration script to enable or disable
 *     LICENSE:
 *      
 */  
//error_reporting(0);

session_start(); 

/* START CONFIGURATION */
 
require_once ('../../config.php'); //Configuration File
echo '<form action="" method="post" name="">
       *Full Name<input type="text" name="fullname" /><BR >
       First Name:<input type="text" name="fname" /><BR />
       Last Name:<input type="text" name="lname" /><BR />
       *Username:<input type="text" name=""username" /><BR />
       *Password:<input type="password" name="password" /><BR />
       *Confirm Password:<input type="password" name="confirmpassword" /><BR />
       *Access Level:<input type="disabled" name="access_level" value="1"/> <BR />(Access Levels: 0=Super Admin 1=Admin 2=User)<BR />
       <input type="submit" name="submit" value="Add User" />
       </form>
     ';

if (isset ($_SESSION['username']))
{
    if (isset($_POST['Submit']))
    {
        $fullname = $_POST['fullname'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
      //$access_level = $_POST['access_level'];
        $access_level = "1";
      //$grant_date = $_POST['today']; 
        $last_login = "";


        $con = mysql_connect($host,$db_user,$db_pass);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db($db_name, $con); 
        
        mysql_query("INSERT INTO  `uso_users` (  `id` ,  `fullname` ,  `fname` ,  `lname` ,  `username` ,  `password` ,  `access_level` ,  `grant_date` ,  `last_login` ) 
                      VALUES ('',  '$fullname',  '$fname',  '$lname',  '$username',  '$password',  '$access_level',  '$grant_date',  '$last_login');");
    }
    else
    {
       echo "Please Enter All Required Feilds";   
    }
}
else
{
    echo "Please Login.";
    header('Location: http://usocms.com/fortcarson/ul/');
}


mysql_close($con);