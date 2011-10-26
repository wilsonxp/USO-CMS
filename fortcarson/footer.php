<?PHP
session_start();

if (isset ($_SESSION['username']))
{
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        if ($uri=='/fortcarson/ul')
        {
            $links="<a href='../index.php?page=menu'>Food Menu</a> | <a href='../index.php?page=directions'>Directions</a> | <a href='../index.php?page=activities'>Activities</a> | <a href='../index.php?page=ophours'>Hours of Operation</a> | Contact Us | <a href='../index.php?dir=ul'>Admin Pannel</a> | <a href='members.php?cmd=logout'>Logout</a>";   
        }
        else
        {
            $links="<a href='index.php?page=menu'>Food Menu</a> | <a href='index.php?page=directions'>Directions</a> | <a href='index.php?page=activities'>Activities</a> | <a href='index.php?page=ophours'>Hours of Operation</a> | Contact Us | <a href='index.php?dir=ul'>Admin Pannel</a> | <a href='index.php?cmd=logout'>Logout</a>";
        }
}
else
{
    $links="<a style='text-decoration:none;' href='index.php?cmd=login'>*</a> <a href='index.php?page=menu'>Food Menu</a> | <a href='index.php?page=directions'>Directions</a> | <a href='index.php?page=activities'>Activities</a> | <a href='index.php?page=ophours'>Hours of Operation</a> | Contact Us <a  style='text-decoration:none;' href='index.php?cmd=login'>*</a>";  
   
}

//COMMANDS
$cmd = $_GET['cmd'];
if (isset($cmd))
{
    if ($cmd=='logout') {header('Location: http://usocms.com/fortcarson/ul/members.php?cmd=logout');}
    if ($cmd=='login') {header('Location: http://usocms.com/fortcarson/index.php?dir=ul');}
}
