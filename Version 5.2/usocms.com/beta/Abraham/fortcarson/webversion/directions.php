<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: http://www.usocms.com
 *        NAME: Driving Directions
 *        DATE: October 8, 2011
 *        FILE: directions.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Dynamic Driving Directions
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

/* START CONFIGURATION */
require_once('config/config.php');
/* END CONFIGURATION */

//MYSQL CONNECTION 
if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass)) {die('MySQL Connect Error');}
if (!mysql_select_db($mysql_database)) {die('MySQL Select Error');}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>USO Directions <?PHP echo $datetime; ?></title>
        <meta name="author" content="Christopher Sparrowgrove" />
        <meta name="date" content="January 19, 2011" />
        <meta name="updated" content="November 20, 2011" />
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
        <link rel="stylesheet" type="text/css" href="https://usocms.com/beta/style.css" />
    </head>

    <body>
        <div id="fb-root"></div>
        <script type="text/javascript">
        (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=290220450990671"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
        </script>

        <div class="container">
            <div id="title" style="font-weight:900; font-size:20px; "> USO Fort Carson Directions 
                <div class="fb-like" data-href="https://www.facebook.com/usofortcarson" data-send="false" data-layout="button_count" 
                                 data-width="50" data-show-faces="true" data-colorscheme="dark" data-font="trebuchet ms">
                </div>
            </div>
     
        <table id="menu">
            <tr id="grey">
              <td id="td1" style="font-weight:bold;">Gate</td>
              <td id="td1" style="font-weight:bold;text-align:center;">Directions</td>
            </tr>
        
            <tr>
              <td id="td2" style="font-weight:bold;font-size: 14px;">Gate&nbsp;1</td>
              <td id="td1" style='font-size:8.0pt;font-family:"Courier New"'>
                      <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 0);
                        echo $space1x; 
                      ?>           
              </td>
            </tr>
        
            <tr id="grey">
              <td id="td2" style="font-weight:bold;font-size: 14px;">Gate&nbsp;2</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 1); 
                        echo $space1x;
                      ?>
              </td>
            </tr>
        
            <tr>
              <td id="td2" style="font-weight:bold;font-size: 14px;">Gate&nbsp;3</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 2); 
                        echo $space1x; 
                      ?>
              </td>
            </tr>
        
            <tr id="grey">
              <td id="td2" style="font-weight:bold;font-size: 14px;">Gate&nbsp;4</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 3); 
                        echo $space1x; 
                      ?>            
              </td>
            </tr>
        
            <tr>
              <td id="td2" style="font-weight:bold;font-size: 14px;">Gate&nbsp;5</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 4); 
                        echo $space1x;
                      ?>           
              </td>
            </tr>
        
            <tr id="grey">
              <td id="td2" style="font-weight:bold;font-size: 14px;">Gate&nbsp;20</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 5); 
                        echo $space1x; 
                      ?>            
              </td>
            </tr>
        </table>
<p class="select_footer">
            Version: <?PHP echo $version; ?> &copy;2010-2011 
           <a style='text-decoration:none;' target='_Blank' 
              href='<?PHP echo $copyright_link; ?>' alt="Developer" title="Lead Web Application Developer"><?PHP echo $copyright_label; ?></a><BR />
              <?php include ('fortcarson/links.php'); ?>
        </div>
    </body>
</html>
