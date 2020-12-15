<?php 
include_once('databaseClass.php');

class delete_event{

    public $event_id;

    public function __construct($event_id){
        
        $this->event_id = $event_id;
        
        $sql = "DELETE * FROM Events WHERE Event_ID = '$event_id'";

        $db = new DatabaseClass ();

        $db->connect();
        
        $delete = $db->query_executed($sql);

        if($delete){  
            echo "<script>window.location.href='deleteFeedback.php';</script>";
        }

        else{
            die('Connection failed: ' . mysqli_connect_error());
            
        }
        
    }   

}


?>