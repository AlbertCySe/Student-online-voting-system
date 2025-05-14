<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "db_conn.php";
	$class = $_POST['class'];
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

	//echo "<pre>";
	//print_r($_FILES['my_image']);
	//echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: nomination.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO nomination(class,name1,dno1,percentage1,image1,name2,dno2,percentage2,gender,dno3,dno4,dno5,phone,email) 
				        VALUES('$class','$name1','$dno1','$percentage1','$new_img_name','$name2','$dno2','$percentage2','$gender','$dno3','$dno4','$dno5','$phone','$email' )";
				if ($conn->query($sql) === TRUE) {
					header("Location: out.php");
//echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}
			}else {
				$em = "You can't upload files of this type";
		        header("Location: nomination.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: nomination.php?error=$em");
	}

}else {
	header("Location: nomination.php");
}
?>
