<?php
$servername = "aws.computerstudi.es";
$dbusername = "gcc200408803";
$dbpassword = "twelwx9h6a";
$dbname = "gcc200408803";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
