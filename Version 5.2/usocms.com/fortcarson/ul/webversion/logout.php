<?PHP
 session_start();

 session_destroy();

echo "You Have Been Logged Out! Please come back.";
header('Location: http://usocms.com/fortcarson/');
?>