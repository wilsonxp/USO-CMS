<?PHP

//Maintenance Mode
$maintenance ='false'; //true false statment. Are you in Maintenance mode?
$downtime ='Aug 22 2011 - 2:00pm';

//Extra Variables
$space1x = '&nbsp;';
$space5x = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$space32x = $space5x . $space5x . $space5x . $space5x . $space5x . $space5x;


//Version Information
$Maj_Ver = "4"; //major correction: redesign, recoding php, security, etc
$Med_Ver = "3"; //minor corrections: Standards, HTML, CSS, etc
$Min_Ver = "3"; //small corrections: spelling & gramar
$Build_Ver = ""; //beta version
$Ver_Break = ".";
$Version = $Maj_Ver . $Ver_Break . $Med_Ver . $Ver_Break . $Min_Ver . $Ver_Break . $Build_Ver;

//Date & Time Configurations
date_default_timezone_set('America/Denver'); //Default Time Zone: Mountain Time
                                             
$date= date("l, M d, Y"); // Default Format: Day, Month Date, Year
$time24= date(" Hi"); // Default Format is 24 Hour Time
$time12=date("(h:i:sA)"); //Default Format is 12 Hour Time
$datetime= "$date $time24 $time12"; //Display Date & Time


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
?>