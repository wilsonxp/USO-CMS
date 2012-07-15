<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: https://www.usocms.com
 *        NAME: USO CMS
 *        DATE: January 2010
 *        FILE: index.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: CMS application
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

/* START CONFIGURATION */
require_once('config/config.php');// Main Configurations Script

if ($mode=="1")
{
    include 'maintenance.php';
    exit();
}
else
{
    if (isset($_GET['p']))
    {
        $page = $_GET['p']; //Get Requested Location
        $valid_pages = array('home', 'prices', 'aboutus', 'partners'); //Set Valid Locations  
        if (in_array($page, $valid_pages)) //If Location Is Valid
        {
            include($page.'.php');
        }
        else //If Invalid Include Defualt Page
        {
            include('home.php');
            exit();
        }
    }
}