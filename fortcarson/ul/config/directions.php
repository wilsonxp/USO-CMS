<?php 
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *        NAME: Config: User Editing
 *        DATE: Oct 18, 2011
 *        FILE: users.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Configuration script to enable or disable
 *     LICENSE:
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
    echo "Please Login.";
}

header('Location: http://usocms.com/fortcarson/ul/');