<!DOCTYPE html>
<html>
    <head>
        <title>Select USO</title>
        <meta name="author" content="Christopher Sparrowgrove" />
        <meta name="keyword" content="USO, usocms, christopher sparrowgrove, cms script, fort carson, United Service Orgination" />
        <meta name="description" content="USOCMS is a Content Management System (CMS) for displaying information such as food menu, driving direction, acctivities, hours of operation, and more." />
        <meta name="ROBOTS" content="INDEX, FOLLOW" />
        <style>
            body 
            {
                text-align: center;
            }
        </style>
    </head>
    
    <body>
        <?PHP
        /* -----------------INFORMATION & LICENSING-----------------
        *
        * AUTHOR: Christopher Sparrowgrove
        * COMPANY: USO CMS
        * WEBSITE: http://usocms.com
        * NAME: Index Page
        * DATE: Oct 21, 2011
        * FILE: index.php
        * LANGUAGE: PHP Hypertext Processor (PHP)
        * DESCRIPTION: Index
        * LICENSE: GNU Public License
        *      
        */
        
        /* START CONFIGURATION */
        require_once ('config.php');
        require_once ('admin/iplogger.php');
        /* END CONFIGURATION */
        
        if ($maintenance=="true")
        {
            echo "We are working on the site rightnow. It will be back in a jiffy.";
            exit();
        }
        else
        {
            //Make Connection to SQL Server then select database.
            //Start HTML code for selecting which USO information to view
            //Option/choices are fed via SQL database
            if(!mysql_connect($host, $db_user, $db_pass)) { die('Database Connect Error'); }
            if(!mysql_select_db($database)) { die('Database Select Error');}
            
            echo '<form action="" method="post" name="Branch_Selection" />';
            echo 'Select Your Local USO: <select name="name">';
            echo '<option size="30" selected>Select</option>';
            $branches = mysql_query("SELECT * FROM branches");
            while ($row = mysql_fetch_assoc($branches)) 
                {
                    echo '<option name="name">'.$row['name'].'</option>';
                }
            echo '<input type="submit" name="submit">';
            
            if (isset($_POST[submit]))
            {
                //If Selected USO was Fort Carson USO the forward to.
                if ($name=="Fort Carson USO")
                {
                    header('Location: https://usocms.com/fortcarson/');
                }
                //If Selected USO was BETA check if user is autherized via username session. Otherwise echo error
                else if ($name=="BETA")
                {
                    if (isset($_SESSION['username']))
                    {
                        header('Location: https://beta.usocms.com/');
                    }
                    else
                    {
                        echo '<p />RESPONSE: You Are Not Autherized To View Beta Versions';
                    }
                }
                else
                {
                    die ('That Location Does Not Exist. An administrator has been notified');   
                }
            }
        }
        ?>
    </body>
</html>
