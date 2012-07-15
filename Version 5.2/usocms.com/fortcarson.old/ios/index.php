<!DOCTYPE html>
<?PHP
/* -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove 
 *        NAME: Dynamic Page
 *        DATE: Nov 13, 2011
 *        FILE: index.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Dynamic Pages served via the ?page parameter which can easily be configured.
 * SKILL LEVEL: Easy (You are expected to understand how PHP works including GET varabiles)
 *     LICENSE: http://cwb110.com/source/license.txt 
 */ 
 
/***** Configuration Start *****/

//require_once ('config.php'); //Configuration File
$page=$_GET['page']; //URL Parameter
$filedir = 'pages'; //Files Directory
$default_page = 'menu.php'; //Default Page
$ext = '.php'; //Default File Extention

/***** Configuration End *****/


//DO NOT EDIT BELOW THIS LINE//
if ($maintenance=='true')
{
    include('maintenance.php');
    exit();
}
else
{
    if (!empty($_GET['page']))
    {
        
        $pages_dir = $filedir;
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]); //UNSET PROHIBITED DIRECTORY (Prevent Hacking)
        print_r($pages); 
        
        if (in_array($page.$ext, $pages))
        {
            include ($pages_dir.'/'.$page.$ext);
        }
        else
        {
            echo "!@Error: Page Does Not Exist!"; //Page Requested Does Not Exist
        }
    }
    else
    {
        include ($filedir.'/'.$default_page); //Default Page
    }  
}
?>