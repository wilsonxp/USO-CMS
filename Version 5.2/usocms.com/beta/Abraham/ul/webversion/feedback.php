<?PHP
require_once ('../../config.php');

if (!mysql_connect($host, $db_user, $db_pass)) {die($failsafe . mysql_error());}
if (!mysql_select_db($database)) {die($db_select_error . mysql_error());}


$get = mysql_query("SELECT * FROM feedback ORDER BY date DESC");
while ($get_row = mysql_fetch_assoc($get))
{
   //data
    $ip = $get_row['ip'];
    $date = $get_row['date'];
    $name = $get_row['name'];
    $email = $get_row['email'];
    $msg =$get_row['msg'];
    $fbgraph = $get_row['fbgraph'];
    $fbpic = $get_row['fbpicture'];
    
    $diff = $time - $get_time; //calculate current time  with post time
    
    switch(1)
    {
        case ($diff < 60):
        $count = $diff; //calculate the seconds passed
        if ($count==0)
            $count = "Just Now"; //Posted 0 seconds ago
        else if ($count==1)
            $suffix = "second"; //posted 1 second ago
        else
            $suffix = "seconds"; //posted more then a second ago
        break; 
        
        case ($diff > 60 && $diff < 3600):
        $count = floor($diff/60); //divided by 60
        if ($count==1)
            $suffix = "minute"; //posted 1 minute ago 
        else
            $suffix = "minutes"; //posted more then a minute ago
        break; 
        
        case ($diff > 3600 && $diff < 86400):
        $count = floor($diff/3600); //divide by 3600
        if ($count==1)
            $suffix = "hour";
        else
            $suffix = "hours";
        break;
         
        case ($diff > 86400 && $diff < 2629743):
        $count = floor($diff/86400); //divide by 86400
        if ($count==1)
            $suffix = "day"; //posted 1 day ago
        else
            $suffix = "days"; //posted more then a day ago
        break;
         
        case ($diff > 2629743 && $diff < 31556926):
        $count = floor($diff/2629743); //divide by 2629743
        if ($count==1)
            $suffix = "month"; //posted 1 month ago
        else
            $suffix = "days"; //posted more then a month ago
        break;
         
        case ($diff > 31556926):
        $count = floor($diff/31556926); //divide by 2629743
        if ($count==1)
            $suffix = "year"; //posted 1 year ago
        else
            $suffix = "years"; //posted more then a year ago
        break;   
    }
    
    /* EXTRA CODE
    if (isset ($_SESSION['username']))
{
    $admin = " <a href='/comments/edit.php'>edit post</a> | <a href='/comments/delete.php'>delete post</a>";
}
else
{
    if (empty($login)) //if ?page= var empty
        {
        $admin = "";
        }
    else if ($login =="admin") //If ?page= var not empty
        {
             $admin= " <a href='members/login'>Login</a>";
        }
    else
    {
        echo "";
    }
     
     
}
*/
    echo "<p style='text-align:left;'>
           <b><u>Facebook Picture:</u></b> <img src='$fbpic' />
               <br />
           <b><u>Facebook Graph:</u></b> <a href='$fbgraph'>Get Info</a>
               <br />
           <b><u>IP:</u></b> 
              <a title='$ip' href='$ip'>$ip</a>
               <br />
           <b><u>Date:</u></b> $date
               <br />
           <b><u>Name:</u></b> $name
               <br />
           <b><u>Email:</u></b> $email
               <br />
           <b><u>Msg:</u></b> $msg
               <br />

           
    
    
           <img src='../images/arrow.png'><font style='font-size:small; \'><a href=\"#\" 
            style=\" color:grey; text-decoration: none\"
            onMouseover=\"ddrivetip('.$get_date.', 300)\" 
            onMouseout=\"hideddrivetip()\"> Posted 
            ".$count."  
            ".$suffix." ago" .$admin."<p /></a></font></img></p><hr />"; 
  }

?>
 

<?PHP
//getting json data  
  
$json=  file_get_contents("https://graph.facebook.com/cocacola");  
  
//decoding json  
  
$result=  json_decode($json);  
  
//here we go..  
  
echo 'Page ID: '.$result->id.'&lt;br&gt;';  
  
echo 'Name: '.$result->name.'&lt;br&gt;';  
  
echo 'Picture: &lt;img src="'.$result->picture.'"/&gt;&lt;br&gt;';  
  
echo 'Facebook Page Link: '.$result->link.'&lt;br&gt;';  
  
echo 'Likes: '.$result->likes.'&lt;br&gt;';  
  
echo 'Category: '.$result->category.'&lt;br&gt;';  
?>