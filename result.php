<!DOCTYPE html>
<html>
<head>
<style>
body{  
  background-color: darkgray;
}  
#demo{
width:50%;
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
<h2 style="text-align:center;font-family:algerian;font-size:300%;">St.Joseph's College , Tiruchirappalli</h2>
<h2 style="text-align:center;font-family:'Brush Script MT', cursive;font-size:250%;">Department Of Computer Science</h2>
	<h2 style="text-align:center;font-family:'Brush Script MT', cursive;font-size:250%;">Online Voting Result-2023</h2>


<center>
 <form enctype="multipart/form-data">
 <table id="demo">
  <tr>
<th><center>Class</center></th>
<th><center>No.Of  Votes</center></th>
   
	   
</tr>


<?php
$con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



//$result = mysqli_query($con,"SELECT output,COUNT(output) FROM result ");
$result = mysqli_query($con,"SELECT output,COUNT(*) AS total FROM result group by output ");
$row = mysqli_fetch_array($result);
//$values=mysqli_fetch_assoc($result);
//$number=$row['total'];
//echo "<center><table border='1'>
//https://www.w3resource.com/mysql/aggregate-functions-and-grouping/count.php
//foreach($con->query('SELECT output,COUNT(output) FROM result') as $row1) {
//echo "<tr>";
//echo "<td>" . $row1['COUNT(output)'] . "</td>";
//echo "</tr>";}
if(mysqli_num_rows($result)>0)
	
{
	foreach($result as $row)
	{
?>
<tr>
<td><center><?php echo $row['output'];?></center></td>
<td><center><?php echo $row['total'];?><center></center></td>
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

