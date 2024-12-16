<?php
header("Access-Control-Allow-Origin: *"); // Allow requests from any origin
$servername = "fdb1029.awardspace.net";
$username = "4564847_land";
$password = "landlto123";
$dbname = "4564847_land";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo json_encode(["status" => "success", "message" => "Connected successfully!"]);
}
?>
