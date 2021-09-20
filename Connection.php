<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ps photography";
$conn=mysqli_connect("$servername","$username","$password","$dbname");

/*if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}*/
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// Close connection
//mysqli_close($con);
?>