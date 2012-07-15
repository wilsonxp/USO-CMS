<?PHP 
/* -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY:  3X Security, LLC (3X Security Services)
 *     WEBSITE: http://3xsecurityservices.com
 *        NAME: USO Food Menu
 *        DATE: Oct 8, 2011
 *        FILE: Directions.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  A directions to the Fort Carson USO
 *     LICENSE: Read license.txt     
 */ 

/* START CONFIGURATION */
require_once ('../config.php');
/* END CONFIGURATION */

//DO NOT EDIT BELOW THIS LINE
if (!mysql_connect($host, $db_user, $db_pass)) { die("Database Connect Error");}
if (!mysql_select_db($database)) { die("Database Select Error");}
?>
<html>
<head>
 <title>USO Directions <?PHP echo $datetime; ?></title>
 <meta property="og:title" content="USO CMS/ Fort Carson" />
 <meta property="og:type" content="non_profit" />
 <meta property="og:url" content="https://usocms.com/fortcarson" />
 <meta property="og:image" content="" />
 <meta property="og:site_name" content="USO CMS" />
 <meta property="fb:admins" content="100001880332289" />
 <meta http-equiv="Content-Type" content="application/xhtml+xml;charset=UTF-8"/>
 <meta name="author" content="Christopher Sparrowgrove" />
 <meta name="date" content="May 17, 2011" />
 <meta http-equiv="Cache-Control" content="no-cache"/>
 <meta http-equiv="Cache-Control" content="max-age=120"/>
 <meta http-equiv="Content-Disposition" content="inline; filename=spreadsheet.xls"/>
 <meta http-equiv="X-UA-Compatible" content="IE=8"/>
 <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
 <meta name="company" content="3X Security Services, NLC" />
 <meta name="description" content="Dynamic Food Menu" />
 <meta name="license" content="http://3xsecurityservices.com/licenses.php?license=uso" />
 <meta name="dol" content="" />
 <meta name="keywords" lang="en-us" content="USO, Fort Carson, Food Menu" />
 <meta name="robots" content="index,nofollow" />
  <link rel="stylesheet" type="text/css" href="style.css" />

  <style type="text/css">
      
      div#table
      {
      width:510px;
      height:295px;
      background-color:white; /* Not Needed */
      }

      table#menu
      {  
      height: 100px;
      width: 510px;
      border: 1px solid grey;
      color: black;
      }

      td1
      {
      width: 5px;
      height: 5px;
      }

      td2
      {
      width: 5px;
      height: 5px;
      }
            
      span#center
      {
      text-align:center;
      }
      tr#grey
      {
      background-color:grey;
      }
  </style>
 </head>

<body>
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=290220450990671"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
    </script>


    <div id="table">
        <div id="title" style="font-weight:900; font-size:20px; "> USO Fort Carson Directions 
            <div class="fb-like" data-href="https://www.facebook.com/usofortcarson" data-send="false" data-layout="button_count" data-width="50" 
                                data-show-faces="true" data-colorscheme="light" data-font="trebuchet ms">
            </div>    
        </div>
     
    <table id="menu">
        <tr id="grey">
            <td id="td2" style="font-weight:bold;text-align:center;">GATE</td>
            <td id="td1" style="font-weight:bold;text-align:center;">Directions</td>
        </tr>
        
        <tr>
            <td id="td2" style="font-weight:bold;">GATE&nbsp;1</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT directions FROM uso_directions');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 0); //Output Sunday
                        echo $space1x; 
                      ?>
            </td>
       </tr>
        
        <tr id="grey">
            <td id="td2" style="font-weight:bold;">GATE&nbsp;2</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT directions FROM uso_directions');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 1); //Output Sunday
                        echo $space1x; 
                      ?>          
            </td>
        </tr>
        
        <tr>
            <td id="td2" style="font-weight:bold;">GATE&nbsp;3</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT directions FROM uso_directions');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 2); //Output Sunday
                        echo $space1x; 
                      ?>           
            </td>
        </tr>
        
        <tr id="grey">
            <td id="td2" style="font-weight:bold;">GATE&nbsp;4</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT directions FROM uso_directions');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 3); //Output Sunday
                        echo $space1x; 
                      ?>
            </td>
        </tr>
        
        <tr>
            <td id="td2" style="font-weight:bold;">GATE&nbsp;5</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT directions FROM uso_directions');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 4); //Output Sunday
                        echo $space1x; 
                      ?>
            </td>
        </tr>
        
        <tr id="grey">
            <td id="td2" style="font-weight:bold;">GATE&nbsp;20</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT directions FROM uso_directions');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 5); //Output Sunday
                        echo $space1x; 
                      ?>            
            </td>
        </tr>
    </table>
    <?PHP
    echo '<p style="font-size:12px;text-align:center;"> Version: ', $Version;
    echo ' &copy;2010-2011 <a style="text-decoration:none;" href="http://facebook.com/3Xsec">3X Security, LLC</a><br />';
    echo $links;
    ?>   
</div>
</body>
</html>