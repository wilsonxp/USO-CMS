<!DOCTYPE html>
<?PHP

/* CONFIGURATION */

//FILE INCLUSION 
include ('config.php'); //Configuration Script
include ('admin/iplogger.php'); //IP Address Logging Script
include ('counter.php'); //Visit Counter Script


if ($maintenance=="false")
{
    //include('maintenance.php');
    echo "We are working on the site rightnow. It will be back up in a jiffy.";
    exit();
}
else
{  
        if (!mysql_connect($host, $db_user, $db_pass)) { die('Could Not Connect: '.mysql_error()); }
        if (!mysql_select_db($database)) { die('Select Error: ' . mysql_error()); }
        
        echo '<form action="" method="post" name="BranchSelect" />';
        echo 'Select Your USO: <select name="name">';
        echo '<option size="30" selected>Select</option>';
        
        $get = mysql_query("SELECT * FROM branches"); 
        while ($row = mysql_fetch_assoc($get))
        {
            echo "<option name='name'>".$row['name']."</option>"; 
        }
            echo "<input type='submit' name='submit'>";
            
            if (isset($_POST[submit]))
            {
                //If The Selected Location Was Fort Carson USO
                if($name=="Fort Carson USO")
                {
                    //Then Forward User To Fortcarson CMS
                header ('Location: http://usocms.com/fortcarson');
                }
                //If Selected Location Was BETA
                else if ($name=="BETA")
                {
                    //Check If User Is Logged In
                    if(isset ($_SESSION['username']))
                    {
                        //If Logged In Echo Success
                       header('Location: http://beta.usocms.com/');
                    }
                    //Otherwise Echo Error
                    else 
                    {
                     echo "<p />RESPONSE: You Are Not Autherized To View Beta Versions";
                    }
                }
                //Wrong Location Selected Or No Location Error Message
                else 
                {
                    //Otherwise Output Error
                    die ("That Location Does Not Exist");
                }
            }
}
     