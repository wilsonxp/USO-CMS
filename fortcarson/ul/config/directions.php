<!DOCTYPE html>
<html>
    <head>
        <title>Users Edit Switch</title>
        <meta name="robots" content="noindex,nofollow" />
    </head>
    
    <body>
        <?php 
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: 3X Security, LLC (3X Security Services)
 *     WEBSITE: http://3xsecurityservices.com
 *        NAME: Admin Pannel Users Config
 *        DATE: Oct 11, 2011
 *        FILE: directions.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Enable or Disable Configuration 
 *     LICENSE: Free to use. Do not change anything
 *      
 */  
//error_reporting(0);

session_start(); 

/* START CONFIGURATION */
 
include_once ('../../config.php'); //Configuration File 
include ('../../../admin/iplogger.php');

if (isset ($_SESSION['username']))
{
    $status = $_GET['update'];
    $con = mysql_connect($host,$db_user,$db_pass);
    if (!$con){die('Could not connect: ' . mysql_error());}
    mysql_select_db($db_name, $con);
    
    if (is_numeric($status))
    {
        if ($status=="1")
        {
            mysql_query("UPDATE uso_config SET edit_directions = '1' WHERE id = '1'");
            mysql_close($con);
        }
        else if ($status=="0")
        {
            mysql_query("UPDATE uso_config SET edit_directions = '0' WHERE id = '1'");
            mysql_close($con);
        }            
    }
}
else
{
    
    
    $uid = $_COOKIE['UID'];
    $os = array("100001880332289", "15413100490", "795685524", "100002784450840");
    //Autherized Facebook users: Christopher, Chris, Katie, Jessica
    //echo $uid;
    if (in_array($uid, $os)) 
    {
        $status = $_GET['update'];
        $con = mysql_connect($host,$db_user,$db_pass);
        if (!$con){die('Could not connect: ' . mysql_error());}
        mysql_select_db($db_name, $con);
    
        if (is_numeric($status))
        {
            if ($status=="1")
            {
                 mysql_query("UPDATE uso_config SET edit_directions = '1' WHERE id = '1'");
                 mysql_close($con);
            }
            else if ($status=="0")
            {
                 mysql_query("UPDATE uso_config SET edit_directions = '0' WHERE id = '1'");
                 mysql_close($con);
            } 
            else 
            {
                echo "!@Error: Invalid Value";
            }
            header ('Location: ../index.php');
        }
    }
    else
    {
        //include("../".$fail);
        //die ('You Must Be Logged In To View This Page. Please Login'); //DISABLED
        exit();
    }
}
?>
    </body>
</html>
