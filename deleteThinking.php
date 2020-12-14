<?php

include_once('databaseClass.php');
include_once('deleteBackend.php');

$db = new DatabaseClass ();

$db->connect();


$This_id = $_POST['ID'];


    if(isset($This_id)){

    $updatedEvent = new delete_event($This_id, $startDate, $exStartTime, $acStartTime, $exEndTime, $acEndTime,
    $eventType, $eventName, $season, $accessType, $location, $capacity,
    $attendance,$streamAttendance);
    
}

?>
