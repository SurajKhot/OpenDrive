
<?php
error_reporting(E_ERROR); 
@mysql_connect("localhost","root","");
mysql_select_db("test");
session_start();

echo "<br>";


$value = $_POST['search'];
$var = $_SESSION['username'];

if($var == '')
{
	header("Location: logout.php");
	
}
//echo "All files having the word: $value ";
$sql = "SELECT * FROM users WHERE Paper LIKE '%$value%' OR Author LIKE '%$value%' OR Tag1 LIKE '%$value%' OR name LIKE '%$value%' OR Tag2 LIKE '%$value%'";
$result = mysql_query($sql);
?>
<html>
<body>
<a href="cos-sear.html"><input type="submit" value="BACK" class="button button2" /></a></center>
<center>
<table width = "600" border="5"  cellpadding = "5" cellspacing = "1" style="border:7px  solid black; background-color:white">
<tr style="background-color:lawngreen; border:5px solid black">
<th style="border:3px solid black">Paper</th>
<th style="border:3px solid black">Author</th>
<th colspan=2 style="border:3px solid black">Tags(user-defined + Predefined)</th>

<th colspan=2 style="border:3px solid black">Files </th>



</tr>
<?php
while($rows = mysql_fetch_assoc($result))
{
 if($rows['user']==$var)
 {
    $name=$rows['name'];
    $type=$rows['Mime'];
	$mime2=$rows['Mime2'];
echo"<tr>";

echo"<td>".$rows['Paper']."</td>";
echo"<td>".$rows['Author']."</td>";
echo"<td>".$rows['Tag1']."</td>";
echo"<td>".$rows['Tag2']."</td>";
echo"<td>".$rows['name']."</td>";
?>


<td><a href='download2.php?nam=<?php echo $rows['name'],$rows['Mime2'];?>'>CLICK  HERE 
  </a></td> 
  <form action="logout.php" method="POST" enctype="multipart/form-data">
<a href="two-buttons-first.html"><input type="submit" value="LOGOUT" name="logout" class="button button2"/></a>
</form>
 
 <?php

echo "</tr>";
}
}
?>
</table>

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
</body>
</html>
<style type="text/css">
a
{
	text-decoration:none;
	color:blue;
}

