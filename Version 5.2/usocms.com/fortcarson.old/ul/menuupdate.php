<strong>Update multiple rows in mysql</strong><br> 

<?php
$mysql_host = "mysql18.freehostia.com";
$mysql_user = "chrspa13_ei";
$mysql_pass = "cds1721win";
$mysql_database = "chrspa13_ei";

// Connect to server and select databse.
mysql_connect("$mysql_host", "$mysql_user", "$mysql_pass")or die("cannot connect"); 
mysql_select_db("$mysql_database")or die("cannot select DB");

$sql="SELECT * FROM foodmenu";
$result=mysql_query($sql);

// Count table rows 
$count=mysql_num_rows($result);
?>
<table width="500" border="0" cellspacing="1" cellpadding="0">
<form method="post" action="">
<tr> 
<td>
<table width="500" border="0" cellspacing="1" cellpadding="0">


<tr>
<td align="center"><strong>Id</strong></td>
<td align="center"><strong>Day</strong></td>
<td align="center"><strong>Lunch</strong></td>
<td align="center"><strong>Dinner</strong></td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td align="center"><input name="<?PHP echo $rows['id']; ?>" type="text" id="id" value="<?PHP echo $rows['id']; ?>"></td>

<td align="center"><input name="day[]" type="text" id="day" value="<?PHP echo $rows['day']; ?>"></td>
<td align="center"><input name="lunch[]" type="text" id="lunch" value="<?PHP echo $rows['lunch']; ?>"></td>
<td align="center"><input name="dinner[]" type="text" id="dinner" value="<?PHP echo $rows['dinner']; ?>"></td>
</tr>
<?php
}
?>
<tr>
<td colspan="4" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</td>
</tr>
</form>
</table>
<?php
// Check if button name "Submit" is active, do this 
if(isset($_POST['Submit']))
{
    for($i=1;$i<$count;$i++)
    {
        $sql1="UPDATE foodmenu SET day='$day[$i]', lunch='$lunch[$i]', dinner='$dinner[$i]' WHERE id='$id[$i]'";
        $result1=mysql_query($sql1);
        // $sql1="UPDATE foodmenu SET day='Sunday', lunch='Test', dinner='Test' WHERE id='1'";
        //$result1=mysql_query($sql1);
    }
}

if($result1){
echo "Good";
//header("location: http://usocms.com/fortcarson/ul/menuupdate.php");
}
if(!$result1){
echo "Bad";
//header("location: http://usocms.com/fortcarson/ul/menuupdate.php");
}
mysql_close();
?>