<?php

    class dbController {

        private $hostname  =   "localhost";

        private $username  =   "root";
        
        private $password  =   "root";
        
        private $db        =   "mnhs";
 
        //create connection 
        public function connect() {

            $conn = new mysqli($this->hostname, $this->username, $this->password, $this->db)or die("Database connection error." . $conn->connect_error);
                                         
            return $conn;           
        }
 
       	// close connection
        public function close($conn) {
            
            $conn->close();
        
        }
    }
?>