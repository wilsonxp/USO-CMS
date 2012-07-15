<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: http://www.usocms.com
 *        NAME: Food Menu
 *        DATE: October 2, 2011
 *        FILE: menu.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Dynamic Food Menu
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
        <title>USO Food Menu <?PHP echo $datetime; ?></title>
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
            <div id="title" style="font-weight:900; font-size:20px;"> USO Fort Carson Food Menu 
                <div class="fb-like" data-href="https://www.facebook.com/usofortcarson" data-send="false" data-layout="button_count" 
                                 data-width="50" data-show-faces="true" data-colorscheme="dark" data-font="trebuchet ms">
                </div>
            </div>
     
        <table id="menu">
            <tr id="grey">
              <td id="td1" style="font-weight:bold;">Day</td>
              <td id="td1" style="font-weight:bold;text-align:center;">Lunch</td>
              <td id="td1" style="font-weight:bold;text-align:center;">Dinner</td>
            </tr>
        
            <tr>
              <td id="td2" style="font-weight:bold;font-size: 14px;">Sunday</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT lunch FROM foodmenu'), 0); 
                        echo $space1x;
                      ?>
              </td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 0);
                        echo $space1x; 
                      ?>
              </td>
            </tr>
        
            <tr id="grey">
              <td id="td2" style="font-weight:bold;font-size: 14px;">Monday</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT lunch FROM foodmenu'), 1); 
                        echo $space1x; 
                      ?>          
              </td>
              <td id="td1" style='font-size:8.0pt;font-family:"Courier New"; text-align: center;'>
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 1);
                        echo $space1x; 
                      ?>          
              </td>
            </tr>
        
            <tr>
              <td id="td2" style="font-weight:bold;font-size: 14px;">Tuesday</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT lunch FROM foodmenu'), 2); 
                        echo $space1x; 
                      ?>           
              </td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 2); 
                        echo $space1x;
                      ?>
              </td>
            </tr>
        
            <tr id="grey">
              <td id="td2" style="font-weight:bold;font-size: 14px;">Wednesday</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 3);
                        echo $space1x; 
                      ?>
              </td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 3); 
                        echo $space1x; 
                      ?>
              </td>
            </tr>
        
            <tr>
              <td id="td2" style="font-weight:bold;font-size: 14px;">Thursday</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 4); 
                        echo $space1x; 
                      ?>
              </td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 4); 
                        echo $space1x; 
                      ?>            
              </td>
            </tr>
        
            <tr id="grey">
              <td id="td2" style="font-weight:bold;font-size: 14px;">Friday</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 5); 
                        echo $space1x;
                      ?>            
              </td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 5); 
                        echo $space1x;
                      ?>           
              </td>
            </tr>
        
            <tr>
              <td id="td2" style="font-weight:bold;font-size: 14px;">Saturday</td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 6); 
                        echo $space1x; 
                      ?>          
              </td>
              <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 6); 
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
