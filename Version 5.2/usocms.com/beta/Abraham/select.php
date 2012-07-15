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
include ('getuso.php');
require_once ('iosdetect.php');
require_once ('locationsconfig.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Select Your Local USO</title>
        <meta name="author" content="Christopher Sparrowgrove" />
        <meta name="date" content="January 19, 2011" />
        <meta name="company" content="USOCMS" />
        <meta name="description" content="CMS Application for USO" />
        <meta name="license" content="http://www.usocms.com/index.php?get=license" />
        <meta name="keywords" lang="en-us" content="uso cms, uso, fortcarson, fort, carson, colorado, army, air force, united service" />
        <meta property="og:title" content="USO CMS" />
        <meta property="og:type" content="non_profit" />
        <meta property="og:url" content="https://usocms.com/" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="USOCMS" />
        <meta property="fb:admins" content="100001880332289" />
        <meta name="robots" content="index,follow" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <style type="text/css">
            .container {background-color: grey;}
        </style>
    </head>
    
    <body>
        <div class="container">
            <form action="" method="post" name="Branch_Selection">
            <p class="uso">
                Select Your Local USO: <BR />
                <select id="location" name="location">
                    <option id="fortcarson" value="fortcarson" selected>Fort Carson USO</option>
                    <option id="location" value="beta">BETA (NO ACCESS)</option>
                </select> <BR />
                <input type="submit" id="submit">
            </form>  
            <?PHP echo $response; ?>
        </div>
        <p class="select_footer">
            Version: <?PHP echo $version; ?> &copy;2010-2011 
           <a style='text-decoration:none;' target='_Blank' 
              href='<?PHP echo $copyright_link; ?>' alt="Developer" title="Lead Web Application Developer"><?PHP echo $copyright_label; ?></a><BR />
        Locations: <a href="index.php?location=fortcarson" alt="usofortcarson" title="Fort Carson USO">Fort Carson</a> | <a href="index.php?location=beta">Beta</a>
    </body>
</html>
