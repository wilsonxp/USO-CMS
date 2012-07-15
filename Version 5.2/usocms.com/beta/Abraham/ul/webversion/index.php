<?php 
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: 3X Security, LLC (3X Security Services)
 *     WEBSITE: http://3xsecurityservices.com
 *        NAME: Login & Autherization Script
 *        DATE: Oct 11, 2011
 *        FILE: index.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Check if user is logged in. If Not Display Login Form.
 *     LICENSE: Free to use. Do not change anything
 *      
 */

 /* START CONFIGURATION */
require_once ('config/config.php');
//require_once ('../../admin/iplogger.php');
//require_once ('../footer.php');
 /* END CONFIGURATION */ 
 
//DO NOT EDIT BELOW THIS LINE
echo '.';
session_start(); //START SESSIONS

if (isset ($_SESSION['username'])) //IF A SESSION VALUE FOR USERNAME EXISTS. USER IS LOGGED IN
{
   echo "<h5 style=\"text-align:right;\">USER: ".$_SESSION['username']."</h1><br>";
   include('adminpannel.php');
}
else //USER IS NOT LOGGED IN. REQUEST THAT USER LOGIN
{
    //$_SESSION['id'] = $uid;
    //$uid=$_SESSION['id'];
    $uid = $_COOKIE['UID'];
    //setcookie('UID',  $_SESSION['id']); 
 //echo $uid;
    $os = array("100001880332289", "15413100490", "795685524", "100002784450840");
    //Autherized Facebook users: Christopher, Chris, Katie, Jessica
    //echo $uid;
    if (in_array($uid, $os)) 
    {
        echo "<h5 style=\"text-align:right;\">USER: ".$_SESSION['uname']."</h1><br>";
        include($success);
    }
    else
    {
        include('login/index.php'); 
        //die ('You Must Be Logged In To View This Page. Please Login'); //DISABLED
        exit();
    }
}
?>

