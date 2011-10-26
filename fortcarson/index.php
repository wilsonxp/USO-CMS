<?PHP
/* -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: 3X Security, LLC (3X Security Services)
 *     WEBSITE: http://3xsecurityservices.com
 *        NAME: USO CMS Index Page
 *        DATE: Oct 25, 2011
 *        FILE: index.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Index page
 *     LICENSE:      
 */

/* START CONFIGURATION */
require_once ('config.php');
require_once ('../admin/iplogger.php');
require_once ('footer.php');
/* END CONFIGURATION */

//Check if website is in maintenance mode
//If false check if a dircetory or alternate page 
//is requested. If none display default page (menu.php)
//Both Page and directory requests have security applied 
//to limit available pages or directories.

if ($maintenance=="true")
{
    //include('maintenance.php'); //if one is exists
    echo "We are working on the site rightnow. It will be back up in a jiffy.";
    exit();
}
else
{
    if (empty($dir)) //if ?page= var empty
    {
        echo "";
    }
    else  //If ?page= var not empty
    {
        $alloweddir = array(1 => "ul");
            
        if (in_array($dir, $alloweddir))
        { 
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            header("Location: http://$host$uri/$dir"); //redirect user to proper page.
            exit();
         }
         echo "!@Error: Not A Valid Directory";
    }
    if (!empty($_GET['page']))
    {
        $pages_dir = '../fortcarson';
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1], $pages[3], $pages[4], $pages[7], $pages[8], $pages[9], $pages[10], $pages[11], $pages[12], $pages[13], $pages[15], $pages[17], $pages[18], $pages[19]);
        
        $page = $_GET['page'];
        //print_r($pages);
        //Check if Going to dynamic page
            if (in_array($page.'.php', $pages))
            {
                include ('../fortcarson/'.$page.'.php');
            }
            else
            {
                echo "!@Error: Page Does Not Exist!";
            }
    }
    else
    {
        include ('../fortcarson/menu.php');   
    }  
   
}
?>