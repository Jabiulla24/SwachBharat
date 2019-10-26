<?php

session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login System </title>
<link rel="stylesheet" href="style.css">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<script> $(function() {$( document ).tooltip();}); </script>
</head>

<body>

<h1 class="labelname1" align="center">SWACH BHARAT ABHIYAN</h1>

<div align="center"  width="400" ><img src="2.jpg" align="right" width="300" height="390">

<img src="1.jpg" align="left" width="300" height="390">

<div class="contain" align="center">







<?php
 
 session_start();
if($_POST["username"] && $_POST["email"] && $_POST["password"] )
{
	
	include "db.php";

	
   
    $sql="insert into users (name,email,password)values('$_POST[username]','$_POST[email]','$_POST[password]')";
    $result=mysql_query($sql,$conn) or die(mysql_error());		
    print "<center><h1>you have registered sucessfully</h1></center>";
   
    print "<center><a href='index.php'>go to login page</a></center>";
	}
	
else print"invaild input data";

?>
</div>

<br>

<br>

<div>

</div>

</div>
</body>
</html>