<?php 
$user=$_POST['username'];
$pass=$_POST['password'];
$login_session=$user;

if(isset($user,$pass))
{

include('db.php');
$fetch=mysql_query("select * from users where name='$user' and password='$pass'  ");
$count=mysql_num_rows($fetch);
$row=mysql_fetch_array($fetch);

    if($count!="" && $row['usertype']=="admin")
    {
	   
	header("Location:profile.php");	
	
    }
    else if ($row['usertype']=="customer")
    {
	
	header('Location:profilecustomer.php');
    }
	else
	
	{
echo "Enter Correct Username and Password";
	header("Location:index.php");	
	}
	
	ob_end_flush();
}



?>
