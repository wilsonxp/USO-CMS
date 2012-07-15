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

/* START CONFIGURATION */
require_once('../config.php');
/* END CONFIGURATION */

//MYSQL CONNECTION 

$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();  
}

/* Select queries return a resultset */
if ($result = mysqli_query($link, "SELECT open FROM ophours LIMIT 10")) {
    printf("Select returned %d rows.\n", mysqli_num_rows($result));
echo $result;
    /* free result set */
    mysqli_free_result($result);
}
mysqli_close($link);
?>