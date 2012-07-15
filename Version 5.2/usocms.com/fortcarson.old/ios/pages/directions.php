<!DOCTYPE html>
<?PHP 
/*
* -----------------INFORMATION & LICENSING-----------------
* 
*      AUTHOR: Christopher Sparrowgrove
*     COMPANY: USO CMS
*     WEBSITE: http://usocms.com
*        NAME: USO Directions
*        DATE: Oct 8, 2011
*     UPDATED: Nov 5, 2011 
*        FILE: directions.php
*    LANGUAGE: PHP Hypertext Processor (PHP)
* DESCRIPTION: Directions Web Application for iPhone
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
            <div style="text-align:center;font-size:15px;">USO Fort Carson Directions</div>
            
            <table id="menu">
                <tr id="grey">
                    <td style="font-size:8px;">Gate</td>
                    <td style="font-size:8px;">Directions</td>
                </tr>
                <tr>
                    <td style="font-size:8px;">GATE&nbsp;1</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 0); //Output Gate 1 Directions
                        echo $space1x;
                        ?>
                    </td>
                </tr>
                <tr id="grey">
                    <td style="font-size:8px;">GATE&nbsp;2</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 1); //Output Gate 2 Directions
                        echo $space1x;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:8px;">GATE&nbsp;3</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 2); //Output Gate 3 Directions
                        echo $space1x;
                        ?>
                    </td>
                </tr>
                <tr id="grey">
                    <td style="font-size:8px;">GATE&nbsp;4</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 3); //Output Gate 4 Directions
                        echo $space1x;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:8px;">GATE&nbsp;5</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 4); //Output Gate 5 Directions
                        echo $space1x;
                        ?> 
                    </td>
                </tr>
                <tr id="grey">
                    <td style="font-size:8px;">GATE&nbsp;20</td>
                    <td style="font-size:6px;text-align:center;">
                        <?PHP
                        echo mysql_result(mysql_query('SELECT directions FROM uso_directions'), 5); //Output Gate 4 Directions
                        echo $space1x;
                        ?>
                    </td>
                </tr>
            </table>
            <?PHP 
            echo '<p id="version">Version: '.$version.' &copy;2010-2011 
                  <a style="text-decoration:none;" target="_Blank" href="https://usocms.com/aboutdeveloper">USO CMS</a>
                  </p>';
            echo '<p id="navi">'.$links.'<br/>'; 
            ?>
        </div>
</body>
</html>
