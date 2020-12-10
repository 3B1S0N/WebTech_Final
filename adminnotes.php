<?php

session_start(); 
// create connection
$conn = mysqli_connect('localhost', 'root', '', 'venty');

// check connection
if (!$conn) {    
    die('Connection failed: ' . mysqli_connect_error());
}

if(isset($_SESSION['organiser'])){
    $organiser_id = $_SESSION['organiser'];
}

$organiser_query = "SELECT Event_Name FROM Events WHERE organiser_id = $organiser_id";
$result = mysqli_query($conn,$organiser_query);

$row = mysqli_fetch_assoc($result);


if(isset($_SESSION['user'])){    
    echo '<h1>Welcome ' . $_SESSION['user'] . '</h1><br><br>';
    if($row != NULL){
        echo '1. ' . $row["Event_Name"];
    }
    echo '<a href="adminFormFront.php">Create Form</a><br><br>'; 
    echo '<a href="logout.php">logout</a><br><br>';
    
    
} 


//see events 
//select events and put it in a table 
// put each event in a div
//show the details of each event that belongs to an admin 

// delete button
// send id of event to a delete form (yes or no)
// post id of event to query to delete it
// make it such that every time the home page loads it is loading from the database 



session_start(); 
// create connection
$conn = mysqli_connect('localhost', 'root', '', 'venty');

// check connection
if (!$conn) {    
    die('Connection failed: ' . mysqli_connect_error());
}

if(isset($_SESSION['organiser'])){
    $organiser_id = $_SESSION['organiser'];
}

$organiser_query = "SELECT Event_Name FROM Events WHERE organiser_id = $organiser_id";
$result = mysqli_query($conn,$organiser_query);

$row = mysqli_fetch_assoc($result);

?>