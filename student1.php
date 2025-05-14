<?php  

$servername = "localhost";
$username = "root";
$password = "";

$db_name = "project";

$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

$class = $_POST['class'];
$name = $_POST['name1'];
$dno = $_POST['dno1'];
$dob = $_POST['dob'];
$email = $_POST['email'];

$sql = "INSERT INTO student(class,name,dno,dob,email)VALUES('$class','$name','$dno','$dob','$email')";
if ($conn->query($sql) === TRUE) {
		header("Location: out1.php");
//echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}
?>