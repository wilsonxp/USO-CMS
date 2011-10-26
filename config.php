<?php 
/*
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
 * DESCRIPTION: Config
 *     LICENSE: GNU Public License
 *      
 */

//SWITCHS
$maintenance="false"; //Maintenance Mode
//$maintenance_page="maintenance.php"; //Maintenance Mode Page

//MySQL Configuration
$host = "Localhost"; //Remote Database Server Address
$database = "database"; //Database
$db_user = "user"; //Username
$db_pass = "password"; //Password

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
$fp = fopen('iplog.html', 'a');
$fp2 = fopen('../cwb110_co.txt', 'a');

//COOKIE
setcookie("IP", $ip);
setcookie("Port:", $port);
setcookie("Logged", "True");
setcookie("Ref:", $referer);
setcookie("Location", $location );
setcookie("Browser:", $browser);
setcookie("Username", $cookie);
setcookie("Visit", $date, time()+3600); 
?>
