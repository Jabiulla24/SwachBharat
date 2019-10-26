<?php
session_start();
include('db.php');

$data=mysql_query("select * from logfile where slno=max(slno)");
	$row=mysql_fetch_array($data);
	$d2=$row[0];
	$d2+=$d2;
	$fetch=mysql_query("insert into logfile values('".$row[0]."',now(),'logged out',".$d2.")");
if(session_destroy())
{
header("Location: index.php");
}
?>