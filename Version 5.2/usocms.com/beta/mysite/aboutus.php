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
        <link rel="stylesheet" type="text/css" href="http://usocms.com/beta/mysite/style.css" />
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
                            <h1>About Us</h1>
			<br /><br />
			3X Security Services is an independent contracted Information Security Company
                        with a great reputation and service guarantee. 3XSS also does computer repair
                        and PHP Web Programming for hire. We operate in:
                        <ul>
                            <li>Washington State</li>
                            <li>Oregon State</li>
                            <li>Colorado State</li>
                            <li>Texas State</li>
                        </ul>
                        We have the best service and price guaranteed but if you find a better price 
                        we will beat it by 30%. We don't take your money up front and we don't claim 
                        to fix something we can not fix. A total of over 13 years of experiance is what
                        makes us good at our job and we do it right the first time everytime.
                        We repair all kinds of devices and computers but here is a small list of what we
                        repair:
                        <ul>
                            <li>iPod/iPhone/iPad</li>
                            <li>Cell Phones</li>
                            <li>Desktop PC's</li>
                            <li>Laptops</li>
                            <li>Tablets</li>
                            <li>& More</li>
                        </ul>
			</div>
            <div id="bottom">
                <a href="home"
		Copyright 2011 <a href="">Christopher Sparrowgrove</a>, Design by <a href="mailto:csparrowgrove@gmail.com">Christopher Sparrowgrove</a>
		</div>
        </div>
    </body>
</html>
