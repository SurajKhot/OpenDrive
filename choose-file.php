<html>
<body>
<?php
  error_reporting(E_ERROR); 
	//connect to database 
define("DB_NAME" , 'test');
define("DB_USER" , 'root');
define("DB_PASSWORD",'');
define("DB_HOST",'localhost');
$link = @mysql_connect( DB_HOST , DB_USER, DB_PASSWORD);

if(!$link)
{
	die('could not connect'.mysql_error());
	
}
$db_selected = mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
	die('cant use '.DB_NAME . ';'.mysql_error());
	
}

session_start();
	

if(isset($_POST["submit"]))
{
	
$value1 = $_POST['paper']; 
$value3 = $_POST['author'];
$var = $_SESSION['username'];

if($var == '')
{
	header("Location: logout.php");
	
}

$value4 = $_POST['tag_name1'];
$value5 = $_POST['tag'];
$name = mysql_real_escape_string($_FILES['upp_file']['name']);
$mime = mysql_real_escape_string($_FILES['upp_file']['type']);
$data = mysql_real_escape_string(file_get_contents($_FILES['upp_file']['tmp_name']));
$size =intval($_FILES['upp_file']['size']);

$value6 = $_POST['do'];


$insertdate = date('Y-m-d', strtotime($_POST['Date']));

$split = explode(".",$name);
$cm = $split[count($split)-1];
if(strpos($cm,'pdf')!== false || strpos($cm,'jpeg')!== false )
	{
		$result= mysql_query("INSERT INTO users(Paper,Author,Tag1,Tag2,name,Mime,Size,Data,Rating,Date,user) VALUES('$value1','$value3','$value4','$value5','$name','$mime',$size, '$data','$value6','$insertdate','$var')");	

 
      ?>
<html>
<body>
     <center>
    <header id="header">
<img src="opendrive_logo_210x90.png" id="heading" width="210" height="90">
</header></center>
    <center>
        <img src="13.jpg" width="100%" height="300">
<h1 style=" color:white"> YOU FILE WAS ADDED SUCCESSFULLY </h1>
<center><a href="choose-file.html"><input type="submit" value="BACK" class="button button2" style="height:80px; width:200px"/></a></center>
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
<h1><u style="font-family: algerian"> YOU FILE WAS NOT ADDED SUCCESSFULLY</u></h1>
<center><a href="two-buttons-first.html"><input type="submit" value="BACK" class="button button2" style="height:80px; width:200px"/></a></center>
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
 
?>
<br><br><br>
<a href="cos-sear.html"><input type="submit" value="SHOW FILE" class="button button2" style="height:50px; width:150px"/></a></center>
    
<br><br><a href="two-buttons-first.html"><input type="submit" value="HOME" class="button button2" style="height:50px; width:150px"/></a></center>

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