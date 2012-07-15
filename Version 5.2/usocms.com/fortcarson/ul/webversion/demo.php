<?PHP
session_start();
$_SESSION['username']='demo';
$_SESSION['fullname']='demo';
$_SESSION['fname']='demo';
echo $_SESSION['username'];
header('Location: http://beta.usocms.com/index.php?location=fortcarson&page=ul');

?>