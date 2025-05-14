<?php  
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$db_name = "project";

$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
$vote = $_POST['vote'];
$dno=$_SESSION['user1'];

$stmt=$conn->prepare("select * from result where input=?");
$stmt->bind_param("s",$dno);
$stmt->execute();
$stmt_result=$stmt->get_result();
if($stmt_result->num_rows>0)
{
		header("Location: out3.php");
	//echo "You are Already Responded";
	return false;
}
else{	
$sql = "INSERT INTO result(input,output)VALUES('$dno','$vote')";
if ($conn->query($sql) === TRUE) {
		header("Location: out2.php");
//echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}
}
?>