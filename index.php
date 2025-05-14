<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 490px;
    	margin: 100px 400px;
		
	
		
	}
	Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image: url('vote2.jpg');
 background-attachment: fixed;  
 background-size: cover;
 
}  
    .login-form form {
    	margin-bottom: 15px;
        background: skyblue;
		border: 10px solid #f1f1f1; 
		padding:100px;
	
       
        
    }
    .login-form h2 {
        margin: 0 0 30px;
    }
    .form-control, .btn {
        min-height: 40px;
        border-radius: 10px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form  method="post">
        <h2 class="text-center">OTP Verification</h2>       
        <div class="form-group first_box">
            <input type="text" id="email" class="form-control" placeholder="Enter Your Email" required="required">			<span id="email_error" class="field_error"></span>
        </div>
        <div class="form-group first_box">
            <button type="button" class="btn btn-primary btn-block" onclick="send_otp()">Send OTP</button>
        </div>
        <div class="form-group second_box">
            <input type="text" id="otp" class="form-control" placeholder="Enter Your 4 Digit OTP" required="required">			<span id="otp_error" class="field_error"></span>
        </div>
        <div class="form-group second_box">
            <button type="button" class="btn btn-primary btn-block" onclick="submit_otp()" >Submit OTP</button>
        </div>       
    </form>
</div><script>function send_otp(){	var email=jQuery('#email').val();	jQuery.ajax({	url:"send_otp.php",		type:"POST",		data:"email="+email,		success:function(result){			if(result=="yes")
			{				jQuery('.second_box').show();				jQuery('.first_box').hide();			}			if(result=="not_exist"){
				jQuery('#email_error').html('Please enter valid email');
			}		}	});}function submit_otp(){
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:'check_otp.php',
		type:'post',
		data:'otp='+otp,
		success:function(result){
			if(result=='yes'){
				window.location='dashboard.php'
			}
			if(result=='not_exist'){
				jQuery('#otp_error').html('Please enter valid otp');
			}
		}
	});
}
</script><style>.second_box{display:none;}.field_error{color:red;}</style>
</body>
</html>                                		                            