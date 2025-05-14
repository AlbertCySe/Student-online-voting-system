<!DOCTYPE html>
<html>
<head>
<style>
body{  
  background-color: darkgray;
}  
#demo{
width:100%;
}
#demo td{
 border: 3px solid black;
  padding: 10px;
  }
 
#demo th {
  border: 3px solid black;
  padding: 8px;
}

#demo th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: blue;
  color: white;
}
.menu-bar
{
	background:#B73049 ;
	text-align:center;
}
.registerbtn {  
  background-color: Purple;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 20%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  

</style>
</head>
<body>

<h2 style="text-align:center;font-family:algerian;font-size:200%;">Department Of Computer Science</h2>
	<h2 style="text-align:center;font-family:algerian;font-size:200%;">Student Details</h2>


<center>
 <form enctype="multipart/form-data">
 <table id="demo">
  <tr>
<th><center>Class</center></th>
    <th><center>Student Name</center></th>
	 <th><center>Deaprtment No</center></th>
	 <th><center>Date Of Birth</center></th>
	  <th><center>Email</center></th>
	   
</tr>


<?php
$con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM student");
//$row = mysqli_fetch_array($result);
//echo "<center><table border='1'>
if(mysqli_num_rows($result)>0)
{
	foreach($result as $row)
	{
?>
<tr>
<td><center><?php echo $row['class'];?></center></td>
<td><center><?php echo $row['name'];?></center></td>
<td><center><?php echo $row['dno'];?></center></td>
<td><center><?php echo $row['dob'];?></center></td>
<td><center><?php echo $row['email'];?></center></td>
</tr>  
<?php
	}
}
else{
?>
<tr>
<td>No Reacord Aviliable</td>
</tr>
<?php
}
?>
</table> 
<div></div>
<div></div>
</form>
</center>
</body>
</html>