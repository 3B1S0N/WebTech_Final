<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script>
            var myApp = angular.module("myapp", []);
            myApp.controller("PasswordController", function($scope) {

                var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

                $scope.passwordStrength = {
                    "float": "right",
                    "width": "390px",
                    "height": "25px",
                    "margin-left": "50px",
					"margin-bottom": "5px"
                };

                $scope.analyze = function(value) {
                    if(strongRegex.test(value)) {
                        $scope.passwordStrength["background-color"] = "green";
                    } else if(mediumRegex.test(value)) {
                        $scope.passwordStrength["background-color"] = "orange";
                    } else {
                        $scope.passwordStrength["background-color"] = "red";
                    }
                };

            });
        </script>



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

<body ng-app="myapp">
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/Green.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
                
				<form class="login100-form validate-form" action="adminRegister.php"  method="post" id="Adminregister">
					<div class="login100-form-avatar">
						<img src="images/venty.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Welcome
					</span>

					<div class="wrap-input100 validate-input m-b-10" >
                        <label for="Company Name" class="input200" >Company Name</label><br>
						<input class="input100" type="text" name="Company" placeholder="Venty Co.">
						<span class="focus-input100"></span>
						
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="First Name" class="input200" >First Name</label><br>
						<input class="input100" type="text" name="First" placeholder="John">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-10">
                        <label for="Last Name" class="input200" >Last Name</label><br>
						<input class="input100" type="text" name="Last" placeholder="Smith">
						<span class="focus-input100"></span>
                    </div>
                    

					<div class="wrap-input100 validate-input m-b-10" data-validate = "username is required">
                        <label for="Email" class="input200" >Username</label><br>
						<input class="input100" type="email" name="email" placeholder="John@example.com" required>
						<span class="focus-input100"></span>
                    </div>
                    
                
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<label for="password" class="input200"><b>Password</b></label>   
						<div ng-controller="PasswordController">
								<div style="float: left; width: 100px">
									<input class="input100" type="password" name ="pass" ng-model="password" ng-change="analyze(password)" style="width: 390px;" />
								</div><br><br>
								<div ng-style="passwordStrength" style="margin-top: 10px; width: 390px;"></div>
						</div>  
						
					</div>
                 
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" form = "Adminregister">
							Register as Organiser
						</button>
					</div>


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