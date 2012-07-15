<?PHP 
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY:  3X Security, LLC (3X Security Services)
 *     WEBSITE: http://3xsecurityservices.com
 *        NAME: USO Food Menu
 *        DATE: 
 *        FILE: menu.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  A food menu for what the Fort Carson Uso Is Serving Through The Week
 *     LICENSE: Read license.txt
 *      
 */ 

/* START CONFIGURATION */

error_reporting(0); //turn off error reporting

include('config.php');

/* END CONFIGURATION */


//DO NOT EDIT BELOW THIS LINE

$connect = mysql_connect('mysql18.freehostia.com', 'chrspa13_ei', 'cds1721win');
         if (!$connect) {
             //header('Location: down.php');
             die($failsafe . mysql_error());
             }
         if (!mysql_select_db('chrspa13_ei')) {
             //header('Location: down.php');
             die($db_select_error . mysql_error());
             }
?>
<html>
<head>
 <title>USO Food Menu <?PHP echo $datetime; ?></title>
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
      width:593px;
      height:295px;
      background-color:white; /* Not Needed */
      }

      table#menu
      {  
      height: 270px;
      width: 592px;
      border: 1px solid grey;
      color: black;
      }

      td1
      {
      width: 200px;
      height: 5px;
      }

      td2
      {
      width: 77px;
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
 <head>

<body>
<div id="table">
    <div id="title" style="font-weight:900; font-size:20px; "> USO Fort Carson Food Menu </div>
     
    <table id="menu">
        <tr id="grey">
            <td id="td1" style="font-weight:bold;">Day</td>
            <td id="td1" style="font-weight:bold;text-align:center;">Lunch</td>
            <td id="td1" style="font-weight:bold;text-align:center;">Dinner</td>
        </tr>
        
        <tr>
            <td id="td2" style="font-weight:bold;">Sunday</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT lunch FROM foodmenu');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 0); //Output Sunday
                        echo $space1x; 
                      ?>
            </td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT dinner FROM foodmenu');
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
            <td id="td2" style="font-weight:bold;">Monday</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT lunch FROM foodmenu');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 1); //Output Sunday
                        echo $space1x; 
                      ?>          
            </td>
            <td id="td1" style='font-size:8.0pt;font-family:"Courier New"'>
                 <center>
                      <?PHP
                        $results = mysql_query('SELECT dinner FROM foodmenu');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 1); //Output Sunday
                        echo $space1x; 
                      ?>
                 </center>            
            </td>
        </tr>
        
        <tr>
            <td id="td2" style="font-weight:bold;">Tuesday</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT lunch FROM foodmenu');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 2); //Output Sunday
                        echo $space1x; 
                      ?>           
            </td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT dinner FROM foodmenu');
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
            <td id="td2" style="font-weight:bold;">Wednesday</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT lunch FROM foodmenu');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 3); //Output Sunday
                        echo $space1x; 
                      ?>
            </td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT dinner FROM foodmenu');
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
            <td id="td2" style="font-weight:bold;">Thursday</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT lunch FROM foodmenu');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 4); //Output Sunday
                        echo $space1x; 
                      ?>
            </td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT dinner FROM foodmenu');
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
            <td id="td2" style="font-weight:bold;">Friday</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT lunch FROM foodmenu');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 5); //Output Sunday
                        echo $space1x; 
                      ?>            
            </td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT dinner FROM foodmenu');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 5); //Output Sunday
                        echo $space1x; 
                      ?>           
            </td>
        </tr>
        
        <tr>
            <td id="td2" style="font-weight:bold;">Saturday</td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT lunch FROM foodmenu');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 6); //Output Sunday
                        echo $space1x; 
                      ?>          
            </td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
                      <?PHP
                        $results = mysql_query('SELECT dinner FROM foodmenu');
                        if (!$results) 
                            {
                            die('Bad Query: ' . mysql_error());
                            }
                        echo mysql_result($results, 6); //Output Sunday
                        echo $space1x; 
                      ?>            
            </td>
        </tr>
    </table>
    <?PHP
    echo '<p style="font-size:12px;text-align:center;"> Version: ', $Version;
    echo ' &copy;2010-2011 <a style="text-decoration:none;" href="http://3xsecurityservices.com">3X Security, LLC</a> <br />';
    echo '<a style="text-decoration:none;" href="/ul">*</a> Food Menu | <a href="index.php?page=directions">Directions</a> | Activities | Hours of Operation | Contact Us <a style="text-decoration:none;" href="/ul">*</a>';
    //include ('footer.php');
    ?>   
</div>
</body>
</html>