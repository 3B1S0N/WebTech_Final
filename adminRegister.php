<?php
// create connection
include_once('databaseClass.php');
$db = new DatabaseClass ();

$db->connect();


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
$results = $db->query_executed($sql);

//check email is unique
$verify = mysqli_query($db->connect(), "SELECT `email` FROM `organiser` WHERE `email` = '".$_POST['email']."'");
if(mysqli_num_rows($verify) > 1) {
    echo "<script> alert('Username Already Exists') </script>";
    echo "<script>window.location.href='adminSignup.php';</script>";
}

// verify query results and display appropriate message
if ($verify) {    
    echo "<script>window.location.href='index.php';</script>";
    exit();
} 
else {  
    echo "<script> alert('Error Could Not Register') </script>";
    echo "<script>window.location.href='adminSignup.php.';</script>";
} 
    
?>