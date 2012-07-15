<?PHP
/* CONFIGURATION FILE */

//Login Configuration (/members/index.php)
 $login_username = $_SESSION['username']; //USERNAME
 $success = "members.php"; //IF LOGGED IN (AUTHERIZED USER)
 $loggedinmsg = "Welcome ".$login_username."! Thanks For Loging In!"; //Message to display to logged in user. Do Not Forget $login_username
 $fail = "index.php"; //NOT LOGGED IN. DO NOT CHANGE
 $loginmsg = "Please Login Below"; //Login Message
 $registration="off"; //Enable or Disable Registration (OPTIONS: "on" or "off")
 $registrationmsg="Registration Is Currently Disabled"; //Message To Display To User


//MySQL Configurations (/members/login/process.php)
$host = "mysql18.freehostia.com";
$db_user = "chrspa13_ei";
$db_pass = "cds1721win";
$db_name = "chrspa13_ei";
$tbl_name = "foodmenu";
$connecterror = "Error Connecting To Database"; //MySQL Connect Error Message
$selecterror = "Error Selecting Database"; //MySQL Database Select Error Message