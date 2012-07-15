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
                            <h1>Price List</h1>
			<br /><br />
			3X Security Services has a Right Price Guarantee which means the price is based on
                        what you think the fair value should be but the list below reflects the base price
                        which is non-negotible unless in the case of a price challenge. We have flat rates
                        and hourly rates depending on how you want to hire us. 
                        <BR />Malware Removal (Flat Rate*/Hourly)
                        <ul>
                            <li>Trojan Horse Removal : $35/$20ph</li>
                            <li>Worm Removal : $100/$35ph</li>
                            <li>Spyware Removal : $35/$20ph</li>
                            <li>Adware Removal : $35/20ph</li>
                            <li>Rouge Anti-Virus : $25/$25ph</li>
                            <li>Hijack/Hook Removal : $15/$15ph</li>
                            <li>Rootkit Removal : $150/$NO PRICE</li>
                        </ul>
                        <BR />
                        System Maintenance Updates & Configuration (Hourly Price)
                        <ul>
                            <li>Security Settings : $25</li>
                            <li>Software Updates : $25</li>
                            <li>Configuration : $25 - $60</li>
                            <li>Other : $25 - $60</li>
                        </ul>
                        <BR />
                        Developer For Hire
                        <ul>
                            <li>PHP Web Development -> $25 Per Hour</li>
                            <li>Facebook Web Application Development -> $25 Per Hour</li>
                            <li>Div Website Development -> $15 Per Hour (Structure Only)</li>
                            <li>Hosting Services** -> $5 Per Month</li>
                        </ul>
                        <div style="font-size: small;">
                            * Flat Rates are subject to change<BR/>
                            ** Hosting is 50MB with SSI Included. 1 FTP Account
                        </div>
                        </div>
            <div id="bottom">
                <a href="home"
		Copyright 2011 <a href="">Christopher Sparrowgrove</a>, Design by <a href="mailto:csparrowgrove@gmail.com">Christopher Sparrowgrove</a>
		</div>
        </div>
    </body>
</html>
