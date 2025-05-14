<html>
<head>
<title>IPL TEAM</title>
<table>
<center>
<form method="post">
<tr><td><label for="name">name</label></td><td>
<input type="text" id="name" name="name" required><br></td></tr>
<tr>
<td><input type="submit" value="Submit"></td>
<tr><th align=left><a href="http://localhost/menu.php">Home </a></th></tr>
</tr><br>
</form>
</table>
</center>
</div><br><center><br><br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$n=$_POST["name"];
$sql = "SELECT (name1,dno1,name2,dno2) FROM nomination WHERE name1='$n';";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
// output data of each row
while($row = $result->fetch_assoc()){
echo "<center><table border='1'>
<tr>
<th>CName</th>
<th>Dno</th>
<th>Assistent</th>
<th>Dno2</th>
</tr>";
echo "<tr>";
echo "<td>" . $row['name1'] . "</td>";
echo "<td>" . $row['dno1'] . "</td>";
echo "<td>" . $row['name2'] . "</td>";
echo "<td>" . $row['dno2'] . "</td>";
echo "</tr>";
}
} else {
echo "NO Data Found";
}
$conn->close();
?><br><br>
</div>
</center>
</body>
</html>