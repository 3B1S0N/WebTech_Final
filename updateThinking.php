<?php

//Db Stuff
$conn = mysqli_connect('localhost', 'root', '', 'venty');

//check connection
if (!$conn) {    
    die('Connection failed: ' . mysqli_connect_error());
}

include_once('updateBackend.php');


if(isset($_GET['ID'])){
    $This_id = $_GET['ID'];
}


if(isset($_POST['start_date'], $_POST['ex_start_time'], $_POST['ac_start_time'], $_POST['ex_end_time'], $_POST['ac_end_time'],
$_POST['type'], $_POST['name'], $_POST['Season'], $_POST['event_access_type'], $_POST['location'], $_POST['capacity'],
$_POST['attendance'],$_POST['stream_attendance'],)){

    //$updatedEvent = new update_event(1, '2018-07-22', '12:59', '12:59', '12:59', '12:59', 'Concert', 'A Flap', 'Spring', 'Ticketed', 'Lapalm Royale Beach Resort', 5, 6, 2);

    $updatedEvent = new update_event($_POST['ID'], $_POST['start_date'], $_POST['ex_start_time'], $_POST['ac_start_time'], $_POST['ex_end_time'], $_POST['ac_end_time'],
    $_POST['type'], $_POST['name'], $_POST['Season'], $_POST['event_access_type'], $_POST['location'], $_POST['capacity'],
    $_POST['attendance'],$_POST['stream_attendance']);

    $results =  $updatedEvent->ThisEvent($updatedEvent->date, $updatedEvent->ex_start_time, $updatedEvent->ac_start_time, 
    $updatedEvent->ex_end_time, $updatedEvent->ac_end_time,  $updatedEvent->Event_type, $updatedEvent->Event_name, 
    $updatedEvent->Season, $updatedEvent->Event_access, $updatedEvent->Location, $updatedEvent->Capacity, 
    $updatedEvent->Attendance, $updatedEvent->Streams);
    
}


$old_values = "SELECT * FROM Events WHERE Event_ID = $This_id";
$result = mysqli_query($conn,$old_values);
?>
