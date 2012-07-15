<?PHP
/*
// SOME CODE FROM: http://www.phpeasystep.com/mysql/10.html
// There Method Was Easier and Better Programmed Minus The Security Updates I will release for it.
//
*/
require_once ('../../config.php');
//requrie_once('../footer.php');


// Connect to server and select databse.
mysql_connect($host, $db_user, $db_pass)or die("cannot connect"); 
mysql_select_db($database)or die("cannot select DB");

$sql="SELECT * FROM foodmenu";
$result=mysql_query($sql);

// Count table rows 
$count=mysql_num_rows($result);
?>
<!DOCTYPE html>
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
     <link rel="stylesheet" type="text/css" href="../style.css" />
      <style type="text/css">
       div#content
       {
           text-align: center;
           width:570px;
           height:270px;
           background-color:white;
           padding: 5px;
       }
       p
       {
           text-align:center;
       }

       input.content
       {
           width: 200px;
       }

       input.content2
       {
           width: 80px;
       }
      </style>
 </head>
 
 <body> 
 <div id="content">
  <strong>Update Directions to USO</strong><p />
   <table width="500" border="0" cellspacing="1" cellpadding="0">
    <form name="form1" method="post" action="">
     <tr> 
      <td>
       <table width="500" border="0" cellspacing="1" cellpadding="0">
        <tr>
         <td align="center"><strong>Id</strong></td>
         <td align="center"><strong>Day</strong></td>
         <td align="center"><strong>Lunch</strong></td>
         <td align="center"><strong>Dinner</strong></td>
        </tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
        <tr>
         <td align="center"><? $id[]=$rows['id']; ?><? echo $rows['id']; ?></td>
         <td align="center"><input class="content2" name="day[]" type="text" id="day" value="<?php echo $rows['day']; ?>" disabled></td>
         <td align="center"><input class="content" name="lunch[]" type="text" id="lunch" value="<?php echo $rows['lunch']; ?>"></td>
         <td align="center"><input class="content" name="dinner[]" type="text" id="dinner" value="<?php echo $rows['dinner']; ?>"></td>
        </tr>
<?php 
}
?>
        <tr>
         <td colspan="4" align="center"><input type="submit" name="Submit" value="Submit"></td>
        </tr>
       </table>
      </td>
     </tr>
    </form>
   </table> 
   <?PHP
echo '<p style="font-size:12px;text-align:center;"> Version:'.$version. ' &copy;2010-2011 <a style="text-decoration:none;" href="https://facebook.com/christopher.sparrowgrove">Sparrowgrove,Christopher</a><br />'.$links;
?>
  </div>
 </body>
<?php
// Check if button name "Submit" is active, do this 
if($Submit){
for($i=0;$i<$count;$i++){
$sql1="UPDATE foodmenu SET day='$day[$i]', lunch='$lunch[$i]', dinner='$dinner[$i]' WHERE id='$id[$i]'";
$result1=mysql_query($sql1);
}
}

if($result1){
header("location:menu.php");
}
mysql_close();
?>