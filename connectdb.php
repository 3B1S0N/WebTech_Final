<?php
// create connection
function connect_db(){
    $conn = mysqli_connect('localhost', 'root', '', 'venty');

    // check connection
    if (!$conn) {    
        die("Connection failed: " . mysqli_connect_error());
    }
}

?>