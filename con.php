<?php

// Create connection
$conn = new mysqli("localhost", "Tejas", "tejas123", "mydatabases");
// Check connection
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection OK!";


$result = $conn->query("select * FROM student");
echo "Number of rows:$result->num_rows";

$result->close();
$conn->close();

?>
