<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY:  
 *     WEBSITE: http://www.site.com
 *        NAME: 
 *        DATE: 
 *        FILE: 
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

//MY SQLi Config
$dbconnect = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_database);
$query = "SELECT * FROM config";
$data = $dbconnect->prepare($query);
$data->bind_result($id, $edit_user, $edit_registration, $registration_status, $edit_menu, $edit_directions, $edit_activities, $feedback_status, $version, $mode, $mode_msg, $copyright_link, $copyright_label);
$data->execute();
while($data->fetch())
{
    $_SESSION['edit_user'] = $edit_user;
    $_SESSION['edit_registration'] = $edit_registration;
    $_SESSION['registration_status'] = $registration_status; 
    $_SESSION['edit_menu'] = $edit_menu;
    $_SESSION['edit_directions'] = $edit_directions; 
    $_SESSION['edit_activities'] = $edit_activities; 
    $_SESSION['feedback_status'] = $feedback_status;
    $_SESSION['version'] = $version;
    $_SESSION['mode'] = $mode;
    $_SESSION['mode_msg'] = $mode_msg;
}


?>