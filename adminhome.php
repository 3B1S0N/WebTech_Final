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

//delete and update page
// $organiser_query = "SELECT * FROM Events WHERE organiser_id = $organiser_id"; 
// create button on the card
// give buttton an id. Id should be the event_id
//<button id=  echo $row['event_id']>Store ID</button>

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Admin Dashboard</title>
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
                <a href="#">
                    <img width="30"src="images/avatar-01.jpg" alt="">
                </a>
            </div>
        </nav>

        <main>
            <div class="main__container">

                <div class="main__title">
                    <img src="Assets/hello.svg" alt="">
                    <div class="main_greeting">
                        <?php
                        if(isset($_SESSION['user'])){    
                            echo '<h1>Hello ' . $_SESSION['user'] . '</h1><br>'; 
                        }
                        ?>
                        <!-- <h1>Hello *Insert Name Here*</h1> -->
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
                            <p class="text-primary-p"><?php echo $row['Event_Name']; ?></p>
                            <span class="font-bold text-title">*Insert*</span>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                               
                <!-- <div class="container"> 
                    <div class="charts"> -->

                        <!-- <div class="charts__left">
                            <div class="charts__left__title">
                                <div>
                                    <h1>Daily Reports</h1>
                                    <p>Cupertino, California, USA</p>
                                </div>
                                <i class="fa fa-usd"></i>
                            </div>
                            <div id="apex1"></div>
                        </div> -->

                        <!-- <div class="charts__right">
                            <div class="charts__right__title">
                                <div>
                                    <h1>Stats Reports</h1>
                                    <p>Cupertino, California, USA</p>
                                </div>
                                <i class="fa fa-usd"></i>
                            </div>

                            <div class="charts__right_cards">
    
                                <div class="card1">
                                    <h1>Income</h1>
                                    <p>$75,300</p>
                                </div>

                                <div class="card2">
                                    <h1>Sales</h1>
                                    <p>$124,100</p>
                                </div>

                                <div class="card3">
                                    <h1>Users</h1>
                                    <p>3900</p>
                                </div>

                                <div class="card4">
                                    <h1>Orders</h1>
                                    <p>1881</p>
                                </div>
                            </div>
                        </div> -->
                    <!-- </div>
                </div> -->

                </div>
            </div>
        </main>

        <div id="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                    <img src="Assets/logo-2.png" alt="">
                    <h1>Venty Co.</h1>
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
                    <a href="#" id ="updateSpecial">Update Event</a>
                </div>
                <div class="sidebar__link" id ="delete">
                    <i class="fa fa-trash"></i>
                    <a href="#" id ="deleteSpecial">Delete Event</a>
                </div>
                <div class="sidebar__link" id ="customer">
                    <i class="fa fa-bookmark-o"></i>
                    <a href="#" id ="customerSpecial">Customer board</a>
                </div>
               
                <div class="sidebar__logout">
                    <i class="fa fa-power-off"></i>
                    <a href="#">Log out</a>
                </div>
            </div>
        </div>

    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/script.js"></script> -->
</body>
</html>