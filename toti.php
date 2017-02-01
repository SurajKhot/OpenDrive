<html>
<body>
<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_primaryDatabase = 'test';

// Connect to the database, using the predefined database variables in /assets/repository/mysql.php
$dbConnection = new mysqli($db_host, $db_username, $db_password, $db_primaryDatabase);     


								
                $create = "CREATE TABLE USERS(			 	
                          ID int(255) AUTO_INCREMENT,
                          Paper varchar(100) NOT NULL,
                          Author varchar(100) NOT NULL,
						  Tag1 varchar(50) NOT NULL,
						  Tag2 varchar(100) NOT NULL,
						  name varchar(100) NOT NULL,
						  Mime varchar(50) NOT NULL,
						  Mime2 varchar(50) NOT NULL,
                          Size int(100),
						  user varchar(100) NOT NULL,
			              Data Mediumblob,
                          Rating int(12),
						  Date date,
                          PRIMARY KEY  (ID)
                          )";
                


if($dbConnection->query($create)){      //Because you want the table "users" in the tutorial database .
echo"Your table was successfully created.You're a member now.Press back and GET STARTED";
}
   
 else 
	echo"TABLE ALREADY EXISTS";
?>
<p style="color:black; font-size:20px"> Press BACK and continue
<a href="tables.html"><input type="submit" value="BACK" class="button button2"/></a>
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
 </head>

