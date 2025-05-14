<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
   
	$name1 = $_POST['name1'];
	$dno1 = $_POST['dno1'];
	$percentage1 = $_POST['percentage1'];
	$name2 = $_POST['name2'];
	$dno2 = $_POST['dno2'];
	$percentage2 = $_POST['percentage2'];
	$gender = $_POST['gender'];
	$dno3 = $_POST['dno3'];
	$dno4 = $_POST['dno4'];
	$dno5 = $_POST['dno5'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$class = $_POST['class'];
	$img_name1 = $_FILES['my_image1']['name'];
	$img_size1 = $_FILES['my_image1']['size'];
	$tmp_name1 = $_FILES['my_image1']['tmp_name'];
	$img_name2 = $_FILES['my_image2']['name'];
	$img_size2 = $_FILES['my_image2']['size'];
	$tmp_name2 = $_FILES['my_image2']['tmp_name'];

	//echo "<pre>";
	//print_r($_FILES['my_image']);
	//echo "</pre>";
	$img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
			$img_ex_lc1 = strtolower($img_ex1);

			$allowed_exs1 = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc1, $allowed_exs1)) {
				$new_img_name1 = uniqid("IMG-", true).'.'.$img_ex_lc1;
				$img_upload_path1 = 'candidate/'.$new_img_name1;
				move_uploaded_file($tmp_name1, $img_upload_path1);


					$img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
			$img_ex_lc2 = strtolower($img_ex2);

			$allowed_exs2 = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc2, $allowed_exs2)) {
				$new_img_name2 = uniqid("IMG-", true).'.'.$img_ex_lc2;
				$img_upload_path2 = 'assistant/'.$new_img_name2;
				move_uploaded_file($tmp_name2, $img_upload_path2);


	
				$sql = "INSERT INTO nomination(class,name1,dno1,percentage1,image1,name2,dno2,percentage2,image2,gender,dno3,dno4,dno5,phone,email) 
				        VALUES('$class','$name1','$dno1','$percentage1','$new_img_name1','$name2','$dno2','$percentage2','$new_img_name2','$gender','$dno3','$dno4','$dno5','$phone','$email' )";
				if ($conn->query($sql) === TRUE) {
										header("Location: out.php");
//echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}
			}
				}
				?>
			