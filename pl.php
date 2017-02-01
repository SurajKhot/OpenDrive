<html>
<body>
<?php
error_reporting(E_ERROR); 
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
	
		
		$multiple = $_POST['checkbox'];
		
		foreach ($multiple as $item_id)
		{
		
		$sql = "DELETE FROM users WHERE ID =" .mysql_real_escape_string($item_id);
		//$sql = "DELETE FROM thor WHERE Id = '$item_id'";
		$result = mysql_query($sql);
		
		}
		
	if($result)
	{
		?>
<html>
<body>
<center>
<h1 style=" color:white"> YOU FILE WAS DELETED SUCCESSFULLY</h1>
<center><a href="display_all.php"><input type="submit" value="BACK" class="button button2"/></a></center>
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
</style>
</center>
</html>
</body>
	<?php
		
	}
	else
	{
			?>
<html>
<body>
<center>
<h1 style=" color:white"> YOU FILE WAS NOT DELETED SUCCESSFULLY</h1>
    
<center><a href="display_all.php"><input type="submit" value="BACK" class="button button2"/></a></center>
    
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
</style>
</center>
</html>
</body>
	<?php	
		
	}
	
	

?>