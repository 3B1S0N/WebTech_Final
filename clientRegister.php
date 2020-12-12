<?php
// create connection
$conn = mysqli_connect('localhost', 'root', '', 'venty');

// check connection
if (!$conn) {    
    die("Connection failed: " . mysqli_connect_error());
}

// grab form data
$fname = $_POST["First"];
$lname = $_POST["Last"];
$uname = $_POST['username'];
if(isset($_POST['pass'])){
    $upass = $_POST['pass'];
}
$verifypass = $_POST['verifypass'];
$gender = $_POST["gender"];

if($verifypass == $upass){
    echo "<script> alert('Sorry, passwords do not match) </script>";

    // hash the password
$pass_hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// write query
$sql = "INSERT INTO client (fname, lname, email, pass, gender) VALUES ('$fname','$lname','$uname', '$pass_hash','$gender')";

// execute query
$results = mysqli_query($conn, $sql);

//check email is unique
$verify = mysqli_query($conn, "SELECT `email` FROM `client` WHERE `email` = '".$_POST['username']."'");
if(mysqli_num_rows($verify) > 1) {
    echo "<script> alert('Username Already Exists') </script>";
}

// verify query results and display appropriate message
if ($results) {    
    echo "<script>window.location.href='index.php';</script>";
    exit();
} 
else {  
    echo "<script> alert('Username Already Exists') </script>";
    //echo "<script>window.location.href='clientRegisterFront.php';</script>";
}  
    
mysqli_close($conn);
    
}
else{
    
    echo "<script>window.location.href='signup.php';</script>";

}



// Style Alert Box
// https://www.tutorialspoint.com/How-to-create-and-apply-CSS-to-JavaScript-Alert-box
?>

