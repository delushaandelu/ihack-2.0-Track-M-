<?php
$servername = "us-cdbr-azure-southcentral-f.cloudapp.net";
$username = "b0f9ff81b8911a";
$password = "47bef9e2";
$database = "acsm_f467a7474f8577a";

//$servername = "localhost";
//$username = "root";
//$password = "";
//$database = "appareltech";

// Create connection
$conn = new mysqli($servername, $username, $password, $database) or die ("ERROR: Database");
/**
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
 **/
?>


