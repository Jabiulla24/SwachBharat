<?php
include('db.php');

$SLNO=$_REQUEST["pid"];

$sql="update reports set status='Action Taken and report is completed' where pid='$SLNO'";
mysql_query($sql);
header("Location:complaints.php");
?>


