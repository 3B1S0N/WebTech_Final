<?php

class DatabaseClass{  
    private $host = "localhost"; 
    private $username = "root";  
    private $password ="";  
    private $db = "venty";
    // function password(){
    //     getenv('MYSQLPASS'??"");
    // }  
    

    public function __construct(){
        $this->password = getenv('MYSQLPASS'??"");
        // $this->host = $host;
        // $this->username = $username;
        // $this->password = $passs;
        // $this->db = $db;
    }

    public function connect(){
        $conn = mysqli_connect($this->host, $this->username, $this->password(), $this->db);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn; 
    }


    // this method used to execute mysql query  
    public function query_executed($sql){  
        $c = mysqli_query($this->connect(),$sql);  
        return $c;  
    }

    public function get_rows($fields, $id = NULL, $tablename = NULL){  
        $cn = !emptyempty($id) ? " WHERE $id " : " ";  
        $fields = !emptyempty($fields) ? $fields : " * ";  
        $sql = "SELECT $fields FROM $tablename $cn";  
        $results = $this-> query_executed($sql);  
        $rows = $this-> get_fetch_data($results);  
        return $rows;  
    }

    protected function get_fetch_data($r){  
        $array = array();  
        while ($rows = mysql_fetch_assoc($r)){  
            $array[] = $rows;  
        }  
        return $array;  
    }  
}
?>