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
	<h2 style="text-align:center;font-family:algerian;font-size:200%;">Election-2023</h2>


<center>
 <form enctype="multipart/form-data">
 <table id="demo">
  <tr>
<th><center>Class</center></th>
    <th><center>Candidate Name</center></th>
	 <th><center>Deaprtment No</center></th>
	 <th><center>Percentage</center></th>
	  <th><center>Photo</center></th>
	   <th><center>Assistant Name</center></th>
	   <th><center>Department No</center></th>
	   <th><center>Percentage</center></th>
	   <th><center>Photo</center></th>
	   <th><center>Gender</center></th>
	   <th><center>Supporter1</center></th>
	   <th><center>Supporter2</center></th>
	   <th><center>Supporter3</center></th>
	    <th><center>Phone</center></th>
		 <th><center>Email</center></th>
	   
</tr>


<?php
$con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM nomination");
//$row = mysqli_fetch_array($result);
//echo "<center><table border='1'>
if(mysqli_num_rows($result)>0)
{
	foreach($result as $row)
	{
?>
<tr>
<td><center><?php echo $row['class'];?></center></td>
<td><center><?php echo $row['name1'];?></center></td>
<td><center><?php echo $row['dno1'];?></center></td>
<td><center><?php echo $row['percentage1'];?></center></td>
<td><center><img src="<?php echo "candidate/".$row['image1'];?>" alt="Image" style=" width: 130px; height: 130px;"></center></td>
<td><center><?php echo $row['name2'];?></center></td>
<td><center><?php echo $row['dno2'];?></center></td>
<td><center><?php echo $row['percentage2'];?></center></td>
<td><center><img src="<?php echo "assistant/".$row['image2'];?>" alt="Image" style=" width: 130px; height: 130px;"></center></td>
<td><center><?php echo $row['gender'];?></center></td>
<td><center><?php echo $row['dno3'];?></center></td>
<td><center><?php echo $row['dno4'];?></center></td>
<td><center><?php echo $row['dno5'];?></center></td>
<td><center><?php echo $row['phone'];?></center></td>
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