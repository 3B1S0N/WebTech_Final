<body>
        <form action="nextpage.php" method="POST" id="thisform">

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
            <select name="season" id="season"><br><br>
                <option value="Spring">Spring</option>
                <option value="Summer">Summer</option>
                <option value="Autmn">Autmn</option>
                <option value="Winter">Winter</option>
                <option value="Rainy Season">Rainy Season</option>
                <option value="Dry Season">Dry Season</option>
            </select><br><br>

            <label for="Access">Event Access Type</label>
            <select name="event_access_type" id="Access Type"><br><br>
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

            
            <button type="submit" form = "thisform" name="create_event">Create Event</button>

        </form>  

</body>

<?php
//creeate a button that links to a form which allows you to update the database
//select event_id and send the updated data to the update query
echo '<a href="adminhome.php">Home</a><br><br>';

?>
