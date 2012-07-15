<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: http://www.usocms.com
 *        NAME: Configuration File
 *        DATE: November 15, 2011
 *        FILE: config.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Global Configuration File
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

require_once ('mysql.config.php'); //MY SQL Configuration
$copyright_link = "http://facebook.com/christopher.sparrowgrove";
$copyright_label = "Christopher Sparrowgrove";

//MY SQLi Config
require_once ('mysqli.config.php');

$version = $_SESSION['version'];
$mode= $_SESSION['mode'];
$mode_message = $_SESSION['mode_msg'];

//COOKIE
//setcookie("Location:", $location, time()+3600);
//setcookie("IP:", $ip, time()+3600);
//setcookie("Date:", $date, time()+3600);
//setcookie("User:", $username, time()+3600);
//setcookie("Browser:", $browser, time()+3600); 
