<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script>
            var myApp = angular.module("myapp", []);
            myApp.controller("PasswordController", function($scope) {

                var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

                $scope.passwordStrength = {
                    "float": "left",
                    "width": "100px",
                    "height": "25px",
                    "margin-left": "5px"
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

<body ng-app="myapp">
        <form action="clientRegister.php" method="post">   

        <label for="First Name"><b>First Name</b></label>   
        <input type="text" name="First" ><br>

        <label for="Last Name"><b>Last Name</b></label>   
        <input type="text" name="Last" ><br> 

        <label for="Gender"><b>Gender</b></label> 
        <select name="gender" id="genderr">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Prefer not to say</option>
        </select><br>

        <label for="username"><b>Username</b></label> 
        <input type="email" name="username" required placeholder="john@gmail.com"><br>   

        <label for="pass"><b>Password</b></label>  

       <!-- Reference Code -->
            <div ng-controller="PasswordController">
                <div style="float: left; width: 100px">
                    <input type="password" ng-model="password" name = "pass" ng-change="analyze(password)" style="width: 100px; height: 25px" />
                </div>
                <div ng-style="passwordStrength"></div>
            </div><br><br>
        <!-- Reference Code --> 
        <button type="submit">Register</button>

        </form>  
</body>




