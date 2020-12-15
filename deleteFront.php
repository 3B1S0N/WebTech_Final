<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <?php
        session_start();
        include_once('databaseClass.php');
        $db = new DatabaseClass ();
        $db->connect();
        
        if (isset($_GET['delete'])){
            $delete = "DELETE FROM Events WHERE Event_ID ='$_GET[delete]'";
            $delete_query = mysqli_query($db->connect(),$delete);
            if($delete_query){
                header("Location:deleteFeedback.php");
            }     
        }
              
        if(isset($_SESSION['organiser'])){
            $organiser_id = $_SESSION['organiser'];
        }

        $organiser_query = "SELECT * FROM Events WHERE organiser_id = $organiser_id";
        $result = mysqli_query($db->connect(),$organiser_query);
?>

</head>
<body>
    <div class="container">
        <nav class="navbar">
            <div class="nav_icon" onclick="toggleSidebar()">
                <i class="fa fa-bars"></i>
            </div>
            <div class="navbar__left">
                    <a class="active_link" href="adminhome.php">Dashboard</a>
                    <a href="createEventFront.php">Create Event</a>
            </div>
            <div class="navbar__right">
            </div>
        </nav>

        <main>
            <div class="main__container">

                <div class="main__title">
                    <div class="main_greeting">
                        <?php
                        if(isset($_SESSION['user'])){    
                            echo '<h1>Hello ' . $_SESSION['user'] . '</h1><br>'; 
                        }
                        ?>
    
                        <p>Welcome to your admin dashboard</p><br><br><br>
                    </div>
                </div>

                <div class="main__cards">
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                    <div class="card" id="card1">
                        <i class="fa fa fa-star-half-o fa-2x text-lightblue"></i>
                        <div class="card__inner">
                            <p class="text-primary-p"><?php echo $row['Event_Name']; ?></p><br>
                            <span class="font-bold text-title"><a href="deleteFront.php?delete=<?php echo $row['Event_ID']?>" id="thisLink">DELETE</a></span>
                        </div>
                    </div>
                    <?php
                        }
                    ?>

                </div>
            </div>
        </main>

        <div id="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                <img src="images/venty.png" alt="">
                    <h1>Venty Projects Ltd.</h1>
                </div>
                <i class="fa fa-times" id="sidebarIcon" onclick="closeSidebar"></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link active_menu_link">
                    <i class="fa fa-home"></i>
                    <a href="adminhome.php">Dashboard</a>
                </div>
                <h2>Event Management</h2>
                <div class="sidebar__link" id ="create">
                    <i class="fa fa-plus-circle"></i>
                    <a href="createEventFront.php" id="createSpecial">Create New Event</a>
                </div>
                <div class="sidebar__link" id ="update">
                    <i class="fa fa-pencil-square-o"></i>
                    <a href="updateFront.php" id ="updateSpecial">Update Event</a>
                </div>
                <div class="sidebar__link" id ="delete">
                    <i class="fa fa-trash"></i>
                    <a href="deleteFront.php" id ="deleteSpecial">Delete Event</a>
                </div>
                <div class="sidebar__link" id ="customer">
                    <i class="fa fa-bookmark-o"></i>
                    <a href="#" id ="customerSpecial">Customer board</a>
                </div>
               
                <div class="sidebar__logout">
                    <i class="fa fa-power-off"></i>
                    <a href="logout.php">Log out</a>
                </div>
            </div>
        </div>

    </div>
    <script src="sweetalert2.all.min.js"></script>
</body>
</html>