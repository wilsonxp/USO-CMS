<?php
error_reporting(0);

/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: http://www.site.com
 *        NAME: Location Configuration
 *        DATE: November 21, 2011
 *        FILE: locationsconfig.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Configuration for including the proper location the visitor selects. Also check valid input for security.
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

//if isset location parameter start configuration
if (isset($_GET['location']))
{
    //echo "Server Not Configured To Handle These Commands yet";}

    $location = $_GET['location']; //Get Requested Location
    $valid_locations = array('fortcarson', 'beta'); //Set Valid Locations
    
    if (in_array($location, $valid_locations)) //If Location Is Valid
    {
        if (isset($_GET['page']))
        {
            $page = $_GET['page'];
            $pages_directory = $location.'/'.$siteversion; //set the location of valid pages
            $valid_pages = scandir($pages_directory, 0); //scan for all files in directory set above
            unset($valid_pages[0], $valid_pages[1], $valid_pages[9], $valid_pages[10]); //unset some files/locations 
            //print_r($valid_pages);
        
            if (in_array($page.'.php', $valid_pages)) //If Valid Include Page Requested.
            {
                include ($location.'/'.$siteversion.'/'.$page.'.php');
                exit();
            }
            else if ($page=="ul") //If Page Is Request Login Include Login Dir & Exit
            {
                include($location.'/ul/'.$siteversion.'/index.php');
                exit();
            }
            else //If Invalid Include Defualt Page
            {
                include($location.'/'.$siteversion.'/menu.php');
                exit();
            }
        }
        else //Valid or Not Include Defult Page & Exit
        {
            include($location.'/'.$siteversion.'/menu.php');
            exit();
        }
    }
    else 
    {
       $response = 'Not a valid location'; 
    }
}
