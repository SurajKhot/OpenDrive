<?php 
error_reporting(E_ERROR); 
define('DB_NAME' , 'test');
define('DB_USER' , 'root');
define('DB_PASSWORD' , '');
define('DB_HOST' , 'localhost');
$link = @mysql_connect( DB_HOST , DB_USER, DB_PASSWORD);

if(!$link)
{
	die('could not connect'.mysql_error());
	
}
$db_selected = mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
	die('cant use'.DB_NAME . ';'.mysql_error());
	
}
  
session_start();
$value = $_POST['subm'];
$var = $_SESSION['username'];

if($var == '')
{
	header("Location: logout.php");
	
}
    $fetc = "SELECT * FROM users WHERE user='$var'";
    $result = mysql_query($fetc);
?>
<html>
<body>
<center>
<table width = "600" border="5"  cellpadding = "5" cellspacing = "1" style="border:7px  solid black; background-color:white">
<tr style="background-color:lawngreen; border:5px solid black">
<th style="border:3px solid black">Paper</th>
<th style="border:3px solid black">Author</th>
<th colspan=2 style="border:3px solid black">Tags(user-defined + Predefined)</th>
<th colspan=4 style="border:3px solid black">Files </th>



</tr>
<?php
while($rows = mysql_fetch_assoc($result))
{
 
    $name=$rows['name'];
    $type=$rows['Mime'];
	$typo=$rows['Mime2'];
echo"<tr>";

echo"<td>".$rows['Paper']."</td>";
echo"<td>".$rows['Author']."</td>";
echo"<td>".$rows['Tag1']."</td>";
echo"<td>".$rows['Tag2']."</td>";
echo"<td>".$rows['name']."</td>";
?>


<td><a href='download2.php?nam=<?php echo $rows['name'],$rows['Mime2'];?>'>CLICK  HERE 
  </a></td> 
  
 <?php
echo "</tr>";
/*if(isset($_POST['su']))
{
	while($rows = mysql_fetch_assoc($result))
	{
$value = $rows['Paper'];
$sql = "DELETE FROM users WHERE Paper='$value'";
$result = mysql_query($sql);
if($result)
{   
      echo 'Your file below was successfully deleted!';
        
}
}
}*/
}
?>
</table>
<a href="cos-sear.html"><input type="submit" value="BACK" class="button button2" /></a>
    
<a href="two-buttons-first.html"><input type="submit" value="HOME" class="button button2" /></a>
    
<form action="logout.php" method="POST" enctype="multipart/form-data">
    
<a href="two-buttons-first.html"><input type="submit" value="LOGOUT" name="logout" class="button button2"/></a>
</form>
</body>
</html>
<style type="text/css">
a
{
	text-decoration:none;
	color:blue;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
	padding-left:40px;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#header{
	background-color:#365277;
}
      body{ 
background-image:url(128-59.jpg);
background-repeat:repeat; 
} 