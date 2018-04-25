<?php

define('SERVERNAME','localhost');
define('USERNAME','fourtfsa_website');
define('PASSWORD','021@appsquadz23');
define('DATABASE','fourtfsa_appsquadz_main_db');

// Create connection
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}


// GET DATA BY PASS A CUSTOM QUERY
function fetch_data_by_custom_query($query){
	//echo $query; 
	$response = array();	
	$servername = "localhost";
	$username = "fourtfsa_website";
	$password = "021@appsquadz23";
	$dbname = "fourtfsa_appsquadz_main_db";
   // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
	$result = $conn->query($query);
	
	$count=mysqli_num_rows($result);
	while ($fetch = $result->fetch_array(MYSQLI_ASSOC)) {
		$response[] = $fetch;
	}
	
	//print_r($response); die ('working');
	return $response;
}

// contact us
function insert_data_by_custom_query($query){ 
 //echo $query;
 $response = array(); 
 $servername = "localhost";
 $username = "fourtfsa_website";
 $password = "021@appsquadz23";
 $dbname = "fourtfsa_appsquadz_main_db";
   // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
 $result = $conn->query($query);
 return $result;
}
?>