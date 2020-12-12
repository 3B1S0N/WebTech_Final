<?php 
//consider security for id by researching html encrytption instead of ? id =1
//try not to copy ekow's code

$conn = mysqli_connect('localhost', 'root', '', 'venty');

// check connection
if (!$conn) {    
    die('Connection failed: ' . mysqli_connect_error());
}

class update_event{

public $event_id;
public $date = "";
public $ex_start_time;
public $ac_start_time;
public $ex_end_time;
public $ac_end_time;
public $Event_type = "";
public $Event_name = "";
public $Season;
public $Event_access;
public $Location = "";
public $Capacity = "";
public $Attendance = "";
public $Streams = "";

public function __construct($event_id, $date, $ex_start_time, $ac_start_time, 
$ex_end_time, $ac_end_time, $Event_type, $Event_name, $Season, $Event_access, $Location, $Capacity, $Attendance, $Streams){

    $this->event_id = $event_id;
    $this->date = $date;
    $this->ex_start_time = $ex_start_time;
    $this->ac_start_time = $ac_start_time;
    $this->ex_end_time = $ex_end_time;
    $this->ac_end_time = $ac_end_time;
    $this->Event_name = $Event_name;
    $this->Event_type = $Event_type;
    $this->Season = $Season;
    $this->Event_access = $Event_access;
    $this->Location = $Location;
    $this->Capacity = $Capacity;
    $this->Attendance = $Attendance;
    $this->Streams = $Streams;  
}


public function ThisEvent($date, $ex_start_time, $ac_start_time, $ex_end_time,
 $ac_end_time,  $Event_type, $Event_name, $Season, $Event_access, $Location, $Capacity, $Attendance, $Streams){

//connect the db

//updating query for database
$sql = "UPDATE Events SET Event_Date = '$date', Expected_start_time = '$ex_start_time', Actual_start_time = '$ac_start_time',
Expected_end_time = '$ex_end_time', Actual_end_time = '$ac_end_time', Event_Type = '$Event_type', Event_Name = '$Event_name', 
Season = '$Season', Ticketed = '$Event_access', Event_location = '$Location', Event_capacity = '$Capacity', Attendance_level = '$Attendance', 
Streamer_level = '$Streams' WHERE Event_ID = '$this->event_id'";

echo $sql;

$conn = mysqli_connect('localhost', 'root', '', 'venty');

// check connection
if (!$conn) {    
    die('Connection failed: ' . mysqli_connect_error());
}

$update = mysqli_query($conn, $sql);

if($update){  
    //echo "<script>window.location.href='adminhome.php';</script>";
    // do something to show it has been updated succesfully then add a back button
    echo "succesful";
}
else{
    //echo "<script>window.location.href='adminhome.php';</script>";
    // error . html  
    echo "error";
    
}


}


}
// $updatedEvent = new update_event(2, '2018-07-22', '12:59', '12:59', '12:59', '12:59', 'Concert', 'A Wars', 'Spring', 'Ticketed', 'Lapalm Royale Beach Resort', 5, 6, 2);

//     $results =  $updatedEvent->ThisEvent($updatedEvent->date, $updatedEvent->ex_start_time, $updatedEvent->ac_start_time, 
//     $updatedEvent->ex_end_time, $updatedEvent->ac_end_time,  $updatedEvent->Event_type, $updatedEvent->Event_name, 
//     $updatedEvent->Season, $updatedEvent->Event_access, $updatedEvent->Location, $updatedEvent->Capacity, 
//     $updatedEvent->Attendance, $updatedEvent->Streams);


?>