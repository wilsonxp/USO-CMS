<!DOCTYPE html>
<html>
    <head>
        <title>Select USO</title>
        <meta name="author" content="Christopher Sparrowgrove" />
        <meta name="keyword" content="USO, usocms, christopher sparrowgrove, cms script, fort carson, United Service Orgination" />
        <meta name="description" content="USOCMS is a Content Management System (CMS) for displaying information such as food menu, driving direction, acctivities, hours of operation, and more." />
        <meta name="ROBOTS" content="INDEX, FOLLOW" />
        <style>
            body {text-align: center;}
        </style>
    </head>
    
    <body>
        <?PHP
        /* START CONFIGURATION */
        require_once('config.php');
        require_once('admin/iplogger.php');
        /*END CONFIGURATION */
        
        if ($maintenance=="true")
        {
            echo "The Site Is Currently Down. Please Check Back Later";
            echo "</body></html>";
        }
        else
        {
            echo '<form action="" method="post" name="Branch_Selection" />';
            echo 'Select Your Local USO: <select name="name">';
            echo '<option size="30" selected>Select</option>';
            echo '<option name="name">Fort Carson USO</option>';
            echo '<option name="name">BETA</option>';
            echo '</select>';
            echo '<input type="submit" name="submit" />';
        }
        ?>
    </body>
</html>

<?PHP
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
            ?>
