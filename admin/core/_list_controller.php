<?php
    class UserListController {
    	// constructor
    	function __construct($conn) {
    		$this->conn = $conn;    	
    	}

        // retrieving products data
        public function index() {
            $data  =  array();
            $sql   =  "SELECT * FROM registration
            LEFT JOIN rule_type_setup on registration.user_type = rule_type_setup.id
            LEFT JOIN users on registration.user_id = users.user_guid WHERE registration.id != 1";            
            $result =  $this->conn->query($sql);            
            if($result->num_rows > 0) {            
                $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);            
            }           
                   
           return $data;
        }
    }

    class SubjectListController {
    	// constructor
    	function __construct($conn) {
    		$this->conn = $conn;    	
    	}

        // retrieving products data
        public function index() {
            $data  =  array();
            $sql   =  "SELECT * FROM subjects ORDER BY subjects.`logs` DESC";            
            $result =  $this->conn->query($sql);            
            if($result->num_rows > 0) {            
                $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);            
            }           
                   
           return $data;
        }
    }
    class CurriculumnListController {
    	// constructor
    	function __construct($conn) {
    		$this->conn = $conn;    	
    	}

        // retrieving products data
        public function index() {
            $data  =  array();
            $sql   =  "SELECT * FROM curriculumn ORDER BY curriculumn.`logs` DESC";            
            $result =  $this->conn->query($sql);            
            if($result->num_rows > 0) {            
                $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);            
            }           
                   
           return $data;
        }
    }
    class SubjectSetupController {
    	// constructor
    	function __construct($conn) {
    		$this->conn = $conn;    	
    	}

        // retrieving products data
        public function index() {
            $data  =  array();
            $sql   =  "SELECT * FROM registration
            LEFT JOIN rule_type_setup on registration.user_type = rule_type_setup.id
            LEFT JOIN users on registration.user_id = users.user_guid WHERE registration.id != 1";            
            $result =  $this->conn->query($sql);            
            if($result->num_rows > 0) {            
                $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);            
            }           
                   
           return $data;
        }
    }
    class CurriculumnSetupController {
    	// constructor
    	function __construct($conn) {
    		$this->conn = $conn;    	
    	}

        // retrieving products data
        public function index() {
            $data  =  array();
            $sql   =  "SELECT * FROM registration
            LEFT JOIN rule_type_setup on registration.user_type = rule_type_setup.id
            LEFT JOIN users on registration.user_id = users.user_guid WHERE registration.id != 1";            
            $result =  $this->conn->query($sql);            
            if($result->num_rows > 0) {            
                $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);            
            }           
                   
           return $data;
        }
    }

    class EnrollementListController {
    	// constructor
    	function __construct($conn) {
    		$this->conn = $conn;    	
    	}

        // retrieving products data
        public function index() {
            $data  =  array();
            $sql   =  "SELECT * FROM registration
            LEFT JOIN rule_type_setup on registration.user_type = rule_type_setup.id
            LEFT JOIN users on registration.user_id = users.user_guid WHERE registration.id != 1";            
            $result =  $this->conn->query($sql);            
            if($result->num_rows > 0) {            
                $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);            
            }           
                   
           return $data;
        }
    }
    class ContentListController {
    	// constructor
    	function __construct($conn) {
    		$this->conn = $conn;    	
    	}

        // retrieving products data
        public function index() {
            $data  =  array();
            $sql   =  "SELECT * FROM page_content";            
            $result =  $this->conn->query($sql);            
            if($result->num_rows > 0) {            
                $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);            
            }           
                   
           return $data;
        }
    }
?>