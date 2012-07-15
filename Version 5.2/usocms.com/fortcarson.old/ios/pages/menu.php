<!DOCTYPE html>
<?PHP 
/*
* -----------------INFORMATION & LICENSING-----------------
* 
*      AUTHOR: Christopher Sparrowgrove
*     COMPANY: USO CMS
*     WEBSITE: http://usocms.com
*        NAME: USO Food Menu
*        DATE: Oct 2, 2011
*     UPDATED: Nov 5, 2011 
*        FILE: menu.php
*    LANGUAGE: PHP Hypertext Processor (PHP)
* DESCRIPTION: Food Menu Web Application for iPhone
*     LICENSE: Read license.txt
*   
* Copyright Info: iPhone Compatability is Copyright (C) 2007 Apple Inc.
*      
*/ 

/* START CONFIGURATION */
require_once('../config.php');
require_once('../footer.php');
/* END CONFIGURATION */

//DO NOT EDIT BELOW THIS LINE
if (!mysql_connect($host, $db_user, $db_pass)) {die('Database Connection Error');}
if (!mysql_select_db($database)) {die($db_select_error . mysql_error());}
?>
<head>
    <title>USO Food Menu <?PHP echo $datetime; ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta property="og:title" content="USO CMS/ Fort Carson" />
    <meta property="og:type" content="non_profit" />
    <meta property="og:url" content="https://usocms.com/fortcarson" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="USO CMS" />
    <meta property="fb:admins" content="100001880332289" />
    <meta name="author" content="Christopher Sparrowgrove" />
    <meta name="company" content="USO CMS" />
    <meta name="date" content="May 17, 2011" />
    <meta name="description" content="Dynamic Food Menu" />
    <meta name="license" content="http://usocms.com/license.txt" />
    <meta name="dol" content="" />
    <meta name="keywords" lang="en-us" content="USO, Fort Carson, Food Menu" />
    <meta name="robots" content="index,follow" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    
    <script type="text/javascript" src="functions.js"></script>
</head>

<body class="portrait">
    <div id="container">
        <div id="fb-root"></div>
            <div style="text-align:center;font-size:15px;">USO Fort Carson Food Menu</div>
            
            <table id="menu">
                <tr id="grey">
                    <td style="font-size:8px;">Day</td>
                    <td style="font-size:8px;text-align:center;">Lunch</td>
                    <td style="font-size:8px;text-align:center;">Dinner</td>
                </tr>
                <tr>
                    <td style="font-size:8px;">Sunday</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT lunch FROM foodmenu'), 0); //Output Sunday
                        echo $space1x;
                        ?>
                    </td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 0); //Output Sunday
                        echo $space1x;
                        ?>                        
                    </td>
                </tr>
                <tr id="grey">
                    <td style="font-size:8px;">Monday</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT lunch FROM foodmenu'), 1); //Output Monday
                        echo $space1x;
                        ?>
                    </td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 1); //Output Monday
                        echo $space1x;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:8px;">Tuesday</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT lunch FROM foodmenu'), 2); //Output Tuesday
                        echo $space1x;
                        ?>
                    </td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT diner FROM foodmenu'), 2); //Output Tuesday
                        echo $space1x;
                        ?>
                    </td>
                </tr>
                <tr id="grey">
                    <td style="font-size:8px;">Wednesday</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT lunch FROM foodmenu'), 3); //Output Wednesday
                        echo $space1x;
                        ?>
                    </td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 3); //Output Wednesday
                        echo $space1x;
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td style="font-size:8px;">Thursday</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT lunch FROM foodmenu'), 4); //Output Thursday
                        echo $space1x;
                        ?> 
                    </td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 4); //Output Thursday
                        echo $space1x;
                        ?>
                    </td>
                </tr>
                <tr id="grey">
                    <td style="font-size:8px;">Friday</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT lunch FROM foodmenu'), 5); //Output Friday
                        echo $space1x;
                        ?>
                    </td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 5); //Output Friday
                        echo $space1x;
                        ?>       
                    </td>
                </tr>
                <tr>
                    <td style="font-size:8px;">Saturday</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT lunch FROM foodmenu'), 6); //Output Saturday
                        echo $space1x;
                        ?>
                    </td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT dinner FROM foodmenu'), 6); //Output Saturday
                        echo $space1x;
                        ?>
                    </td>
                </tr>
            </table>
            <?PHP 
            echo '<p id="version">Version: '.$version.'&copy;2010-2011 
                  <a style="text-decoration:none;" target="_Blank" href="https://usocms.com/aboutdeveloper">USO CMS</a>
                  </p>';
            echo '<p id="navi">'.$links.'<br/>'; 
            ?>
        </div>
</body>
</html>