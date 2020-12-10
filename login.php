<?php
session_start();    
// create connection
$conn = mysqli_connect('localhost', 'root', '', 'venty');

// check connection
if (!$conn) {    
    die('Connection failed: ' . mysqli_connect_error());
}

// grab form data
$email = $_POST['email'];
$upass = $_POST['password'];

if (isset($_POST['butt1'])){
        // write admin query
        $sql_1 = "SELECT * FROM organiser WHERE email = '$email'";

        // Execute query
        $result_1 = mysqli_query($conn, $sql_1);

        // check that exactly 1 row was returned
        if (mysqli_num_rows($result_1) != 1) {  
            echo "<script> alert('Hmmm...Are you sure you are registered as an Organiser?') </script>";
            echo "<script>window.location.href='index.php';</script>";

        }

        else{

        // get query result as an array
        $user = mysqli_fetch_assoc($result_1);

        // verify user password match
        $verify_pass = password_verify($upass, $user['pass']);

        // set user session if password is verified
        if ($verify_pass) {    
            
            $_SESSION['user'] = $user['fname'];
            $_SESSION['organiser'] = $user['organiser_id'];

        }
    }
}

else{
        // write client query
        $sql_2 = "SELECT * FROM client WHERE email = '$email'";

        // Execute query
        $result_2 = mysqli_query($conn, $sql_2);

        // check that exactly 1 row was returned
        if (mysqli_num_rows($result_2) != 1) {    
            echo "<script> alert('Hmmm...Are you sure you are registered as a Client?') </script>";
            echo "<script>window.location.href='index.php';</script>";
        }

        else{

            // get query result as an array
            $user = mysqli_fetch_assoc($result_2);
    
            // verify user password match
            $verify_pass = password_verify($upass, $user['pass']);
    
            // set user session if password is verified
            if ($verify_pass) {    
                
                $_SESSION['user'] = $user['fname'];
            }
        }
    
}

echo "<script>window.location.href='newadminhome.php';</script>";
    
    
?>