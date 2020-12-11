<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body g-app="myapp">
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/Green.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
                
				<form class="login100-form validate-form" action="clientRegister.php"  method="POST" id="register">
					<div class="login100-form-avatar">
						<img src="images/venty.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Welcome
					</span>

					<div class="wrap-input100 validate-input m-b-10" >
                        <label for="email" class="input200" >First Name</label><br>
						<input class="input100" type="text" name="First" placeholder="John">
						<span class="focus-input100"></span>
						
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="email" class="input200" >Last Name</label><br>
						<input class="input100" type="text" name="Last" placeholder="Smith">
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="gender" class="input200" >Gender</label><br>
						<select class="input100" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Prefer not to say</option>
                        </select>
						<!-- <span class="focus-input100"></span> -->
                    </div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "username is required">
                        <label for="email" class="input200" >Username</label><br>
						<input class="input100" type="email" name="username" placeholder="John@example.com">
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        <label for="email" class="input200" >Password</label><br>
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        <label for="email" class="input200" >Confirm Password</label><br>
						<input class="input100" type="password" name="verifypass" placeholder="Confirm Password">
						<span class="focus-input100"></span>
                    </div>
                  
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" form = "register">
							Register as Client
						</button>
					</div>
<!--
					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>
-->
					<div class="text-center w-full p-t-25 p-b-23">
						<a class="txt1" href="index.php">
							Already a Member? Click here to Login
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>