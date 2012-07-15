<?php 
/*
 
error_reporting(0);

/* START CONFIGURATION */
 
require_once('../../../config/config.php');

/* END CONFIGURATION */

//DO NOT EDIT BELOW THIS LINE

//Start PHP Sessions for Login
 session_start();
 
 
//$con = mysql_connect($mysql_host,$mysql_user,$mysql_pass);
if (!mysql_connect($mysql_host,$mysql_user,$mysql_pass)){die('Could not connect: ' . mysql_error());}
mysql_select_db($mysql_database);

//while($row = mysql_fetch_assoc(mysql_query("SELECT registration_status FROM uso_config")))
 // { 
 //  $registration = $row['registration_status']; //Set The Regigistration Restriction
 // }
 
if (isset($_POST['register'])) //IF NEW USER DISPLAY REGISTRATION FORM
{
    //echo "Registration Coming Soon";
    if ($registration=="0")
    {
    echo "Registration Is Currently Disabled";
    }
    else
    {
    echo '<form action="../register" method="get" style="text-align:center"; color="red">
                    User Name: <input type="text" name="username" value="'.$username.'" /><br />
                     Password: <input type="password" name="password" /><br />
             Confirm Password: <input type="password" name="passwordconfirm" /><br />
                   First Name: <input type="text" name="firstname" /><br />
                    Last Name: <input type="text" name="lastname" /><br />
                       Gender: <input type="radio" name="sex" value="male" />Male<input type="radio" name="sex" value="female" />Female<br />
                          Age: <input type="number" name="age" min="13" max="90"><br />
                    Birthdate: <input type="range" name="date" min"1998"1998 max="1921"1921 /><br />
                        Email: <input type="email" name="user_email" /><br />
                               <input type="submit" value="Register" />           
         </form>';
    }
} 
else //RETURNING USERS WILL LOGIN. PROCESS LOGIN REQUEST
{
    $username = $_POST['username'];  //Secured Username Feild: Strip Slashes(used to unescape & run SQLi by hackers)
    $password = $_POST['password'];
if ($username&&$password)
{  
    $connect = mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die ($connecterror); //connect to database or die
    
    mysql_select_db($mysql_database) or die ('$selecterror'); //select database or die

/**********************FORM POST DATA**********************/

$username = stripslashes($_POST['username']);  //Secured Username Feild: Strip Slashes(used to unescape & run SQLi by hackers)
$raw_password = stripslashes($_POST['password']);  //Secured Password Feild: Strip Slashes(used to unescape & run SQLi by hackers)
$password = mysql_real_escape_string(md5(utf8_encode($raw_password))); //Secured Password: Escape SQL commands to prevent SQLi & encode MD5 Hash

/**********************FORM POST DATA**********************/  
 
    $check_login = mysql_query("SELECT * FROM uso_users WHERE username ='$username'");
    $numrows = mysql_num_rows($check_login);
    
    //Check if username exists in the database
    if ($numrows!=0)
    { 
        while ($row = mysql_fetch_assoc($check_login))
        {
            $dbusername = $row['username']; //Grab Username
            $dbpassword = $row['password']; //Grab Password
            $dbfullname = $row['fullname']; //Grab Full Name
            $dbfname = $row['fname']; //First Name
            $dblname = $row['lname']; //Lastname
            $dbaccess = $row['access_level']; //User Level
        }
        
            //Check For Matching Username And Password
            if ($username==$dbusername&&$password==$dbpassword)
            {
                echo "Your In!. Access <a href='../index.php'>Members page</a>";
                header('Location: http://beta.usocms.com/index.php?location=fortcarson&page=ul');
                $_SESSION['username']=$dbusername;
                $_SESSION['fullname']=$dbfullname;
                $_SESSION['fname']=$dbfname;  
            }
            else 
            {
                echo "!Error: Incorrect Username and/or Password";
            }
    }
    else
    {
        echo "Incorrect Username and/or Password."; 
    }
}
else
{
    die("Error: Please enter Username and Password");
}
}
?>