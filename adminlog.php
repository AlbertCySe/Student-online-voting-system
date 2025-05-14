<?php
session_start();
$username=$_POST["user"];
$password=$_POST["pass"];
$error = ['error'];
$con=mysqli_connect("localhost","root","","project");
if($con->connect_error)
{
die("Faild to Connect:".$con->connect_error);
}
else
{
$stmt=$con->prepare("select * from admin where username=?");
$stmt->bind_param("s",$username);
$stmt->execute();
$stmt_result=$stmt->get_result();
if($stmt_result->num_rows>0)
{
$data=$stmt_result->fetch_assoc();
if($data['password']===$password)
{
	header("Location:admin.php");
//echo"<h2> Login Successfully</h2>";
}else
{
		$em = "Invalid Username or Password";
		    header("Location: admin_login.php?error=$em");
	//echo"<h2> Invalid UserName or Password</h2>";
}
}
else
{
		$em = "Invalid Username or Password";
		    header("Location: admin_login.php?error=$em");
//echo"<h2> anto Error</h2>";
}
}



?> 