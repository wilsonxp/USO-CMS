<!DOCTYPE html>
<?PHP 

/* START CONFIGURATION */
require_once('config/config.php');
/* END CONFIGURATION */

?>
<head>
    <title>USO Contact US <?PHP echo $datetime; ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta property="og:title" content="USO CMS/ Fort Carson" />
    <meta property="og:type" content="non_profit" />
    <meta property="og:url" content="https://usocms.com/fortcarson" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="USO CMS" />
    <meta property="fb:admins" content="100001880332289" />
    <meta name="author" content="Christopher Sparrowgrove" />
    <meta name="company" content="USO CMS" />
    <meta name="date" content="May 17, 2011" />
    <meta name="description" content="Feedback" />
    <meta name="license" content="http://usocms.com/license.txt" />
    <meta name="dol" content="" />
    <meta name="keywords" lang="en-us" content="USO, Fort Carson, Operation Hours" />
    <meta name="robots" content="index,follow" />
    <link rel="stylesheet" href="https://usocms.com/style.css" type="text/css" />
    <style>
        label {width:8em; float:left; text-align:left; margin-left:1px; display:block;}
        #center{text-align: center;} 
        #copyright{text-align: center; color: grey; font-size: x-small;} 
        #text{text-align: center; font-style: normal;}
    </style>
</head>
<body>
    <div class="container">
        <p>
            <fieldset width="350px" height="200px">
                <legend>Contact Us</legend>
                <p class="manager">
                    <label for="name:">Center Manager: </label><br/>
                    Phill Martinez<br/>
                    +1 (719) 306-1898<br/>
                    pmartinex@uso.org
                </p>
                
                <p class="assistant">
                    <label for="email:">Admin Assistant:  </label> <br/>
                    Katie Barker<br/>
                    +1 (555) 555-1234<br/>
                </p>
                
                <p class="frontdesk">
                    <label for="email:">Font Desk:  </label><br/>
                    Front Desk<br/>
                    +1 (719) 579-9699<br />
                    1625 Ellis Street, <br />
                    Colorado Springs, CO, 80913<br />
                    Building 1218                    
                </p>
            <address id="copyright">Copyright &copy; 2010 - Christopher Sparrowgrove</address>
            </fieldset>
    </div><p><p>
<p style="font-size:12px; color: black; text-align:center; padding-left: 8px; padding-top: 10px;">
            Version: <?PHP echo $version; ?> &copy;2010-2011 
           <a style='text-decoration:none;' target='_Blank' 
              href='<?PHP echo $copyright_link; ?>' alt="Developer" title="Lead Web Application Developer"><?PHP echo $copyright_label; ?></a><BR />
              <?php include ('fortcarson/links.php'); ?></p>
    </body>
</html>  