<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>
body {
  font-family: Calibri, Helvetica, sans-serif;
  background-image: url('vote2.jpg');
  background-attachment: fixed;
  background-size: cover;
}

button {
  background-color: #4CAF50;
  width: 20%;
  color: orange;
  padding: 10px;
  margin: 10px 0px;
  border: none;
  cursor: pointer;
}

form {
  border: 8px solid #f1f1f1;
  width: 400px;
  padding: 20px;
  margin: 75px auto;
}

input[type=text],
input[type=password] {
  width: 100%;
  margin: 10px 0;
  padding: 10px 10px;
  display: inline-block;
  border: 2.5px solid green;
  box-sizing: border-box;
}

button:hover {
  opacity: 0.7;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  margin: 10px 140px;
  background-color: #f44336;
}

.error {
  color: red;
}

.container {
  padding: 25px;
  background-color: lightblue;
}
</style>  
</head>    
<script>
function validate()
{
	var user = document.myform.user.value;
	var pass = document.myform.pass.value;
	
if(user=="")
{
alert("Department No Field is Empty");
document.myform.user.focus();
return false;
}
if(pass=="")
{
alert("Date Of Birth Field is Empty");
document.myform.pass.focus();
return false;
}
}
</script>
<body>    
    <center> <h1  style="text-align:center;font-family:algerian;font-size:250%; color:DarkSlateGrey"> Student Login </h1> </center>   
    <form  name="myform"  onsubmit="return validate()"  method="POST" action="studlog.php"  >  
        <div class="container">   
            <label>Username : </label>   
            <div><input type="text" id="username" placeholder="Enter UserName" name="user"></div>  
            <label>Date Of Birth : </label>   
           <div><input type="password" id="password" placeholder="Enter DOB" name="pass"></div> 	   
		   <?php if (isset($_GET['error'])): ?>
		<p class="error"><?php echo $_GET['error']; ?></p>
	<?php endif ?>
            <center><div><button type="submit">Login</button></div></center>    
            <button type="button" class="cancelbtn"> Cancel</button>    
        </div>   
    </form>     
</body>     
</html> 
