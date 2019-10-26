 <?PHP
session_start();
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SWACH BHARAT ABHIYAN</title>
</head>
<style>
body {
    background-image: url("s.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.contained 
{ width:200px; 
margin:2 auto; 
margin-top:10px; 
min-height:10px; 
padding:5px; 
-moz-box-shadow: 10px 10px 12px #F07B7B;
-webkit-box-shadow: 10px 10px 12px #F07B7B;
box-shadow:10px 10px 12px #F07B7B;
}

.contain 
{ width:500px; 
margin:0 auto; 
border:10px green dashed; 
margin-top:20px; 
min-height:300px; 
padding:5px; 
-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;
}
.right 
{
    position: absolute;
    right: 0px;
    width: 500px;
    background-color: #b0e0e6;
}

a{
background:#D3FCCD;
width: 400px;
height: 300px;
-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;
}
.img{
background:#D3FCCD;
width: 100px;
height: 100px;
-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;
}
.img1{
background:#D3FCCD;
align:center;
width: 800px;
height: 200px;
-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;
}
input { font-size:18px; color:white; background:green; padding:10px; width:200px; margin-top:25px;}

.labelname { font-size:20px; font-weight:bold; font-family:Copperplate Gothic Bold,Cambria (Headings),Bradley Hand ITC; color:#33C; padding:10px; -moz-box-shadow: 6px 10px 12px #888;  -webkit-box-shadow: 6px 6px 12px #888; box-shadow:6px 10px 12px #888; }

.labelname1 { font-size:25px; font-weight:bold; font-family:Cambria (Headings),Bradley Hand ITC; color:GREEN; padding:10px; -moz-box-shadow: 6px 10px 12px #888;  -webkit-box-shadow: 6px 6px 12px #888; box-shadow:6px 10px 12px #888; alighn="right" }

#submit { width:220px; height:40px;font-weight:bold; padding:2px; background-color:brown; align:right; font-size:22px;}

h1 { color:white; font-size:22px; background-color:#CCC; padding:10px; }

h2 { color:white; font-size:22px; background-color:pink; padding:10px; }
h3 { color:#654; font-size:15px;}
h4 { color:#333; font-size:18px;background-color:pink;}

</style>

<script>$(function(){$( document ).tooltip();}); </script>

<style>label{ display: inline-block;width: 8em;}</style>
<body onload="checkCookie();">
<center>
<div align="right"><div id="submit">  |<a href="logout.php" title="Click to Log Out"> LogOut</a>| </h4> </div></div>
<img src="head_gif.gif"    class="img1" width="700"  height="300">

<h1 align="left"> SWACH BHARAT ABHIYAN MISSION INDIA <span class="usrname"> </span> </h1>

 <h4 align="left" >PROVIDE ACCURATE COMPLAINT DETAILS FOR BETTER SERVICE</h4>



<table align="left" width="800">
<tr>
<td>
<marquee behaviour="alternate" scroll="alternate" class="contained" ><a href="#">Latest Updates on Policies</a></marquee>
<li>
<a href="#"><ul class="contained" onmouseover="style='width:205px;  margin:2 auto;  margin-top:10px;  min-height:10px;  padding:5px;  -moz-box-shadow: 10px 10px 12px #8569F3; -webkit-box-shadow: 10px 10px 12px #8569F3; box-shadow:10px 10px 12px #8569F3;'" onmouseout="style='width:200px; margin:2 auto; margin-top:10px; min-height:10px; padding:5px; -moz-box-shadow: 10px 10px 12px #8569F3;-webkit-box-shadow: 10px 10px 12px #8569F3;box-shadow:10px 10px 12px #8569F3;'">View Feedback on Service from Govt. </ul></a>

</li> 
</td>
<td></td>
<td>
    <table align="right" width="800">
	<tr>
	<td>

<?php
include('db.php');

$sql="select * from reports,image where reports.pid= image.id" ;
$res=mysql_query($sql);

//$sqltwo="select * from image";

//$restwo=mysql_query($sqltwo);
$uploads="uploads/"
?>

<body>
<p><a href="custcomplaints.php">REFRESH RECORDS</a> </p>
 <table width="567" border="4" class="img" align="center">
<thead>


   <tr>
     <th scope="row">SL NO</th>
     <th width="79">Corporater NAME</th>
     <th width="75"><p>Ward NO</th>
    <th width="55"><p>Address</th>
     <th width="55"><p>PHOTO</th>
     
     <th width="139" >STATUS </th>
     	 
   </tr>
   <?php
   while($row=mysql_fetch_array($res) )
   {
      ?>
   <tr><td scope="row"><?php echo $row["pid"];?>&nbsp;</td>
     <td scope="row"><?php echo $row["name"];?>&nbsp;</td>
     <td scope="row"><?php echo $row["wardno"];?>&nbsp;</td>
     <td><?php echo $row["address"];?>&nbsp;</td>
		  <td><img class="img" src="<?php  echo $uploads.$row["iname"];?>" width="100" height="100">&nbsp;</td> 
		  <td><?php echo $row["status"];?></td>
     
   </tr>
   </tr>
   <?php
   
   }
   ?>

</td>
</tr>
</table>
</td>
</tr>
</table>

</center>
</body>

</html>