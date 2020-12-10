<?php
// create connection
$conn = mysqli_connect('localhost', 'root', '', 'venty');

// check connection
if (!$conn) {    
    die("Connection failed: " . mysqli_connect_error());
}

// grab form data
$company = $_POST["Company"];
$fname = $_POST["First"];
$lname = $_POST["Last"];
$uname = $_POST['email'];
if(isset($_POST['pass'])){
    $upass = $_POST['pass'];
}





// hash the password
$pass_hash = password_hash($upass, PASSWORD_DEFAULT);

// write query
$sql = "INSERT INTO organiser (company, fname, lname, email, pass) VALUES ('$company','$fname','$lname','$uname', '$pass_hash')";

// execute query
$results = mysqli_query($conn, $sql);

//check email is unique
$verify = mysqli_query($conn, "SELECT `email` FROM `organiser` WHERE `email` = '".$_POST['email']."'");
if(mysqli_num_rows($verify) > 1) {
    echo "<script> alert('Username Already Exists') </script>";
}

// verify query results and display appropriate message
if ($verify) {    
    echo "<script>window.location.href='index.php';</script>";
    exit();
} 
else {  
    echo "<script> alert('Error Could Not Register') </script>";
    echo "<script>window.location.href='adminRegisterFront.';</script>";
} 
    
mysqli_close($conn);

?>