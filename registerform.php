<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration </title>
<link rel="stylesheet" href="style.css">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<script> $(function() {$( document ).tooltip();}); </script>
</head>

<body>

<h1 class="labelname1" align="center">SWACH BHARAT ABHIYAN</h1>

<div align="center"  width="400" ><img src="2.jpg" align="right" width="300" height="400">

<img src="1.jpg" align="left" width="300" height="400">

<div class="contain" align="center">

<form method="post" name="login" action="register.php" >

<table>

<tr>
<h2 class=""> Registration Page</h2>
</tr>

<tr>
<td>
<label for="name" class="labelname"> User Name:</label>
</td>
<td>
<input type="text" title="Enter Your User ID Plz..." name="username" 
id="userid" required="required" autocomplete="on" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;box-shadow:6px 10px 12px #888;'"/>
</td>
<td>
</tr>

<tr>
<td>
<label for="email" class="labelname">Email Id: </label>
</td>
<td>
<input type="text" title="Enter Your EmailID..." name="email" 
id="passid" required="required"  autocomplete="off" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888; -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;'"/>
<br/>
</td>
</tr>
<tr>
<td>

<label for="name" class="labelname"> Password: </label>
</td>
<td>
<input type="password" title="Enter Your Password..." name="password" 
id="passid" required="required"  autocomplete="off" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888; -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;'"/>
<br/>
</td>
<tr>
<td>
<input type="submit" name="submit" id="submit" title="Click Here to Login..."  value="Submit"  
onmouseover="style='color:white; font-size:18px; background-color:brown; padding:10px;width:220px;
 height:50px;  background-color:blue; align:center;-moz-box-shadow: 11px 10px 14px #888; 
-webkit-box-shadow: 11px 10px 12px #888;box-shadow:11px 10px 12px #888;'" 
onmouseout="style='width:220px; height:50px; padding:2px; background-color:brown; align:center;font-size:18px;'" />
</td>
</tr>

</table>

</form>

</div>

<br>

<br>



</div>
</body>
</html>