<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: 
 *     COMPANY:  
 *     WEBSITE: http://tedawebguy.com/code-snippets/ios-detection-via-php
 *        NAME: iOS Detection
 *        DATE: 
 *        FILE: iosdetect.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  Detects ioS and sets the proper directory
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 20?? - All Rights Reserved   
 *      
 */



function iOSDetect() {
   $browser = strtolower($_SERVER['HTTP_USER_AGENT']); // Checks the user agent
   if(strstr($browser, 'iphone') || strstr($browser, 'ipod')) {
      $device = 'iPhone';
   } else { $device = 'default'; }	
   return($device);
}
 
iOSDetect();
 
// To use it in you page, use:
if(iOSDetect() == 'iPhone') {
  $siteversion = 'ios'; //Files Directory
} 
if(iOSDetect() == 'default') {
   $siteversion = 'webversion'; //Files Directory
}
?>