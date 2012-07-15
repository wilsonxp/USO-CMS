<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: https://www.usocms.com
 *        NAME: USO CMS
 *        DATE: January 2010
 *        FILE: index.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: CMS application
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

/* START CONFIGURATION */
$response = "Response: ";
require_once('config/config.php');// Main Configurations Script
require_once('iosdetect.php'); //iOS Check. Set Site Version Dependant on iOS
require_once('locationsconfig.php'); //configure locations
/* END CONFIGURATION */

if ($mode=="1")
{
    include ('maintenance.php');
    exit();
}
else
{
    include ('select.php');
}