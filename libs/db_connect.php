<?php 
/*
@include($curr_dir . '../config.php');
		$config_array = array(
			'dbServer' => $dbServer,
			'dbUsername' => $dbUsername,
			'dbPassword' => $dbPassword,
			'dbDatabase' => $dbDatabase,
			'adminConfig' => $adminConfig
		);
// $con=mysqli_connect('dbServer','dbUsername','dbPassword','irental');
$con=mysqli_connect('localhost','irental','pCDptN423peJuG6','irental');
if (mysqli_connect_errno()) {
	# code...
	echo "Could Not Connect to MYSQL database".mysqli_connect_error();
}
*/

// Adjust the relative path based on your directory structure
$curr_dir = __DIR__ . '/'; 

// Include configuration file
@include($curr_dir . '../config.php');

// Check if configuration variables are defined
if (!isset($dbServer) || !isset($dbUsername) || !isset($dbPassword) || !isset($dbDatabase)) {
    die("Configuration variables are not properly defined");
}

// Database connection
$con = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbDatabase);

if (mysqli_connect_errno()) {
    echo "Could not connect to MySQL database: " . mysqli_connect_error();
} 

 ?>