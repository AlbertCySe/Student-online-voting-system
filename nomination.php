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
//var name1=document.myform.getElementById("name1");
var name1 = document.myform.name1.value;
var dno1 = document.myform.dno1.value;
var percentage1 = document.myform.percentage1.value;
var img1 = document.forms['myform']['my_image1'];
var img2 = document.forms['myform']['my_image2'];
var valid=["jpeg","png","jpg"];
var name2 = document.myform.name2.value;
var dno2 = document.myform.dno2.value;
var percentage2 = document.myform.percentage2.value;
var dno3 = document.myform.dno3.value;
var dno4 = document.myform.dno4.value;
var dno5 = document.myform.dno5.value;
var phone = document.myform.phone.value;
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
if(percentage1=="")
{
alert("Percentage Field is Empty");
document.myform.percentage1.focus();
return false;
}else{
var exp = /^[6-9]{1}[0-9]{1}[.][0-9]{2}[%]$/;//percentage

var result = exp.test(percentage1);
}
if(!result)
{
alert("Please Fill The Correct Formet.EX:76.67%");
document.myform.percentage1.focus();
return false;
}
if(img1.value!='')
{
	var img_ext=img1.value.substring(img1.value.lastIndexOf('.')+1);
	var result=valid.includes(img_ext);
	if(result==false)
	{
		alert("Select jpg,jpeg,png Formet Only in Assistant Candidate's Photo");
		return false;
	}
	else{
		//if(img.size>125000)
		if(parseFloat(img1.files[0].size/(1024*1024))>=5)
		{
			alert("File Size Must be Smaller then 5 MB");
		return false;
        }	
		
	}
	
}
else{
	alert("Please Select the Candidate's Photo");
	return false;
}

if(name2=="")
{
alert("Assistant Candidate Name Field is Empty");
document.myform.name2.focus();
return false;
}else{
var exp = /^[A-Za-z]+$/;

var result = exp.test(name2);
}
if(!result)
{
alert("Please Use Alphapet Only");
document.myform.name2.focus();
return false;
}
if(dno2=="")
{
alert("Department No Field is Empty");
document.myform.dno2.focus();
return false;
}else{
var exp = /^[0-9]{2}[A-Za-z]{3}[0-9]{3}$/;
var result = exp.test(dno2);
}
if(!result)
{
alert("Please fill The Correct Formet.Ex:20ucs101");
document.myform.dno2.focus();
return false;
}
if(percentage2=="")
{
alert("Percentage Field is Empty");
document.myform.percentage2.focus();
return false;
}else{
var exp = /^[6-9]{1}[0-9]{1}[.][0-9]{2}[%]$/;//percentage

var result = exp.test(percentage2);
}
if(!result)
{
alert("Please Fill The Correct Formet.EX:76.67%");
document.myform.percentage2.focus();
return false;
}
if(img2.value!='')
{
	var img_ext=img2.value.substring(img2.value.lastIndexOf('.')+1);
	var result=valid.includes(img_ext);
	if(result==false)
	{
		alert("Select jpg,jpeg,png Formet Only in Assistant Candidate's Photo");
		return false;
	}
	else{
		//if(img.size>125000)
		if(parseFloat(img2.files[0].size/(1024*1024))>=5)
		{
			alert("File Size Must be Smaller then 5 MB");
		return false;
        }	
		
	}
	
}
else{
	alert("Please Select the Assistant Candidate's Photo");
	return false;
}

if(dno3=="")
{
alert("Supporters DNo Field is Empty");
document.myform.dno3.focus();
return false;
}else{
var exp = /^[0-9]{2}[A-Za-z]{3}[0-9]{3}$/;
var result = exp.test(dno3);
}
if(!result)
{
alert("Please fill The Correct Formet.Ex:20ucs101");
document.myform.dno3.focus();
return false;
}
if(dno4=="")
{
alert("Supporters DNo Field is Empty");
document.myform.dno4.focus();
return false;
}else{
var exp = /^[0-9]{2}[A-Za-z]{3}[0-9]{3}$/;
var result = exp.test(dno4);
}
if(!result)
{
alert("Please fill The Correct Formet.Ex:20ucs101");
document.myform.dno4.focus();
return false;
}
if(dno5=="")
{
alert("Supporters DNo Field is Empty");
document.myform.dno5.focus();
return false;
}else{
var exp = /^[0-9]{2}[A-Za-z]{3}[0-9]{3}$/;
var result = exp.test(dno5);
}
if(!result)
{
alert("Please fill The Correct Formet.Ex:20ucs101");
document.myform.dno5.focus();
return false;
}
if(phone=="")
{
alert("Phone No Field is Empty");
document.myform.phone.focus();
return false;
}else{
var exp = /^[6-9]{1}[0-9]{9}$/;//phone no
var result = exp.test(phone);
}
if(!result)
{
alert("Please fill The Correct Formet.EX:9999988888");
document.myform.phone.focus();
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
<form name="myform" action="upload.php" method="POST" onsubmit="return validate()"  enctype="multipart/form-data">  
  <div class="container">  
  <center>  <h1> NOMINATION FORM </h1> </center>  
  <hr>  
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
  <label> Candidate Name: </label>   
<input type="text" name="name1" id="name1" placeholder= "Enter Candidate's Name" size="20"  />
    
<label> Department No: </label>   
<input type="text" name="dno1" placeholder="Enter Candidate's D.No" size="10"  />  
<label> Percentage: </label>    
<input type="text" name="percentage1" placeholder="Enter Candidate's percentage" size="15" />
<label>
Candidate's Photo:
<div></div>
</label>
 <input type="file" name="my_image1">
 

<div></div><label> Assistant Candidate Name: </label>   
<input type="text" name="name2" placeholder= "Enter Assistent Candidate's Name" size="20"  />   
<label> Department No: </label>   
<input type="text" name="dno2" placeholder="Enter Assistent Candidate's D.No" size="10"  />   
<label> Percentage: </label>    
<input type="text" name="percentage2" placeholder="Enter Assistent Candidate's percentage" size="15" />     
<label>
Assistant Candidate's Photo:
</label>
<div></div>
 <input type="file" name="my_image2">
 
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other 
</div>   
<label> Supporters DNo: </label>    
<input type="text" name="dno3" placeholder="Enter Supporter's Dno" size="15" /> 
<input type="text" name="dno4" placeholder="Enter Supporter's Dno" size="15" /> 
<input type="text" name="dno5" placeholder="Enter Supporter's Dno" size="15"/>    
  

<label>   
Phone :  
</label>  
<input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/>   
<input type="text" name="phone" placeholder="phone no." size="10"/ >   
 
 <label for="email">Email</label>  
 <input type="text" placeholder="Enter Email" name="email">  
  
        <button type="submit" class="registerbtn">Register</button>    
</form>  
</body>  
</html>  




