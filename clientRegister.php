<?php
// create connection
include_once('databaseClass.php');
$db = new DatabaseClass ();

$db->connect();

// grab form data
$fname = $_POST["First"];
$lname = $_POST["Last"];
$gender = $_POST["gender"];
$uname = $_POST['username'];
if(isset($_POST['pass'])){
    $upass = $_POST['pass'];
}



// hash the password
$pass_hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// write query
$sql = "INSERT INTO client (fname, lname, email, pass, gender) VALUES ('$fname','$lname','$uname', '$pass_hash','$gender')";

// execute query
$results = $db->query_executed($sql);

//check email is unique
$verify = mysqli_query($db->connect(), "SELECT `email` FROM `client` WHERE `email` = '".$_POST['username']."'");
if(mysqli_num_rows($verify) > 1) {
    echo "<script> alert('Username Already Exists') </script>";
    echo "<script>window.location.href='signupClient.php';</script>";
}

// verify query results and display appropriate message
if ($results) {    
    echo "<script>window.location.href='index.php';</script>";
    exit();
} 
else {  
    echo "<script> alert('Error Could Not Register') </script>";
    echo "<script>window.location.href='signupClient.php.';</script>";
}  
    

// Style Alert Box
// https://www.tutorialspoint.com/How-to-create-and-apply-CSS-to-JavaScript-Alert-box
?>

