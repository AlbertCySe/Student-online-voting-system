<?phpsession_start();
$con=mysqli_connect('localhost','root','','project');
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$res=mysqli_query($con,"select * from student where email='$email' and otp='$otp'");
$count=mysqli_num_rows($res);if($count>0){	mysqli_query($con,"update student set otp='' where email='$email'");
	$_SESSION['IS_LOGIN']=$email;	
echo "yes";
}
else
{	
echo "not_exist";
}
?>