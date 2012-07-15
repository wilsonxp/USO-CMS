<?PHP
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: 
 *     COMPANY:  
 *     WEBSITE: 
 *        NAME: 
 *        DATE: 
 *        FILE: 
 *    LANGUAGE: 
 * DESCRIPTION:  
 *     LICENSE:
 *      
 */ 
 include ('../config.php');
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
        </style>
    </head>
    
    <body>

            <fieldset>
                <legend>Control Pannel</legend>
                Welcome <?PHP echo $_SESSION['username']; ?>! <a href="logout/" onclick="javascript:void(0)">Logout</a>
                <p> <b>USERS</b> </p>
                
                <p class="newuser">
                    <label for="NewUser:">Users:  </label>
                    <del>Add</del> | <del>Edit</del> | <del>Delete</del> | <del>Lock</del> 
                </p>
                
                <br />
                    
                <p> <b>ADMINISTRATION</b> </p>
                
                <p class="foodmenu">
                    <label for="FoodMenu:">Food Menu:  </label>
                    <del>Add</del> | <a href="foodmenu.update.php">Edit</a> | <del>Delete</del> | <del>Lock</del>
                </p>
                
                <p class="directions">
                    <label for="Directions:">Directions:  </label>
                    <del>Add</del> | <a href="index.php?cmd=directions.update">Edit</a> | <del>Delete</del> | <del>Lock</del>
                </p>
                
                <p class="activities">
                    <label for="Activities:">Activities:   </label>
                    <del>Add</del> | <del>Edit</del> | <del>Delete</del> | <del>Lock</del>
                </p>              
            </fieldset>

        
        <div id="footer" style="display: inline; margin-left: 5px;">
            <p class="footer2">
 <?PHP 
 ECHO "Version: ", $Version;
  
 ?>         
 
                   </a>
                </font>
            </p>
        </div>
    </body>
</html>