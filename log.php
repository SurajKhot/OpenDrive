<html>
<body>
<?php
error_reporting(E_ERROR); 
@mysql_connect("localhost","root","");
mysql_select_db("test");

if(isset($_POST['submit']))
{
$file=$_POST['username'];
$value1=$_POST['password']; 
$result= mysql_query("INSERT INTO login(user,pass) VALUES('$file','$value1')");
if($result)
	{
	 ?>
<html>
<body>
<center>
<h1 style=" color:white"> ADDED SUCCESSFULL</h1>
<center><a href="signup.html"><input type="submit" value="BACK" class="button button2"/></a></center>
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
<h1 style=" color:white"> USER NOT ADDED </h1>
<center><a href="login.html"><input type="submit" value="BACK" class="button button2"/></a></center>
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