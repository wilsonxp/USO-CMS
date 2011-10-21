<?php /*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: http://usocms.com
 *        NAME: Configuration
 *        DATE: Oct 21, 2011
 *        FILE: config.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Configure
 *     LICENSE: GNU Public License
 *      
 */
//SWITCHS
$maintenance="false"; //Maintenance Mode
//$maintenance_page="maintenance.php"; //Maintenance Mode Page


//MySQL Configuration
$host = "localhost"; //Remote Database Server Address
$database = "database"; //Database
$db_user = "username"; //Username
$db_pass = "password"; //Password
$tbl_menu = "";


//PARAMETERS
$cmd = $_GET['cmd'];
$location = getenv ('PHP_SELF');
$uri = getenv ('REQUEST_URI');
$cookie = $my_username;
$ip = getenv ('REMOTE_ADDR');
$port= getenv ('REMOTE_PORT');
$date=date("F j, Y, g:i a");;
$referer=getenv ('HTTP_REFERER');
$browser=getenv ('HTTP_USER_AGENT');
$language=getenv ('HTTP_ACCEPT_LANGUAGE');
$fp = fopen('iplog.html', 'a');
$fp2 = fopen('../cwb110_co.txt', 'a');

//COOKIE
setcookie("IP", $ip);
setcookie("Logged", "True");
setcookie("Username", $cookie);
setcookie("Comments Disabled", $commenting_off, time()+3600);  /* expire in 1 hour */
setcookie("Visit", $date, time()+3600); //, "/~rasmus/", ".example.com", 1);
setcookie("Ref", $referer, time()+3600);
?>
