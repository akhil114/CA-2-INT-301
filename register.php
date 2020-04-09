<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" 
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
     <style> 
        .input-group i { 
            position: absolute; 
        } 
          
        .input-group { 
            width: 100%; 
            margin-bottom: 10px; 
        } 
          
        .icon { 
            padding: 10px; 
            min-width: 40px; 
        } 
        .tele{
        	padding: 10px; 
            min-width: 40px; 
        }
         .lock{
        	padding: 10px; 
            min-width: 30px; 
        }

       
    </style> 
</head>
<body>
	<div class="header" >
		<h2 align="left" >Sign Up</h2>
		<h6 align="left" >Please fill in this form to create an account!</h6>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			 <i class="fa fa-user icon"></i> 
			<input type="text" style="padding-left: 30px " name="username" value="<?php echo $username; ?>" placeholder="  Username">
		</div>
		<div class="input-group">
		<i class="fa fa-telegram tele" style="font-size:20px "></i>
			<input type="email" style="padding-left: 30px " name="email" value="<?php echo $email; ?>" placeholder="   Email Address" >
		</div>
		<div class="input-group">
			<i class="fa fa-lock lock" style="font-size:24px"></i>
			<input type="password" style="padding-left: 30px " name="password_1" placeholder="  Password">
		</div>
		<div class="input-group">
			<i class="fa fa-lock lock" style="font-size:24px"></i>
			<input type="password" style="padding-left: 30px " name="password_2" placeholder="  Confirm password">
		</div>
		<input type="checkbox" id="terms" name="v" value="condition">
<label for="terms" style="font-size: 12px"> I accept the <b style="color: #5F9EA0">Terms of use</b> & <b style="color: #5F9EA0">Privacy Policy</b></label><br>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user" style="min-width: 150px">Sign Up</button>
		</div>

	</form>
</body>
</html>

