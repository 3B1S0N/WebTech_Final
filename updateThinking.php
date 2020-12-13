<?php

include_once('databaseClass.php');
include_once('updateBackend.php');

$db = new DatabaseClass ();

$db->connect();


$This_id = $_POST['ID'];
$startDate = $_POST['start_date'];
$exStartTime = $_POST['ex_start_time'];
$acStartTime = $_POST['ac_start_time'];
$exEndTime = $_POST['ex_end_time'];
$acEndTime = $_POST['ac_end_time'];
$eventType = $_POST['type'];
$eventName = $_POST['name'];
$season = $_POST['season'];
$accessType = $_POST['event_access_type'];
$location = $_POST['location'];
$capacity = $_POST['capacity'];
$attendance = $_POST['attendance'];
$streamAttendance = $_POST['stream_attendance'];

    if(isset($This_id,$startDate, $exStartTime, $acStartTime, $exEndTime, $acEndTime,
    $eventType, $eventName, $season, $accessType, $location, $capacity,
    $attendance,$streamAttendance)){

    $updatedEvent = new update_event($This_id, $startDate, $exStartTime, $acStartTime, $exEndTime, $acEndTime,
    $eventType, $eventName, $season, $accessType, $location, $capacity,
    $attendance,$streamAttendance);
    
}

?>
