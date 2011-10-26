<?php 
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: 3X Security, LLC (3X Security Services)
 *     WEBSITE: http://3xsecurityservices.com
 *        NAME: Admin Pannel Users Config
 *        DATE: Oct 11, 2011
 *        FILE: users.php
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
            mysql_query("UPDATE uso_config SET edit_users = '1' WHERE id = '1'");
            mysql_close($con);
        }
        else if ($status=="0")
        {
            mysql_query("UPDATE uso_config SET edit_users = '0' WHERE id = '1'");
            mysql_close($con);
        }            
    }
}
else
{
    echo "Please Login.";
}

header('Location: http://usocms.com/fortcarson/ul/');