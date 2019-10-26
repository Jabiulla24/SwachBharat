<?php
$target_path1 = "uploads/";
/* Add the original filename to our target path.
Result is "uploads/filename.extension" */
$host="localhost";
$user="root";
$pass="";
$db="swachbharat";
$target_path1 = $target_path1 . basename( $_FILES['uploaded_file']['name']);
if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_path1)) {
    echo "The first file ".  basename( $_FILES['uploaded_file']['name']). " has been uploaded.";
                     
					  $imgData =$_FILES['uploaded_file']['size'];
					 
					  mysql_connect($host, $user, $pass) OR DIE (mysql_error());

                    // select the db
                    mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());

                    // our sql query
                    $sql = "INSERT INTO image(image, iname)VALUES('$imgData', '{$_FILES['uploaded_file']['name']}');";

                    // insert the image
                    mysql_query($sql) or die("Error in Query: " . mysql_error());
                    $msg='<p>Image successfully saved in database with id ='. mysql_insert_id().' </p>';	
	
	
	
	
} else{
    echo "There was an error uploading the file, please try again!";
    echo "filename: " .  basename( $_FILES['uploaded_file']['name']);
    echo "target_path: " .$target_path1;
}
?>