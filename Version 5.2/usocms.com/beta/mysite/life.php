<?PHP

/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: Christopher Sparrowgrove
 *     WEBSITE: http://www.3xsecurityservices.com
 *        NAME: Life Script
 *        DATE: December 15, 2011
 *        FILE: life.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: A program to make life more enjoyable.
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */


//* START PROGRAM *//
$normal_stress = "Stressfull"; //Normal Stress is Stressful enough but
$work_related_stress = "More Stressfull"; //Work related stress is more stressful.


$life = substr($normal_stress, 0, 6); //Life is full of stress and 
$stress = $life; //Stress is part of life.
//$this = "true"; //This is true and you know it.


$a_burden = $work_related_stress; //Work rlated stress is sometimes a burden.


$programming = "programming can be enjoyable and"; //but programming can make you more relaxing.


$mypoint = "My point is that life its self is full of "
           .$stress.
            " but work related stress can often be "
           .$a_burden.
           ". Some times a little bit of "
           .$programming.
           " is very relaxing."; 

echo $mypoint;
 echo '  '.urlencode($mypoint);
?>

http://www.php.net/manual/en/function.str-replace.php