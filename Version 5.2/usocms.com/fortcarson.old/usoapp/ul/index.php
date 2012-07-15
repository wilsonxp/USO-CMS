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
 
include('config.php');

 /* END CONFIGURATION */ 
 
//DO NOT EDIT BELOW THIS LINE

session_start(); //START SESSIONS

if (isset ($_SESSION['username'])) //IF A SESSION VALUE FOR USERNAME EXISTS. USER IS LOGGED IN
{
   echo "<h5 style=\"text-align:right;\">USER: ".$_SESSION['username']."</h1><br>";
    include($success);
}
else //USER IS NOT LOGGED IN. REQUEST THAT USER LOGIN
{
    include("login/".$fail);
    //die ('You Must Be Logged In To View This Page. Please Login'); //DISABLED
    exit();
}
?>