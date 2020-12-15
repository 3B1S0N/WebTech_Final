<?php 
include_once('databaseClass.php');

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
    
    
    $sql = "UPDATE Events SET Event_Date = '$date', Expected_start_time = '$ex_start_time', Actual_start_time = '$ac_start_time',
    Expected_end_time = '$ex_end_time', Actual_end_time = '$ac_end_time', Event_Type = '$Event_type', Event_Name = '$Event_name', 
    Season = '$Season', Ticketed = '$Event_access', Event_location = '$Location', Event_capacity = '$Capacity', Attendance_level = '$Attendance', 
    Streamer_level = '$Streams' WHERE Event_ID = '$event_id'";
    
    $db = new DatabaseClass ();

    $db->connect();
    $update = $db->query_executed($sql);

    if($update){  
        echo "<script>window.location.href='updateFeedback.php';</script>";    
    }

    else{
        die('Connection failed: ' . mysqli_connect_error());
        
    }
    
}   

}


?>