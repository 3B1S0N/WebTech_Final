<?php 
include_once('databaseClass.php');
$db = new DatabaseClass ();

if(isset($_GET['ID'])){
    $This_id = $_GET['ID'];
} else if(isset($_POST['ID'])){
    $This_id = $_POST['ID'];
}

$result = $db->query_executed("SELECT * FROM Events WHERE Event_ID = $This_id");

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
                    <a href="adminhome.php">Dashboard</a>
                    <a class="active_link" href="createEventFront.php">Create Event</a>
            </div>
            <div class="navbar__right">
            </div>
        </nav>

        <main>
            <div class="main__container">

                <div class="main__title">
                    <div class="main_greeting">
                       
                    </div>
                </div>

                <div class="scroll">

                <form action="updateThinking.php" method="POST" id="thisform" style = "height: 100vh; 
                grid-template-columns: 0.8fr 1fr 1fr 1fr; grid-template-rows: 0.2fr 3fr; 
                grid-template-areas: 'sidebar nav nav nav' 'sidebar main main main';">

                <?php if(mysqli_num_rows($result)>0){ 
                        $row = mysqli_fetch_assoc($result);?>

                        <input type="hidden" name="ID" value="<?php echo $This_id;?>">

                        <label for="start">Event Date:</label>
                        <input type="date" id="start_date" name="start_date"
                        value=<?php echo $row['Event_Date']; ?> min="1950-01-01" max="2022-12-31"><br><br>

                        <label for="appt">Expected Start Time:</label>
                        <input type="time" id="ex_start_time" name="ex_start_time"  value="<?php echo $row['Expected_start_time']; ?>"required><br><br>

                        <label for="appt">Actual Start Time:</label>
                        <input type="time" id="ac_start_time" name="ac_start_time" value="<?php echo $row['Actual_start_time']; ?>" required><br><br>

                        <label for="appt">Expected End Time:</label>
                        <input type="time" id="ex_start_time" name="ex_end_time"  value="<?php echo $row['Expected_end_time']; ?>" required><br><br>

                        <label for="appt">Actual End Time:</label>
                        <input type="time" id="ac_start_time" name="ac_end_time"  value="<?php echo $row['Actual_end_time']; ?>" required><br><br>

                        <label for="Event Type">Event Type</label>   
                        <input type="text" name="type" value="<?php echo $row['Event_Type'];?>" id="type"><br><br>

                        <label for="Event Name">Event Name</label>   
                        <input type="text" name="name" id="name" value="<?php echo $row['Event_Name'];?>"><br><br>

                        <label for="Season">Season</label>
                        <select name="season" id="season" class="select" value="<?php echo $row['Season'];?>"><br><br>
                            <option value="Spring">Spring</option>
                            <option value="Summer">Summer</option>
                            <option value="Autmn">Autmn</option>
                            <option value="Winter">Winter</option>
                            <option value="Rainy Season">Rainy Season</option>
                            <option value="Dry Season">Dry Season</option>
                        </select><br><br>

                        <label for="Access">Event Access Type</label>
                        <select name="event_access_type" value="<?php echo $row['Ticketed'];?>" id="Access Type" class="select"><br><br>
                            <option value="Ticketed">Ticketed</option>
                            <option value="Non-Ticketed">Non-Ticketed</option>
                        </select><br><br>

                        <label for="location">Location</label> 
                        <input type="text" name="location" required value="<?php echo $row['Event_location'];?>"><br><br>

                        <label for="capacity">Event Capacity</label> 
                        <input type="number" name="capacity" value= "<?php echo $row['Event_capacity'];?>" required min="1" max="200000"><br><br>

                        <label for="attendance">Event Attendance Level</label> 
                        <input type="number" name="attendance" value="<?php echo $row['Attendance_level'];?>" min="1" max="200000"><br><br>

                        <label for="stream_attendance">Livestream Attendance Level</label> 
                        <input type="number" name="stream_attendance" value="<?php echo $row['Streamer_level'];?>" min="0"><br><br>

                        <?php
                            }     
                        ?>      
                </form> 
                <button type="submit" form = "thisform" name="create_event" class="button">Update Event</button>
                                     
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

</body>
</html>