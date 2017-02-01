<html>
   
<body>
     <center>
    <header id="header">
<img src="opendrive_logo_210x90.png" id="heading" width="210" height="90">
</header></center>
        <img src="13.jpg" width="100%" height="300">
<?php
error_reporting(E_ERROR); 
@mysql_connect("localhost","root","");
mysql_select_db("test");
session_start();
if(isset($_POST['submit']))
{
$file = $_POST['username'];
$_SESSION['username'] = $file;
$value1 = $_POST['password']; 
$result = mysql_query("SELECT user,pass FROM login WHERE user='$file' AND pass='$value1'");
$row = mysql_fetch_array($result);
if($row['user']==$file && $row['pass']==$value1)
	{
	 ?>
<html>
<body>
<center><br><br>
<h1 style="color:#fff"> Login Successfull</h1><br><br>
<a href="two-buttons-first.html"><input type="submit" value="CONTINUE" class="button button2" style="height:80px; width:300px"/></a>
</center>
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
<h1><u style="font-family: algerian"> WRONG PASSWORD OR NOT A MEMBER </u></h1>
<center><a href="signin.html"><input type="submit" value="BACK" class="button-1" style="height:100px; width:300px"/></a></center>
<style type="text/css">

.button-1{
position:absolute;
transition:5s ease;
top:20%;
left:30%;
background-color:black;
padding:10px;				
font-family:Cursive;
font-size:40px;
text-decoration:none;		
color:white;
border:10px solid white;
border-radius:100px;
}
.button-1:active{				<!--movement-->
padding-bottom:10px;
padding-left:10px;
padding-right:10px;
padding-top:11px;
}
</style>
</center>
</html>
</body>
	<?php
               
		}

}
