<html>
<body>
<?php 
error_reporting(E_ERROR); 
@mysql_connect("localhost","root","");
mysql_select_db("test");


echo "<br>";



$value = $_GET['nam'];
 
$sql = "SELECT * FROM users WHERE name='$value' OR Mime2='$value'";
$result = mysql_query($sql);
while($rows = mysql_fetch_array($result))
{
 $name = $rows['name'];
 $bytes = $rows['Data'];
 $type = $rows['Mime'];
 $size = $rows['Size'];

 
 
switch($type) {
	 
	 case "application/pdf":
	 {
			header("Content-type: application/pdf");
			header('Content-Description: File Transfer');
			header('Content-Disposition: inline; filename="'.$name.'"');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Content-Tranfer-Encoding: binary');
			ob_clean();
			flush();

			echo($bytes);
			
         break;
	 }
     case "image/jpeg":
	 {
		 header("Content-type : image/*");
		 echo'<img src="data:image/png;base64,'.
base64_encode($bytes).'"/>';

//echo"$name<br>$type<br>";
		 
	 
         break;
	 }
	 case "application/octet-stream":
	 {
			header("Content-type: application/pdf");
			header('Content-Description: File Transfer');
			header('Content-Disposition: inline; filename="'.$name.'"');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Content-Tranfer-Encoding: binary');
			ob_clean();
			flush();

			echo($bytes);
			
         break;
	 }
	 default:
         echo "Problem.. NOT AN IMAGE OR PDF FILE <br>";
}
}





?>
<br>
<a href="two-buttons-first.html"><input type="submit" value="HOME" class="button button2" /></a></center>
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