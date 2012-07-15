<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY:  
 *     WEBSITE: http://www.site.com
 *        NAME: 
 *        DATE: 
 *        FILE: 
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

/* START CONFIGURATION */
require_once('config/config.php');
/* END CONFIGURATION */

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Down For Maintenance</title>
        <meta name="robots" content="noindex,nofollow" />
        <meta name="author" content="Christopher Sparrowgrove"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
        
    </head>
    
    <body>
        <div class="maintenance_msg">
            <?PHP echo $mode_message ?>
        </div>
    </body>
</html>
