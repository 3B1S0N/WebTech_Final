<?php

include_once('databaseClass.php');


use PHPUnit\Framework\TestCase;
class ThisTest extends TestCase{

    public function testQueryFunctionIsBool(){
        $db = new DatabaseClass ();
        $result = $db->query_executed("SELECT Event_Name FROM Events WHERE organiser_id = 14");
        $this->assertIsNotBool($result);
    }
}
?>

