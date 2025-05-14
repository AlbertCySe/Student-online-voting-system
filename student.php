<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image: url('vote2.jpg');
 background-attachment: fixed;  
 background-size: cover;
}  
.container {  
    padding: 50px;  
  background-color: LightSeaGreen;  
}  


form {   
        border: 8px solid #f1f1f1;  
	width=10px; 
	padding:10px 10px;
	margin:75px 400;
    } 

  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 12px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: Purple;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  




</style>  
</head>  

<script>
function validate()
{
var name1 = document.myform.name1.value;
var dno1 = document.myform.dno1.value;
var dob = document.myform.dob.value;
var email = document.myform.email.value;
if(name1=="")
{
alert("Candidate Name Field is Empty");
document.myform.name1.focus();
return false;
}else{
var exp = /^[A-Za-z]+$/;

var result = exp.test(name1);
}
if(!result)
{
alert("Please Use Alphapet Only");
document.myform.name1.focus();
return false;
}
if(dno1=="")
{
alert("Department No Field is Empty");
document.myform.dno1.focus();
return false;
}else{
var exp = /^[0-9]{2}[A-Za-z]{3}[0-9]{3}$/;
var result = exp.test(dno1);
}
if(!result)
{
alert("Please fill The Correct Formet.Ex:20ucs101");
document.myform.dno1.focus();
return false;
}
if(dob=="")
{
alert("Date Of Birth Field is Empty");
document.myform.dob.focus();
return false;
}else{
var exp = /^[0-3]{1}[0-9]{1}[0-1]{1}[0-9]{1}[1-2]{1}[0-9]{3}$/;
var result = exp.test(dob);
}
if(!result)
{
alert("Please fill The Correct Formet.Ex:ddmmyyyy");
document.myform.dob.focus();
return false;
}
if(email=="")
{
alert("Email Field is Empty");
document.myform.email.focus();
return false;
}else{
var exp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;//email
var result = exp.test(email);
}
if(!result)
{
alert("Please fill The Correct Formet.Ex:example@gmail.com");
document.myform.email.focus();
return false;
}
}
</script>


<body>  
<form name="myform" onsubmit="return validate()" method="post" action="student1.php" enctype="multipart/form-data">  
  <div class="container">  
  <center>  <h1> STUDENT DETAILS </h1> </center>  
  <hr> 
<div>  
<label>   
Class :  
</label>   
  <div>  
<select name="class">   
<option value="1cs">I BSC Computer Science</option>  
<option value="2cs">II BSC Computer Science</option>  
<option value="3cs">III BSC Computer Science</option>    
</select>  
</div>  
</div>  
  <label> Student Name: </label>   
<input type="text" name="name1" placeholder= "Enter Candidate's Name" size="20"> 
    
<label> Department No: </label>   
<input type="text" name="dno1" placeholder="Enter Candidate's D.No" size="5">  
<label> Date Of Birth: </label>    
<input type="text" name="dob" placeholder="Enter Candidate's percentage" size="15">

   

 
 <label for="email">Email</label>  
 <input type="text" placeholder="Enter Email" name="email">  
  
        <button type="submit" class="registerbtn">Register</button>    
</form>  
</body>  
</html>  