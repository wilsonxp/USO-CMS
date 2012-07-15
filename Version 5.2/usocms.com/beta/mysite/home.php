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
			<img id="profilepic" src="https://fbcdn-sphotos-a.akamaihd.net/hphotos-ak-ash4/310285_201302763275733_100001880332289_488122_2079078522_n.jpg">
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.php?p=home">Home</a></li>
					<li><a href="index.php?p=aboutus">About Me</a></li>
					<li><a href="index.php?p=partners">My Favorite's</a></li>
					<li><a href="index.php?p=prices">Contact Me</a></li>
					<li><a href="javascript:void(0);">My Projects</a></li>
					<li><a href="javascript:void(0);" onclick="alert('Sorry for the alert. Anyways This is coming soon with daily limits');">E-Mail Flooder</a></li>
				</ul>
			</div>
			<div id="stuff">
                            <h1>Home</h1>
			<br /><br />
			My Name is Christopher but my friends call me Chris.<br />
                        I used to run a computer repair business but now I<br />
                        pretty much just do PHP Web Programming which I have<br />
                        been doing for about 3 years actively. I also do some <br />
                        Information Security Consulting on the side. <p />
                        
                        Most of my PHP projects have been scrapped because of the time<br />
                        required that I wasn't able to put into development but the projects<br />
                        that did make the cut are available via my git repository at <a href="http://github.com">github</a><p />
                        
                        Below are my current Projects I am working on:<br />
                        <ul>
                            <li><b>USO CMS</b> - A Content Managment System <br />
                               for the Fort Carson USO to display activities, <br />
                               menus, directions, feedback forms, and more.</li>
                            <li><b>Dynamic PHP Page</b> - A secure script to convert <br />
                                your website into a dynamic webpage via the index.php page<br />
                                and allows for calling of other pages via the ?page= parameter</li>
                            <li><b>Visitor2D Logger</b> - This is a MySQL + PHP Visitor logger<br />
                                which stores all information in a MySQL database</li>
                            <li><b>Dynamic Media Gaurd</b> - This is a script that will allow<br />
                                any webmaster to protect the location of their images directory<br/>
                                by displaying the pictures through a PHP script instead of calling<br />
                                the file from exact location which reveals all files.<br />
                       <address>This was written for those who do not wish to limit directory listing.</address>
                            </li>
                            <li><b>IP Banning Script</b> - A script to ban users by IP Address or <br />
                                redirect them based on IP.</li>  
                            <li><b>My Commit</b> - A Commenting System for for blogs or social networks.</li>
                            <li><b>PHP SMTP Server</b> - an SMTP Server using the the PHP Mailer library.</li>
                        </ul>
			</div>
            <div id="bottom">
                <a href="home"
		Copyright 2011 <a href="">Christopher Sparrowgrove</a>, Design by <a href="mailto:csparrowgrove@gmail.com">Christopher Sparrowgrove</a>
		</div>
        </div>
    </body>
</html>