<?php
// create connection
$conn = mysqli_connect('localhost', 'root', '', 'venty');

// check connection
if (!$conn) {    
    die("Connection failed: " . mysqli_connect_error());
}

// grab form data
$uname = $_POST['username'];
$upass = $_POST['password'];

// hash the password
$pass_hash = password_hash($upass, PASSWORD_DEFAULT);

// write query
$sql = "INSERT INTO Users (username, password) VALUES ('$uname', '$pass_hash')";

// execute query
$results = mysqli_query($conn, $sql);

// verify query results and display appropriate message
if ($results) {    
    echo "registered successfully";
} 
else {    
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}  
    
mysqli_close($conn);

?>