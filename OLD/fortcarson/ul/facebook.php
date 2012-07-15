<?php 
session_start();
require_once ('../../config.php');
//https://developers.facebook.com/docs/authentication/


   $code = $_REQUEST["code"];

   if(empty($code)) {
     $_SESSION['state'] = md5(uniqid(rand(), TRUE)); //CSRF protection
     $dialog_url = "http://www.facebook.com/dialog/oauth?client_id=" 
       . $app_id . "&redirect_uri=" . urlencode($my_url) . "&scope=".$permissions. "&state="
       . $_SESSION['state'];

     echo("<script> top.location.href='" . $dialog_url . "'</script>");
   }

   if($_REQUEST['state'] == $_SESSION['state']) {
     $token_url = "https://graph.facebook.com/oauth/access_token?"
       . "client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url)
       . "&scope=".$permissions. "&client_secret=" . $app_secret . "&code=" . $code;
     
     $response = file_get_contents($token_url);
     $params = null;
     parse_str($response, $params);

     $graph_url = "https://graph.facebook.com/me?access_token=" 
       . $params['access_token'];
     
     $user = json_decode(file_get_contents($graph_url));

     $uid = $user->id;
     $username = $user->username;
     $fname = $user->first_name;
     $lname = $user->last_name;  
     $gender = $user->gender;
     $email = $user->email;
     $timezone = $user->timezone;
     $locale = $user->locale;
     $verified = $user->verified;
     $link = $user->link;
     $hometown = $user->hometown->name;
     $updated_time = $user->updated_time;
     $location = $user->location->name;
     
     
     echo ('User ID: <input type="text" name="id" value="'.$uid.'" /><br />');
     echo ('User Nmae: <input type="text" name="uname" value="'.$username.'" /><br />');
     echo ('First Name: <input type="text" name="fname" value="'.$fname.'" /><br />');
     echo ('Last Name:  <input type="text" name="lname" value="'.$lname.'" /><br />');
     echo ('Gender:  <input type="text" name="gender" value="'.$gender.'" /><br />');
     echo ('E-Mail:  <input type="text" name="email" value="'.$email.'" /><br />');
     echo ('TimeZone:  <input type="text" name="timezone" value="'.$timezone.'" /><br />');
     echo ('Language:  <input type="text" name="lang" value="'.$locale.'" /><br />');
     echo ('Verified:  <input type="text" name="verified" value="'.$verified.'" /><br />');
     echo ('Facebook URL: <input type="text" name="lname" value="'.$link.'" /><br />');
     echo ('Hometown:  <input type="text" name="hometown" value="'.$hometown.'" /><br />');
     echo ('Last Update:  <input type="text" name="updated" value="'.$updated_time.'" /><br />');
     echo ('Current Location:  <input type="text" name="loc" value="'.$location.'" /><br />');
     //echo '<input type="text" name="name" value="'.$user->name.'" /><p>';
     //print_r($user);
     $_SESSION['uid'] = $uid ;
     setcookie('UID',  $uid,time()+3600);
     
     $_SESSION['uname'] = $username;
     $_SESSION['fname'] = $fname;
     $_SESSION['verified'] = $verified;
     header('Location: http://usocms.com/fortcarson/ul');
   }
   else {
     echo("If Login Successful You Will Be Forwarded to the Admin Page otherwise the Login page.");
   }
   
 

 ?>