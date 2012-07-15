<?php 
/* -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: http://usocms.com
 *        NAME: Configuration
 *        DATE: Oct 21, 2011
 *        FILE: config.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Config
 *     LICENSE: GNU Public License     
 */
// Configurations: Switchs, MySQL, Params, Cookies, Facebook, Login, Version, Date/Time, Extra
 
//SWITCHS
$maintenance="false"; //Maintenance Mode
//$maintenance_page="maintenance.php"; //Maintenance Mode Page

//MySQL Configuration
$host = "mysql18.freehostia.com"; //Remote Database Server Address
$database = "chrspa13_ei"; //Database
$db_user = "chrspa13_ei"; //Username
$db_pass = "cds1721win"; //Password

//PARAMETERS
date_default_timezone_set('America/Denver');
$cmd = $_GET['cmd'];
$location = getenv ('PHP_SELF');
$uri = getenv ('REQUEST_URI');
$site = getenv ('SERVER_NAME');
$cookie = $my_username;
$ip = getenv ('REMOTE_ADDR');
$port= getenv ('REMOTE_PORT');
$date=date("F j, Y, g:i a");;
$referer=getenv ('HTTP_REFERER');
$browser=getenv ('HTTP_USER_AGENT');
$language=getenv ('HTTP_ACCEPT_LANGUAGE');

//COOKIE
setcookie("IP", $ip);
setcookie("Port:", $port);
setcookie("Logged", "True");
setcookie("Ref:", $referer);
setcookie("Location", $location );
setcookie("Browser:", $browser);
setcookie("Username", $cookie);
setcookie("Visit", $date, time()+3600); 

//FACEBOOK CONNECT CONFIGURATION
$app_id = "290220450990671";
$app_secret = "22dfdbe74b40d29429ff3dffe78126db";
$my_url = "http://usocms.com/fortcarson/ul/facebook.php";
$permissions ="user_hometown,user_location,email";
   
//Login Configuration (/members/index.php)
$login_username = $_SESSION['username']; //USERNAME
$success = "adminpannel.php"; //IF LOGGED IN (AUTHERIZED USER)
$fail = "members.php"; //NOT LOGGED IN. DO NOT CHANGE

//Version Information
$Maj_Ver = "5."; //major correction: redesign, recoding php, security, etc
$Med_Ver = "2"; //minor corrections: Standards, HTML, CSS, etc
$Min_Ver = ""; //small corrections: spelling & gramar
$Build_Ver = ""; //beta version
$Ver_Break = "";
$Version = $Maj_Ver . $Ver_Break . $Med_Ver . $Ver_Break . $Min_Ver . $Ver_Break . $Build_Ver;

//Date & Time Configurations
date_default_timezone_set('America/Denver'); //Default Time Zone: Mountain Time                                            
$date= date("l, M d, Y"); // Default Format: Day, Month Date, Year
$time24= date(" Hi"); // Default Format is 24 Hour Time
$time12=date("(h:i:sA)"); //Default Format is 12 Hour Time
$datetime= "$date $time24 $time12"; //Display Date & Time

//Extra Variables
$space1x = '&nbsp;';
$space5x = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$space32x = $space5x . $space5x . $space5x . $space5x . $space5x . $space5x;
?>