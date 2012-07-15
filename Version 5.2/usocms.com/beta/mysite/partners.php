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
        <title></title>
        <meta name="author" content="Christopher Sparrowgrove" />
        <meta name="date" content="" />
        <meta name="company" content="" />
        <meta name="description" content="" />
        <meta name="license" content="http://www.site.com/index.php?get=license" />
        <meta name="keywords" lang="en-us" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="non_profit" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="" />
        <meta property="fb:admins" content="100001880332289" />
        <meta name="robots" content="index,follow" />
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head> 

    <body>
        <div id="wrapper">
            <div id="adspace">[Advertise Here]
		</div>
            <div id="ipspace">Your IP Address Is: <?PHP $ip = $_SERVER['REMOTE_ADDR']; echo $ip; ?></div>
            <div id="header">
			Logo
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.php?p=home">Home</a></li>
					<li><a href="index.php?p=aboutus">About US</a></li>
					<li><a href="index.php?p=partners">Partners</a></li>
					<li><a href="index.php?p=prices">Prices</a></li>
					<li><a href="javascript:void(0);">Page 5</a></li>
					<li><a href="javascript:void(0);" onclick="alert('Sorry for the alert. Anyways This is coming soon with daily limits');">E-Mail Flooder</a></li>
				</ul>
			</div>
			<div id="stuff">
                            <h1>Our Partners</h1>
			<br /><br />
                        <ul>
                            <li>Wild Westsider Products</li>
                            <li>Kiki's Party Planning</li>
                            <li><a href="http://matthazelwood.com">http://matthazelwood.com</a>{Friend}</li>
                            <li><a href="http://cwb110.com">http://cwb110.com</a>{CWB 110 Class Projects}</li>
                            <li><a href="http://3xsecurityservices.com">http://3xsecurityservices.com</a>{PHP Projects Hosting Site}</li>
                            <li><a href="http://sparrowgrove.com">http://sparrowgrove.com</a>{Family Public Pages}</li>
                            <li><a href="https://usocms.com/fortcarson/">http://usocms.com</a>{USO CMS}</li>
                            <li><a href="http://jodiestendergroom.com/">http://jodiestendergroom.com</a>{Friend}</li>
                            <li><a href="http://kealjones.com">http://kealjones.com</a>{Friend}</li>
                            <li><a href="http://winxptk.com">http://winxptk.com</a>{Expired Old Domain-Hosting Hacks}</li>
                        </ul>
			</div>
            <div id="bottom">
		Copyright 2011 <a href="">Christopher Sparrowgrove</a>, Design by <a href="mailto:csparrowgrove@gmail.com">Christopher Sparrowgrove</a>
		</div>
        </div>
    </body>
</html>
