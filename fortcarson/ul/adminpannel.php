<?PHP
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove	
 *     COMPANY:  3x Security, LLC (3X Security Services)
 *     WEBSITE: http://3xsecurityservices.com
 *        NAME: Admin Pannel
 *        DATE: Oct 15, 2011
 *        FILE: members.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  Admin Configurations and Settings
 *     LICENSE:
 *      
 */ 
require_once('../../config.php');
 
 $con = mysql_connect($host,$db_user,$db_pass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_name, $con);

$result = mysql_query("SELECT * FROM uso_config");

while($row = mysql_fetch_array($result))
  {
   $registration = $row['registration_status'];
   $useredit = $row['edit_users'];
   $registrationedit = $row['edit_registration'];
   $menuedit = $row['edit_menu'];
   $directionsedit = $row['edit_directions'];
   $activitiesedit = $row['edit_activities'];
  }
  
 //User Editing
 if ($useredit=="1")
 {
 $users = "<a href=''>Add</a> | <a href=''>Edit</a> | <a href=''>Delete</a> | <a href='config/users.php?update=0'>Disable</a>";
 }
 else
 {
 $users = "Add | Edit | Delete | <a href='config/users.php?update=1'>Enable<a>";
 }
 
 //Menu Editing
 if ($menuedit=="1")
 {
 $menu = "Add | <a href='menu.update.php'>Edit</a> | Delete | <a href='config/menu.php?update=0'>Disable</a>";
 }
 else
 {
 $menu  = "Add | Edit | Delete | <a href='config/menu.php?update=1'>Enable</a>";
 }
 
 //Directions Edit
  if ($directionsedit=="1")
 {
 $directions = "Add | <a href='directions.update.php'>Edit</a> | Delete | <a href='config/directions.php?update=0'>Disable</a>";
 }
 else
 {
 $directions  = "Add | Edit | Delete | <a href='config/directions.php?update=1'>Enable</a>";
 }
 
 //Activities Edit
  if ($activitiesedit=="1")
 {
 $activities = "Add | Edit | Delete | <a href='config/activities.php?update=0'>Disable</a>";
 }
 else
 {
 $activities = "Add | Edit | Delete | Enable";
 }
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
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
        <meta name="license" content="http://services.3xsecurityservices.com/licenses.php?license=uso" />
        <meta name="dol" content="" />
        <meta name="keywords" lang="en-us" content="USO, Fort Carson, 
          Christopher Sparrowgrove, winxptk, Sparrowgrove, Food Menu, 
          United Service Orginization, 3X Security, 3X Security Services" />
        <meta name="robots" content="index,nofollow" />
        <title>Admin Pannel</title>
        <link type="text/css" rel="stylesheet" href="../style.css" />
        <style type="text/css">
        label {
        width: 6em;
        float: left;
        text-align: right;
        margin-right: 0.5em;
        display: block
              }
        .newuser {}
        .foodmenu {}
        .directions {}
        .activities {}
        .register {}
        del {color: black;}
        </style>
    </head>
    
    <body>

            <fieldset>
                <legend>Control Pannel</legend>
                Welcome <?PHP echo $_SESSION['fname']; ?>! <a href="members.php?cmd=logout" onclick="javascript:void(0)">Logout</a>
                <p> <b>USERS</b> </p>
                
                <p class="newuser">
                    <label for="NewUser:">Users:  </label>
                    <?PHP echo $users; ?>
                </p>
                
                <br />
                    
                <p> <b>ADMINISTRATION</b> </p>
                
                <p class="foodmenu">
                    <label for="FoodMenu:">Food Menu:  </label>
                    <?PHP echo $menu; ?>
                </p>
                
                <p class="directions">
                    <label for="Directions:">Directions:  </label>
                    <?PHP echo $directions; ?>
                </p>
                
                <p class="activities">
                    <label for="Activities:">Activities:   </label>
                    <?PHP echo $activities; ?>
                </p>              
            </fieldset>

        
        <div id="footer" style="display: inline; margin-left: 5px;">
            <p class="footer2">
 <?PHP 
 ECHO "Version: ".$Version."<br />";
 echo $links;
 ?>         
            </p>
        </div>
    </body>
</html>