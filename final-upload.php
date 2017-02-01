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

if(isset($_POST['subm']))
{

	$split = explode(".",$file);
	$cm = $split[count($split)-1];
	if(strpos($cm,'pdf')!== false)
	{
		$result= mysql_query("INSERT INTO users(`Paper`,`Author`,`Tag1`,`Tag2`,`Mime`,`Mime2`,`Data`,`Rating`,`Date`) VALUES('$value1','$value3','$value4','$value5','$mime','$mime2','$value8','$value6','$insertdate')");
		
    ?>
<html>
<body>
<center>
<h1 style=" color:white"> YOU FILE WAS ADDED SUCCESSFULLY</h1>
<center><a href="final-upload24aug.html"><input type="submit" value="BACK" class="button button2"/></a></center>
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
<h1 style=" color:white"> YOU FILE WAS NOT ADDED SUCCESSFULLY </h1>
<h1 style=" color:white"> PLEASE CHECK THE URL </h1>
<center><a href="final-upload24aug.html"><input type="submit" value="BACK" class="button button2"/></a></center>
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

 }
}
		
 
?>
<br><br><br>
<a href="cos-sear.html"><input type="submit" value="SHOW FILE" class="button button2"/></a></center>
<br><br><a href="two-buttons-first.html"><input type="submit" value="HOME" class="button button2"/></a></center>
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