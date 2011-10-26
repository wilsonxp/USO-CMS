<?php 
/* -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY:  USO CMS
 *     WEBSITE:  http://usocms.com
 *        NAME: IP Address Logger
 *        DATE: Oct 21, 2011
 *        FILE: iplogger.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  Logs all IP address's of visitors to a flat file
 *     LICENSE: GNU Public License      
 */ 

/* START CONFIGURATION */
require_once ('../config.php');
/* END CONFIGURATION */

if (!mysql_connect($host, $db_user, $db_pass)) {die($failsafe . mysql_error());}
if (!mysql_select_db($database)) {die($db_select_error . mysql_error());}

mysql_query("INSERT INTO  `Visitors` (  `id` ,  `language` ,  `ip` ,  `port` ,  `date` ,  `loc` ,  `referer` ,  `cookie` ,  `browser` ) 
VALUES ('',  '$language',  '$ip',  '$port',  '$date',  '$site$uri',  '$referer',  '$cookie',  '$browser');");

?>