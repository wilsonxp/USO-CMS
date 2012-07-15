<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: http://www.usocms.com
 *        NAME: Configuration File
 *        DATE: December 06, 2011
 *        FILE: tracker.config.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Global Tracking Configuration File
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

date_default_timezone_set('America/Denver');
$ip = getenv ('REMOTE_ADDR');
$referer=getenv ('HTTP_REFERER');
$browser=getenv ('HTTP_USER_AGENT');
$language=getenv ('HTTP_ACCEPT_LANGUAGE');
$date=date("F j, Y, g:i a");
$location = getenv ('PHP_SELF');
$uri = getenv ('REQUEST_URI');
$site = getenv ('SERVER_NAME');