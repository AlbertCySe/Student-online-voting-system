<?php  

$servername = "localhost";
$username = "root";
$password = "";

$db_name = "mysql";

$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

$vote = $_POST['vote'];
$sql = "INSERT INTO imguploap(name)VALUES('$vote')";
if ($conn->query($sql) === TRUE) {
echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}
?>