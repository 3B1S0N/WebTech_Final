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
                       
                    </div>
                </div>

                <div class="scroll">

                <form action="createEventBack.php" method="POST" id="thisform" style = "height: 100vh; 
                grid-template-columns: 0.8fr 1fr 1fr 1fr; grid-template-rows: 0.2fr 3fr; 
                grid-template-areas: 'sidebar nav nav nav' 'sidebar main main main';">
                        <label for="start">Event Date:</label>
                        <input type="date" id="start_date" name="start_date"
                        value="2018-07-22" min="1950-01-01" max="2022-12-31"><br><br>

                        <label for="appt">Expected Start Time:</label>
                        <input type="time" id="ex_start_time" name="ex_start_time" required><br><br>

                        <label for="appt">Actual Start Time:</label>
                        <input type="time" id="ac_start_time" name="ac_start_time" required><br><br>

                        <label for="appt">Expected End Time:</label>
                        <input type="time" id="ex_start_time" name="ex_end_time" required><br><br>

                        <label for="appt">Actual End Time:</label>
                        <input type="time" id="ac_start_time" name="ac_end_time" required><br><br>

                        <label for="Event Type">Event Type</label>   
                        <input type="text" name="type" id="type"><br><br>

                        <label for="Event Name">Event Name</label>   
                        <input type="text" name="name" id="name"><br><br>

                        <label for="Season">Season</label>
                        <select name="season" id="season" class="select"><br><br>
                            <option value="Spring">Spring</option>
                            <option value="Summer">Summer</option>
                            <option value="Autmn">Autmn</option>
                            <option value="Winter">Winter</option>
                            <option value="Rainy Season">Rainy Season</option>
                            <option value="Dry Season">Dry Season</option>
                        </select><br><br>

                        <label for="Access">Event Access Type</label>
                        <select name="event_access_type" id="Access Type" class="select"><br><br>
                            <option value="Ticketed">Ticketed</option>
                            <option value="Non-Ticketed">Non-Ticketed</option>
                        </select><br><br>

                        <label for="location">Location</label> 
                        <input type="text" name="location" required placeholder="125 Baker St. London, England"><br><br>

                        <label for="capacity">Event Capacity</label> 
                        <input type="number" name="capacity" required min="1" max="200000"><br><br>

                        <label for="attendance">Event Attendance Level</label> 
                        <input type="number" name="attendance" min="1" max="200000"><br><br>

                        <label for="stream_attendance">Livestream Attendance Level</label> 
                        <input type="number" name="stream_attendance" min="0"><br><br>

                        <!-- <label for="company_name">Company Name</label> 
                        <input type="text" name="company_name" id="company_name"><br><br> -->
                            
                        <button type="submit" form = "thisform" name="create_event" class="button">Create Event</button>
                            
                </form> 
                  
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