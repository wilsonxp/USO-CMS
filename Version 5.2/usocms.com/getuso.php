<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: https://www.usocms.com
 *        NAME: USO CMS Get Location
 *        DATE: January 2010
 *        FILE: getuso.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: CMS application
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

//If the user submitted a request
if($_SERVER['REQUEST_METHOD'] == "POST")
{  
    $uso = $_POST['location']; //set location post data as variable 
    
    //If Selected USO was Fort Carson USO the forward to.
    if ($uso=="fortcarson") {header('Location: https://usocms.com/?location=fortcarson');}//{header('Location: http://beta.usocms.com/?location=fortcarson');}
    if ($uso=="facebookcanvas") 
        {
            echo "Due to repeated Violation of licensing this app license has been terminated.<BR>
                To View This App Please Visit <a href='https://usocms.com'>https://usocms.com</a>";
            exit();
        }   
    //If Selected USO was Beta Check if Authenticated 
    else if ($uso=="beta")
    {
        session_start(); //start sessions
        if (isset($_SESSION['username'])) //If User is logged in with any username
        {header('Location: http://beta.usocms.com/?location=beta');}    
     
        //Else Unautherized User Response Message
        else{$response = "RESPONSE: You Are Not Autherized To View Beta Versions";}
    }
    //If no Valid Location is posted display this error for Response
    else{$response = "RESPONSE: That Location Does Not Exist";}
}
?>