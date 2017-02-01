<html>
<body>
<?php 
error_reporting(E_ERROR); 
	//connect to database 
define('DB_NAME' , 'test');
define('DB_USER' , 'root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
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
?>
<html>
<body>
<center>
<p style="color:green ; font-family:Cursive ; font-size=30px;"><u><strong>FILES DISPLAYED BY THE ORDER OF RATING<br></strong></u></p>
</center>
</body>
</html>


<?php
$value = $_POST['submi'];
$var = $_SESSION['username'];

if($var == '')
{
	header("Location: logout.php");
	
}

    $fetc = "SELECT * FROM users WHERE Rating >=3 ORDER BY Rating DESC ";
    $result = mysql_query($fetc);
	?>
	
	
<html>
<body>
<center>
<table width = "800" border = "1" cellpadding = "7" cellspacing = "1"  style="border:7px  solid black ; background-color:white">
<tr style="background-color:yellow">
<th>Paper(user-defined)</th>
<th>Author</th>
<th colspan=2>Tags
(user-defined and pre-defined)</th>
<th>Paper-Name</th>
<th>Rating </th>
<th>Link (To view files) </th>

</tr>

<?php
	while ($row= mysql_fetch_array ($result)){
if($row['user'] == $var)
{
$name=$row['name'];
    $type=$row['Mime'];
	$typo=$row['Mime2'];
	 
	
echo"<tr>";

echo"<td>".$row['Paper']."</td>";
echo"<td>".$row['Author']."</td>";
echo"<td>".$row['Tag1']."</td>";
echo"<td>".$row['Tag2']."</td>";
echo"<td>".$row['name']."</td>";
echo"<td>".$row['Rating']."</td>";



?>



<td> <a href='download2.php?nam=<?php echo $row['name'],$row['Mime2'];?>'>    CLICK HERE</a> 
  </td> 
  
 
 <?php

echo "</tr>";
}
}



?>
</table>

<a href="cos-sear.html"><input type="submit" value="BACK" class="button button2"/></a></center>
    
<a href="two-buttons-first.html"><input type="submit" value="HOME" class="button button2" /></a>
    
<form action="logout.php" method="POST" enctype="multipart/form-data">
    
<a href="two-buttons-first.html"><input type="submit" value="LOGOUT" name="logout" class="button button2"/></a>
</form>
<style type="text/css">
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
</center>


</body>
</html>

</body>
</html>