<?php

/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */

// array for JSON response
$response = array();

// check for required fields
if  ( !empty($_POST["name"]) && !empty($_POST["password"]) ) {
    
    $name = $_POST['name'];
    $password = $_POST['password'];

    // include db connect class
    require_once __DIR__ . '/db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();

    // mysql inserting a new row
    $query = "SELECT pid FROM users WHERE name = '$name' AND password = '$password'";
$result = mysql_query($query) or die("Unable to verify user because : " . mysql_error());


    // check if row inserted or not
    if (mysql_num_rows($result) > 0) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "User login successfully.";
        $response["username"]=$name;
        $response["password"]=$password;
        // echoing JSON response
        echo json_encode($response);
    } 
	else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Username or Password is incorrect.";
        
        // echoing JSON response
        echo json_encode($response);
    }
} 
else {
    // required field is missing
    $response["success"] = 2;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}
?>