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

require_once('../../config.php');

/* END CONFIGURATION */


//DO NOT EDIT BELOW THIS LINE

mysql_connect($host, $db_user, $db_pass)or die("cannot connect"); 
mysql_select_db($database)or die("cannot select DB");

$sql="SELECT * FROM uso_directions";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>
<html>
<head>
 <title>USO Directions <?PHP echo $datetime; ?></title>
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
      width:293px;
      height:295px;
      background-color:white; /* Not Needed */
      }

      table#menu
      {  
      height: 100px;
      width: 500px;
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
      
      td3
      {
      width: 5px;
      heigth: 5px;
      }
            
      span#center
      {
      text-align:center;
      }
      tr#grey
      {
      background-color:grey;
      }
      
      input.content
      {
          width: 600px;
      }
  </style>
 <head>

<body>
<div id="table">
<form name="Directions Update" method="post" action="">
    <div id="title" style="font-weight:900; font-size:20px; "> USO Fort Carson Directions </div>
     
    <table id="menu">
        <tr id="grey">
            <td id="td2" style="font-weight:bold;text-align:center;">GATE</td>
            <td id="td1" style="font-weight:bold;text-align:center;">Directions</td>
        </tr>
 <?PHP while($rows=mysql_fetch_array($result)){ ?>       
        <tr>
              <?PHP $id[]=$rows['id']; ?><?php echo $rows['id']; ?> 
            <td id="td2" style="font-weight:bold;">
             <input type="text" id="gate" name="gate[]" value="<?php echo $rows['gate']; ?>" /> 
            </td>
            <td id="td1" style="font-size:8.0pt;font-family:'Courier New'; text-align:center;">
             <input type="text" class="content" id="directions" name="directions[]" value="<?php echo $rows['directions']; ?>" />   
           </td>
<?PHP     } //DO NOT REMOVE  ?>
    </table>
           <p style="padding-left: 385px; text-align:center;"><input type="submit" name="Submit" value="Submit"></form></p>

    
    
<?PHP
    
// Check if button name "Submit" is active, do this 
if($Submit){
for($i=0;$i<$count;$i++){
$sql1="UPDATE $tbl_name SET gate='$gate[$i]', directions='$directions[$i]', updated='$updated[$i]' WHERE id='$id[$i]'";
$result1=mysql_query($sql1);
}
}

if($result1){
header("location:directions.php");
}
mysql_close();


    echo '<p style="font-size:12px;text-align:center;"> Version: ', $Version;
    echo ' &copy;2010-2011 <a style="text-decoration:none;" href="http://3xsecurityservices.com">3X Security, LLC</a>';
    //include ('footer.php');
    ?>   
</div>
</body>
</html>